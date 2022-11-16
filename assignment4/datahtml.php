<?php
    include "conn.php";
    $sql = "SELECT * FROM employee1";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Data</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            button {
                padding-left: 7px;
                padding-right: 7px;
                margin: 10px;
                float: right;
            }

            a:hover {
                color: white;
            }

            a {
                text-decoration: none;
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="container">
        <button class="btn btn-success">
            <a href="form1.php">Add Employee</a>
        </button>

        <button class="btn btn-danger">
            <a href="close.php">Close</a>
        </button>
            <h1>Employee Data</h1>
            <table class="table table-dark table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>EMP ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['empid']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a class="btn btn-info" href="update.php?empid=<?php echo $row['empid']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?del=<?php echo $row['empid']; ?>">Delete</a></td>
                        </tr>
                    <?php    
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>