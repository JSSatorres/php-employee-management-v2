<?php

function checkLogin($email, $password){
    $query = conn()->prepare('SELECT * FROM users ');

    try {
        $query->execute();
        $users = $query->fetchAll();
        print_r($users);
        return $users;


    } catch (PDOException $e) {
        return [];
    }
}