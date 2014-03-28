<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 1/23/14
 * Time: 3:56 PM
 */

class Index_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
        Session::sessionStart('VISITOR');
        $this->geoCoder = new Geocoder();

    }

    public function getAds($sizes)
    {
        $this->adEngine = new AdEngine();
        $adsArray = array();
        foreach ($sizes AS $size){
            $thisAd = $this->adEngine->getSingleAd($size);
            array_push($adsArray,$thisAd);
        }
        return $adsArray;
    }

    public function getShow(){
        $this->show = new Lineup();
        return $this->show->getShowByTime(date("H:i:s"),date('D'));
    }


    public function getPollQuestion(){
        $this->poll = new Poll();
        return $this->poll->getPollQuestion();
     }

    public function submitPollAnswer($pollId, $answer, $visitorId){
        $this->poll = new Poll();
        return $this->poll->insertAnswer($pollId, $answer, $visitorId);
    }

    public function getLocation(){
        // If search is not initiated, pull location from IP.
        if(!isset($_POST['location'])){$location=$this->geoCoder->getLocationFromIP($_SERVER['REMOTE_ADDR']);}
        else{$location=$this->geoCoder->getLocation($_POST['location']);}
        return $location;
    }

    public function getWeather($location){
        $this->forecast = new ForecastIO('58a0e9e0efd5d2b69387806157975afe');
        $this->conditions = $this->forecast->get($location['latitude'],$location['longitude']);
        return $this->conditions;
    }

    public function getLocalNews(){
        $this->news = new News();
        return $this->news->getLocalNews();
    }

    public function getNationalNews(){
        $this->news = new News();
        return $this->news->getABCNews();
    }

    public function getFacebook(){
        $page_id = 'makethepointcae';
        $access_token = '598764416845888|jNn7g6RVO_SIxzCWYbNvqMGfq4k';
        $json_object = @file_get_contents('https://graph.facebook.com/' . $page_id .
            '/posts?access_token=' . $access_token);
        return json_decode($json_object);
    }

    public function test(){

    }
}