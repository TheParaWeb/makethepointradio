<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 1/23/14
 * Time: 3:56 PM
 */

class Test_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->addEngine = new AdEngine();
        $this->lineup = new Lineup();
    }

    public function test(){
        $this->news = new News();
        echo "<pre>";

        var_dump($this->news->getABCNews('national'));
        die;
    }


}