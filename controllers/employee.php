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
        // print_r($_REQUEST);

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

        $this->model->insert(['name'=>$name,'lastName'=>$lastName,'email'=>$email,'gender'=>$gender,'city'=>$city,'streetAddress'=>$streetAddress,'state'=>$state,'age'=>$age,'postalCode'=>$postalCode,'phoneNumber'=>$phoneNumber]);
    }
}
