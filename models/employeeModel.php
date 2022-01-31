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

     function getById($id){
        $item= new Employee;
        $query=$this->db->connect()->prepare("SELECT* FROM  employees WHERE id = :id");
        try {
            $query->execute(['id'=>$id]);

            while($row= $query->fetch()){
                $item->name =$row["name"];
                $item->lastName =$row["lastName"];
                $item->email =$row["email"];
                $item->gender =$row["gender"];
                $item->city =$row["city"];
                $item->streetAddress =$row["streetAddress"];
                $item->state =$row["state"];
                $item->age =$row["age"];
                $item->postalCode =$row["postalCode"];
                $item->phoneNumber =$row["phoneNumber"];
            }
            return $item;
        } catch (PDOException $e) {
           return null;
        }
    }
}