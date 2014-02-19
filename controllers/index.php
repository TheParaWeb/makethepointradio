<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 5:07 PM
 */

class Index extends Controller
{

    function __construct()
    {
        parent::__construct();
        //Session::sessionStart('SESSION_NAME'); //TODO: Change session name to relevant name.


    }

    function index($location = null)
    {
        // TODO: Add statistics.
        //$this->statistics->insertPageView();

        // Get location for weather and news.
        $this->location = $this->model->getLocation();

        //Now playing.
        $this->view->nowPlaying->name = "Kevin Cohen";
        $this->view->nowPlaying->time = "6AM-9AM";
        $this->view->nowPlaying->bioURL = URL."shows/1/";
        $this->view->nowPlaying->imgHref = URL."public/images/djs/portrait-keven-thumb.jpg";

        // News - Local
        $this->view->news = $this->model->getNews();

        // Facebook
        $this->view->facebook = $this->model->getFacebook();

        // Weather
        $this->view->weatherConditions = $this->model->getWeather($this->location);

        //Render the page.
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

   function test($name = "Lee"){
       echo "hello ".$name;
   }

}