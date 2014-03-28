<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 5:07 PM
 */

class Contact extends Controller
{

    function __construct()
    {
        parent::__construct();
        //Session::sessionStart('SESSION_NAME'); //TODO: Change session name to relevant name.


    }

    function index($location = null)
    {

        $this->view->ads = $this->model->getAds(array('728x90'));
        //Render the page.
        $this->view->render('header');
        $this->view->render('contact/index');
        $this->view->render('footer');

    }

    function submission()
    {
        $this->view->ads = $this->model->getAds(array('728x90'));
        //Render the page.
        $this->view->render('header');
        $this->view->render('contact/submission');
        $this->view->render('footer');

    }

}