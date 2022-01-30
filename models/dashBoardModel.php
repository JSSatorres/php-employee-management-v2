<?php
include_once "models/employee.php";
class dashboardModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function get(){
        $items=[];
        try {
            $query = $this->db->connect()->query("SELECT*FROM employees ");

            while ($row= $query->fetch()) {
                $item= new employee();
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

                array_push($items,$item);
            }
            return $items;

        } catch (PDOException $e) {
           return[];
        }

    }
}