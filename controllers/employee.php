<?php

class Employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->message ="";
    }

    function render(){
        $this->view->render('employee/index');
    }

    function newEmployee()
    {
        $name= $_POST["name"];
        $lastName=$_POST["lastName"];
        $email= $_POST["email"];
        $gender= $_POST["gender"];
        $city= $_POST["city"];
        $streetAddress= $_POST["streetAddress"];
        $state= $_POST["state"];
        $age= $_POST["age"];
        $postalCode= $_POST["postalCode"];
        $phoneNumber= $_POST["phoneNumber"];

        $message="";

        if ($this->model->insert(['name'=>$name,'lastName'=>$lastName,'email'=>$email,'gender'=>$gender,'city'=>$city,'streetAddress'=>$streetAddress,'state'=>$state,'age'=>$age,'postalCode'=>$postalCode,'phoneNumber'=>$phoneNumber])) {
            $message ="new employee had been created";
        }else {
            $message=" the employee already exist";
        }
        $this->view->message= $message;
        $this->render();
    }

    function get(){
        $getemployees = $this->model->get();
        echo json_encode ($getemployees);

    function getEmployee(){
        
    }

    }
    function showEmployee(){
        $url = isset($_GET["url"]) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        echo $url[2];
        print_r($_REQUEST);
        if(isset($url[2]));
        $this->view->employee = $this->view->getEmployee($url[2]);
        // $this->view->dashboard;
        $this->render();
    }

    


}

