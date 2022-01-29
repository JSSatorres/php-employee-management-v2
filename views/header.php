<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/login.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/node_modules/jsgrid/dist/jsgrid-theme.min.css">
  <title>MVC OOP v2</title>
</head>

<body>
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
      <a class="navbar-brand" href="<?= BASE_URL ?>/main">Employees Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= $_SERVER['SCRIPT_NAME'] == "/PHP-EMPLOYEE-MANAGEMENT-V1/src/dashboard.php" ? "active" : "" ?>">
            <a class="nav-link" href="<?= BASE_URL ?>/dashboard">Dashboard</a>
          </li>
          <li class="nav-item <?= $_SERVER['SCRIPT_NAME'] == "/PHP-EMPLOYEE-MANAGEMENT-V1/src/employee.php" ? "active" : "" ?>">
            <a class="nav-link" href="<?= BASE_URL ?>/employee">Employee</a>
          </li>
        </ul>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="../src/library/loginController.php?logout">Log out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</body>

</html>