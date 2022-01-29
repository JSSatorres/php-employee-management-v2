<?php

class Employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('employee/index');
    }
    function newEmployee()
    {
        echo "New User created";
        // $this->model->insert();
        print_r($_REQUEST);
    }
}
