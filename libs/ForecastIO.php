<?php
// TODO: Move API endpoints out of the class and into consts.
class ForecastIO
{
    // Forecast IO API for weather.
    const WEATHER_ENDPOINT = 'https://api.forecast.io/forecast/';
    private $api_key;

    // Earthtools API for Sunrise / Sunset.

    const SUN_ENDPOINT = "http://www.earthtools.org/sun/";

    // EPA.GOV API for UV Index.
    const UV_ENDPOINT = "http://iaspub.epa.gov/enviro/efservice/getEnvirofactsUVDAILY/ZIP/";


    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    private function requestWeather($latitude, $longitude, $time = null, $options = array())
    {
        $request_url = self::WEATHER_ENDPOINT
            . $this->api_key
            . '/'
            . $latitude
            . ','
            . $longitude
            . ((is_null($time)) ? '' : ','. $time);

        if (!empty($options)) {
            $request_url .= '?'. http_build_query($options);
        }

        $response = json_decode(file_get_contents($request_url));
        $response->headers = $http_response_header;
        return $response;
    }

    public function requestSunData($latitude,$longitude){
        $request_url=self::SUN_ENDPOINT
            . $latitude
            . "/"
            . $longitude
            ."/"
            . date('n')
            . "/"
            . date('d')
            . "/99/1";

        $xml = file_get_contents($request_url);
        return simplexml_load_string($xml);
    }

    public function requestUVIndex($zipcode){

        $request_url= self::UV_ENDPOINT
            . $zipcode
            . "/JSON";
        $response = json_decode(file_get_contents($request_url));
        //$response->headers = $http_response_header;

        return $response[0];
    }

    public function get($latitude, $longitude, $time = null, $options = array())
    {
        // Get Weather and set thermometer.
        $forecast = $this->requestWeather($latitude, $longitude, $time, $options);
        if($forecast->currently->temperature < 50){$forecast->currently->thermometer ='cold';}
        elseif($forecast->currently->temperature < 80){$forecast->currently->thermometer ='warm';}
        else{$forecast->currently->thermometer ='warm';}

        // Get Sunrise and Sunset
        $data=$this->requestSunData($latitude,$longitude);
        $forecast->sunrise=$data->morning->sunrise;
        $forecast->sunset=$data->evening->sunset;

        // Get UV Data
        $data = $this->requestUVIndex('29072');
        $forecast->currently->uvIndex = $data->UV_INDEX;
        $uvText = array('LOW','LOW','LOW',
                        'MEDIUM','MEDIUM','MEDIUM',
                        'HIGH','HIGH','VERY-HIGH',
                        'VERY-HIGH','VERY-HIGH',
                        'EXTREME','EXTREME','EXTREME');
        $forecast->currently->uvText = $uvText[$data->UV_INDEX];
        return $forecast;

    }


}