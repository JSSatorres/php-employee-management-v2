<?php

class employeeModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function insert($dates){

        try {
            $query=$this->db->connect()->prepare("INSERT INTO employees (name,lastName, email,gender,city,streetAddress,state,age,postalCode,phoneNumber)VALUES (:name, :lastName, :email, :gender, :city,:streetAddress, :state, :age, :postalCode, :phoneNumber)");

            $query->execute(['name'=>$dates["name"],'lastName'=>$dates["lastName"],'email'=>$dates["email"],'gender'=>$dates["gender"],'city'=>$dates["city"],'streetAddress'=>$dates["streetAddress"],'state'=>$dates["state"],'age'=>$dates["age"],'postalCode'=>$dates["postalCode"],'phoneNumber'=>$dates["phoneNumber"]]);
            return true;

        } catch (PDOException $e) {
        //    echo $e->getMessage();
            return false;
        }
    }

    function get(){
        try {$query=$this->db->connect()->prepare("SELECT* FROM  employees");
            $query->execute();
            return $query->fetchAll( PDO::FETCH_CLASS,"employee");
        } catch (PDOException $e) {
           
        }
    }
}