<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/16/13
 * Time: 12:24 PM
 */


// TODO: GOOGLE API. Change location from IP to get full data from google. Make changes to weather app to pull data from google.
class Geocoder
{
    const GOOGLE_ENDPOINT = "http://maps.googleapis.com/maps/api/geocode/json?";

    /**
     * @param string $ip IP address to lookup.
     * @return array $location Includes CITY, STATE, COUNTRY, zip(int), lat(int), long(int).
     */

    public function getLocationFromIP($ip){
        $url="http://api.ipinfodb.com/v3/ip-city/?key=158792b43c69065fc9f89df02dbde501c9d1fa74c88fb0fd696e5f714f3f0fe6";
        $url.="&ip=".$ip."&format=json";
        return json_decode(file_get_contents($url),true);
    }

    public function getLocation($input){
        // Add login to determine input type. (Zip, Lat/Long, City,State)


    }

    public function getLocationFromLatLong($data){
        var_dump($data);die;
    }

    public function getLocationFromZip($data){
        var_dump($data);die;
    }

    public function getLocationFromCityState($data){
        var_dump($data);die;
    }


}