<?php
        $url = isset($_GET["url"]) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require 'views/header.php'; ?>

    <form class="w-50 mx-auto" method="POST" action="<?= BASE_URL ?>/employee/newEmployee">
        <div class=" form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="name"  id="inputName" value='<?=isset($url[2])? $this->employee->name : "" ?>' required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="inputLastName" value='<?=isset($url[2])? $this->employee->lastName : "" ?>'required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email Address</label>
                <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelpInline" value='<?=isset($url[2])? $this->employee->email : "" ?>'required>
                <small id="emailHelpInline" class="text-muted">
                    We'll always share your email with anyone else.
                </small>
            </div>
            <div class="form-group col-md-6">
                <label for="inputGender">Gender</label>
                <select id="inputGender" name="gender" class="form-control" required>
                    <option value="man" <?= isset($_GET["id"]) ? ($employee["gender"] == "man" ? "selected" : "") : "" ?>>Man</option>
                    <option value="woman" <?= isset($_GET["id"]) ? ($employee["gender"] == "woman" ? "selected" : "") : "" ?>>Woman</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="city" id="inputCity" value='<?=isset($url[2])? $this->employee->city : "" ?>'required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputStreetAddress">Street Address</label>
                <input type="text" class="form-control" name="streetAddress" id="inputStreetAddress" value='<?=isset($url[2])? $this->employee->streetAddress : "" ?>'required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">State</label>
                <input type="text" class="form-control" name="state" id="inputState" value='<?=isset($url[2])? $this->employee->state : "" ?>' required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAge">Age</label>
                <input type="number" class="form-control" name="age" id="inputAge" value='<?=isset($url[2])? $this->employee->age : "" ?>' required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPostalCode">Postal Code</label>
                <input type="number" class="form-control" name="postalCode" id="inputPostalCode" value='<?=isset($url[2])? $this->employee->postalCode : "" ?>' required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPhoneNumber">Phone Number</label>
                <input type="text" class="form-control" name="phoneNumber" id="inputPhoneNumber" value='<?=isset($url[2])? $this->employee->phoneNumber: "" ?>' required>
            </div>
        </div>
        <input hidden type="text" name="id" value=<?= isset($_GET["id"]) ? $employee["id"] : "" ?>>
        <button type="submit" class="btn btn-primary"><?= isset($_GET["id"]) ? "Edit" : "Create" ?></button>
        <a class="btn btn-secondary" href="./dashboard.php" role="button">Return</a>

        <?php
        if ($this->message) {
            ?>
            <div ><?= $this->message ?>
            </div>
        <?php
        }
        ?>

    </form>

    <?php require 'views/footer.php'; ?>
</body>

</html>