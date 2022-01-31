<?php

class Dashboard extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->employees = [];
    }
    function render(){
        $employee=  $this->model->get();
        $this->view->employees = $employee;
        $this->view->render('dashboard/index');
    }



    function updateEmployee(){

    }

    function deleteEmployee(){

    }

}
