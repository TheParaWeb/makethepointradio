<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 5:07 PM
 */

class Advertise extends Controller
{

    function __construct()
    {
        parent::__construct();
        //Session::sessionStart('SESSION_NAME'); //TODO: Change session name to relevant name.


    }

    function index($location = null)
    {

        $this->view->ads = $this->model->getAds(array('728x90'));
        $this->view->render('header');
        $this->view->render('advertise/index');
        $this->view->render('footer');

    }


}