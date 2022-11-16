<?php
  include "conn.php";
  $empid="";
  $firstname="";
  $lastname="";
  $password="";
  if (isset($_POST['submit'])) {
    if(empty($_POST['empid']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['password'] )){
      echo "Please fill all details";
    }
    else{
    $empid = $_POST['empid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `employee1`(`empid`,`firstname`, `lastname`, `password`) VALUES ('$empid','$firstname','$lastname','$password')";
    $result = "FALSE";
    $result = mysqli_query($conn, $sql);

    if ($result == TRUE) {
      echo "New record created successfully.";
    } else {
      echo "Error: Employee ID already exists...";
    }
    $conn->close();
  }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <button class="btn btn-primary" style="margin-top: 10px; margin-left: 10px;">
      <a class="btn btn-primary" href="datahtml.php">Back</a>
    </button>
  <div class="container">
    <h2 style="margin-top: 20px;">Enter employee data</h2> <br>

    <form action="" method="POST">
      <fieldset>
        Employee ID:<br>
        <input type="text" name="empid">
        <br>
        First name:<br>
        <input type="text" name="firstname">
        <br>
        Last name:<br>
        <input type="text" name="lastname">
        <br>
        Password: <br>
        <input type="password" name="password">
        <br>
        <br>
        <input class="btn btn-success" type="submit" name="submit" value="Submit">
      </fieldset>
    </form>
  </div>
</body>

</html>