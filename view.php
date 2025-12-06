<?php
include "db_connect.php";

// Fetch all records
$sql = "SELECT * FROM contact_form ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>View Submissions</title>
</head>

<body class="p-4">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 fixed-top">
        <a class="navbar-brand" href="#">
            <img src="https://res.cloudinary.com/dxr1e1b9j/image/upload/v1764944689/PHP-logo.svg_ni4r5w.png"
                style="height:40px; width:auto;" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="view.php">View Records</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Back to Form</a>
                </li>
            </ul>

            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->

        </div>
    </nav>


    <div class="container">

        <h2 class="mb-4">Stored Submissions</h2>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Created At</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // $phone = $row['phone'] ?? '';

                        echo "
              <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['message']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No submissions found</td></tr>";
                }
                ?>
            </tbody>

        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</body>

</html>