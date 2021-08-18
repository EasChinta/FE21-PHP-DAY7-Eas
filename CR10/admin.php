<?php 
session_start();
include_once 'components/boot.php';
include_once 'components/navigation.php';
include_once 'actions/db_connect.php';
include_once 'actions/view.php';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Administrator</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center">
        <h1 class="text-center text-dark">You are now logged in as Administrator</h1>
    </div>
    <div class="container">
        <div class='d-flex justify-content-center mt-3'>
            <a href="create.php" class='btn btn-success'>Add Media</a>
        </div>
        <div class="row justify-content-evenly py-5">
            <?php
            $query = "SELECT media.id, media.image, media.title, media.type, author.first_name AS first_name, author.last_name AS last_name
                        FROM media LEFT JOIN author ON media.author_id = author.author_id";
            $result = mysqli_query($connect, $query);
            for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);

            foreach ($set as $value) {
                $image = '';
                if (strlen($value['image']) < 18) {
                    $image = 'pictures/' . $value['image'];
                } else
                    $image = $value['image'];
                echo viewMediaAdministrator($image, $value['title'], $value['type'], $value['first_name'] . ' ' . $value['last_name'], $value['id']);
            }
            ?>
        </div>
    </div>

</body>

</html>