<?php
    include "conn.php";

    if (isset($_POST['update'])) {
        $emp_id = $_POST['empid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $sql = "UPDATE `employee1` SET `firstname`='$firstname',`lastname`='$lastname',`password`='$password' WHERE `empid`='$emp_id'";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Record updated successfully.";
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_GET['empid'])) {
        $emp_id = $_GET['empid'];
        $sql = "SELECT * FROM `employee1` WHERE `empid`='$emp_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $emp_id = $row['empid'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $password  = $row['password'];
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update records</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            input {
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <button class="btn btn-primary" style="margin-top: 10px; margin-left: 10px;">
        <a class="btn btn-primary" href="datahtml.php">Back</a>
        </button>

        <div class="container">
            <h2>Employee Update Form</h2>
            <form action="" method="post">
                <fieldset>
                    First name:<br>
                    <input type="text" name="firstname" value="<?php echo $firstname; ?>">
                    <input type="hidden" name="empid" value="<?php echo $emp_id; ?>">
                    <br>
                    Last name:<br>
                    <input type="text" name="lastname" value="<?php echo $lastname; ?>">
                    <br>
                    Password:<br>
                    <input type="password" name="password" value="<?php echo $password; ?>">
                    <br>
                    <input class="btn btn-success" type="submit" value="Update" name="update">
                </fieldset>
            </form>
        </div>
    </body>
</html>