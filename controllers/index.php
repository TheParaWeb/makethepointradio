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

    function index()
    {
        //$this->statistics->insertPageView();

        //Now playing.
        $this->view->nowPlaying->name = "Kevin Cohen";
        $this->view->nowPlaying->time = "6AM-9AM";
        $this->view->nowPlaying->bioURL = URL."shows/1/";
        $this->view->nowPlaying->imgHref = URL."public/images/djs/portrait-keven-thumb.jpg";

        // News - Local
        $this->view->news = $this->model->getNews();

        // Facebook
        $this->view->faceBook = $this->model->getFacebook();

        // Weather
        $location = Auth::getLocation($_SERVER['REMOTE_ADDR']);
        $this->view->weatherConditions = $this->model->getWeather($location);

        //Render the page.
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

    function test(){
        $facebook = $this->model->getFacebook();
        foreach($facebook->data AS $data){
            echo "<b>".$data->type."</b><br/>";
            var_dump($data);
            echo "<br/><hr/><br/>";
        }

        die;
    }

}