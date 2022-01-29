<?php


// require_once("libs/Database.php");


require_once("config/db.php");
require_once("config/baseConstants.php");
require_once("config/constants.php");
require_once(LIBS . "/controller.php");
require_once(LIBS . "/view.php");
require_once(LIBS . "/model.php");
require_once(LIBS . "/router.php");
require_once(LIBS . "/database.php");
require_once("libs/router.php");


require_once(LIBS . "/database.php");
require_once(MODELS . "/loginModel.php");
require_once(CONTROLLERS . "/loginController.php");
$router = new Router();



// require_once(LIBS . "/Controller.php");
// require_once(LIBS . "/View.php");
// require_once(LIBS . "/Model.php");
// require_once(LIBS . "/Router.php");

// require_once('config/db.php');







// function get()
// {


// }

//  get()
?>

<!-- ------login-------------- -->
<?php
// if(isset($_GET["logout"])){
//     echo '<div class="alert alert-success alert-dismissible fade show w-75 mx-auto" role="alert">
//     The user has been logged out from the webpage.
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>';

// <?=CONTROLLERS
?>
<!-- // } -->

<!-- <form action="controller/loginController.php" method="POST">
    <h2 class="sr-only">Login Form</h2>
    <div class="illustration"><img class="mb-4" src="./assets/img/assamblericon.png" alt="user icon" width="70" height="70"></i></div>
    <div class="form-floating">
        <label for="floatingInput">Write your user name</label>
        <input name="user" type="text" class="form-control" id="floatingInput" placeholder="User name" required>
        <div><?= CONTROLLERS . "/loginController.php" ?></div>
    </div>
    <div class="form-floating">
        <label for="floatingPassword">Password</label>
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>

    </div><br>


    <button type="submit" class="btn btn-outline-info">Submit</button>
</form> -->

<!-- ?> -->


</div>


<!-- ----------------- Ver Usuarios de la bd--------------------- -->
<!-- <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Name</th>
                <th class="tg-0lax">Email</th>
            </tr>
        </thead> -->
<tbody>
    <?php
    // foreach ($usuarios as $index => $user) {
    //     echo "<tr>";
    //     echo "<td class='tg-0lax'>" . $user["userId"] . "</td>";
    //     echo "<td class='tg-0lax'>" . $user["name"] . "</td>";
    //     echo "<td class='tg-0lax'>" . $user["email"] . "</td>";
    //     echo "</tr>";
    // }
    ?>
</tbody>
<!-- </table> -->