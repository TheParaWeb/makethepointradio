<?php

Class AdEngine
{
    function __construct()
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    public function getSingleAd($size)
    {
        // Get all adds with a specific size.
        $ads = $this->getAds($size);
        // Create an array of ad id's based on weight.
        $weighted = $this->weighting($ads);

        // Get the total array length and make a random number within the array.
        $count = count($weighted) - 1;
        $index = rand(0, $count);

        // Get add index of the chosen ad.
        $adIndex = $weighted[$index];

        // Return the ad's DB row to the page model.
        $stmt = $this->db->prepare("SELECT *
                                    FROM ads
                                    INNER JOIN advertisers
                                    ON ads.advertiser_id=advertisers.advertiser_id
                                    WHERE ads.ad_id = :id");

        $stmt->execute(array(":id"=>$adIndex));
        $results = $stmt->fetchAll();
        return $results[0];

    }

    public function getAds($size)
    {
        $stmt = $this->db->prepare("SELECT *
                                    FROM ads
                                    INNER JOIN advertisers
                                    ON ads.advertiser_id=advertisers.advertiser_id
                                    WHERE ads.size = :size");
        $stmt->execute(array(":size"=>$size));
        $results = $stmt->fetchAll();
        return $results;
    }

    public function weighting($ads)
    {

        $weightedAdds = array();
        foreach($ads as $ad)
        {

            for($i = 0; $i < $ad['weight']; $i++)
            {
                array_push($weightedAdds, $ad['ad_id']);
            }

        }

        return $weightedAdds;
    }


}
