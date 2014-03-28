<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 5:07 PM
 */

class Test extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
       $this->model->test();
    }

    function shows()
    {
        $this->model->shows();
    }

}