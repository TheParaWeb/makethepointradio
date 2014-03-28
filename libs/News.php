<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 4:39 PM
 */

class News
{
    function __construct()
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    function getLocalNews(){
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

    function getABCNews($genre = 'national'){
        $feedBase = "http://abcnewsradioonline.com/";
        $feedEnd = "rss.xml";

        switch ($genre){
            case 'sports':
                $feedMiddle = "sports-news/";
                break;
            case 'entertainment':
                $feedMiddle = "entertainment-news/";
                break;
            case 'national':
                $feedMiddle = "national-news/";
                break;
            case 'national':
                $feedMiddle = "politics-news/";
                break;
            case 'national':
                $feedMiddle = "world-news/";
                break;
            case 'national':
                $feedMiddle = "business-news/";
                break;
            case 'national':
                $feedMiddle = "health-news/";
                break;
            default:
                $feedMiddle = "national-news/";
        }

        $feed = $feedBase.$feedMiddle.$feedEnd;
        $rss = simplexml_load_file($feed);

        $data = new stdClass();
        $data->title = $rss->channel->title;
        $data->link = $rss->channel->link;
        $data->items = array();

        foreach ($rss->channel->item AS $node){
            $item = array (
                'title' => $node->title->__toString(),
                'link' => $node->link->__toString(),
                'date' => $node->pubDate->__toString()
            );
            array_push($data->items,$item);
        }
        return $data;
    }

}