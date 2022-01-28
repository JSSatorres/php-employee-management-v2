<?php

class ErrorM extends Controller
{
    function __construct()
    {
    parent::__construct();
    $this->view->render('error/index');
    echo "<p>Unable to load the page</p>";
    }
}
