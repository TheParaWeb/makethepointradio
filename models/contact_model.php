<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 1/23/14
 * Time: 3:56 PM
 */

class Contact_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getTitle(){
        return "new title";
    }
}