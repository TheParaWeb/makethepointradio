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
        Session::sessionStart('VISITOR'); //TODO: Change session name to relevant name.
        Session::checkNewVisitor();
    }

    function index($location = null)
    {
        // TODO: Add statistics.
        //$this->statistics->insertPageView();

        $this->view->js = array(
            'index/js/index.js'
        );

        // Now Playing. Get current show for the home page.
        $this->view->show = $this->model->getShow();

        // Display Ads. (pass an array with each ad's dimensions IN THE ORDER OF THE AD's APPEARANCE.
        $this->view->ads = $this->model->getAds(array('728x90', '728x90', '300x250', '300x250', '300x250', '468x60'));


        // Get location for weather and news.
        $this->location = $this->model->getLocation();


        // News - Local
        $this->view->localNews = $this->model->getLocalNews();
        // News - Local
        $this->view->nationalNews = $this->model->getNationalNews();

        // Facebook
        $this->view->facebook = $this->model->getFacebook();

        // Weather
        $this->view->weatherConditions = $this->model->getWeather($this->location);

        // Display poll question
        $this->view->pollQuestion = $this->model->getPollQuestion();

        //Render the page.
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

    function submitPollAnswer($pollId, $answer) {

        $status = $this->model->submitPollAnswer($pollId, $answer, Session::get("visitorId"));

        if($status['status']=='success'){
            header("Location: " . URL);
        } else { // TODO: Notifications and error handling
            header("Location: " . URL . "error/");
        }

    }

    function xhrSubmitPollAnswer(){
        echo json_encode($this->model->submitPollAnswer($_POST['id'],$_POST['answer'],Session::get('visitorId')));
    }

   function test($name = "Lee"){
       echo "hello ".$name;
   }



}