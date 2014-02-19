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

    public function getNews(){
        $rss = new DOMDocument();
        $rss->load('https://news.google.com/news/feeds?q=columbia%2Csc&output=rss');
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {

            $html=$node->getElementsByTagName('description')->item(0)->nodeValue;
            $xpath = new DOMXPath(@DOMDocument::loadHTML($html));
            $src = $xpath->evaluate("string(//img/@src)");

            $item = array (
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                'img' => $src
            );
            array_push($feed, $item);
        }
        return $feed;
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