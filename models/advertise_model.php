<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 1/23/14
 * Time: 3:56 PM
 */

class Advertise_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
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
}