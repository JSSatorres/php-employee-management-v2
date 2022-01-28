<?php
// require_once("./loginManager.php");

// if(isset($_GET["login"])) {
//         logincheck();
//     }
// if(isset($_GET["logout"])) {
//         destroySession();
//         header('Location: ../../index.php?logout');
//     }






if ($_POST["user"]){
    $email= $_POST["user"];
    $password= $_POST["password"];

    checkLogin($email, $password);

    echo "estoy en login controller";
} else{
    session_start();
    // logout($_SESSION["login"]);
}



// switch (true) {
//     case (isset($_GET["WEmailPass"])):
//         echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
//         echo "Wrong email and password";
//         echo "</div>";
//         break;

//     case (isset($_GET["WName"])):
//         echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
//         echo "Wrong name";
//         echo "</div>";
//         break;

//     case (isset($_GET["WPass"])):
//         echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
//         echo "Wrong Password";
//         echo "</div>";
//         break;

//     default:
//         break;
// }