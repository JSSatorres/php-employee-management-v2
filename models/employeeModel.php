<?php

class employeeModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function insert(){
        echo "Insert data";
    }
}