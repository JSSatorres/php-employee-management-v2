<?php
class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
       
        echo "<p>Nuevo Controlador</p>";
    }
    function render(){
        $this->view->render('main/index');
    }
    function saludo(){
        echo "<p>Saludos</p>";
    }
}
