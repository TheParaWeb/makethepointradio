<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 5:07 PM
 */

class Admin extends Controller
{

    function __construct()
    {
        parent::__construct();
        //Session::sessionStart('SESSION_NAME'); //TODO: Change session name to relevant name.


    }

    function index($location = null)
    {
        $this->view->render('admin/header');
        $this->view->render('admin/index');
        $this->view->render('admin/footer');
    }

    function forms($name = "Lee"){
        $this->view->render('admin/header');
        $this->view->render('admin/forms');
        $this->view->render('admin/footer');
    }

}