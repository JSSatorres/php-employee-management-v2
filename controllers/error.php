<?php

class ErrorM extends Controller
{
    function __construct()
    {
    parent::__construct();
    $this->view->mensaje = "There has been an Error";
    $this->view->render('error/index');
    echo "<p>Unable to load the page</p>";
    }
}
