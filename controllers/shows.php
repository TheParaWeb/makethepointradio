<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 5:07 PM
 */

class Shows extends Controller
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

        //Render the page.
        $this->view->render('header');
        $this->view->render('shows/index');
        $this->view->render('footer');
    }

    function bio($id = null)
    {
        //Render the page.
        $this->view->render('header');
        $this->view->render('shows/bio');
        $this->view->render('footer');
    }


    function contact()
    {
        //Render the page.
        $this->view->render('header');
        $this->view->render('contact/index');
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