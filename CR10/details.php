<?php
include_once 'actions/db_connect.php';
include_once 'actions/a_select.php';
include_once 'components/boot.php';
include_once 'components/navigation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Details <?php echo $title ?></title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $image ?>); height: 80vh; background-size: contain; background-repeat: no-repeat; background-position: center;">
    </div>
    <div class="container">
        <div class="class=d-flex flex-column align-items-center py-2">
            <table class='table'>
                <tr>
                    <th>Title</th>
                    <td><?php echo $title ?></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><?php echo $data['first_name'] . " " . $data['last_name'] ?></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><?php echo $isbn ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $short_desc ?></td>
                </tr>
                <tr>
                    <th>Date published</th>
                    <td><?php echo $publish_date ?></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><?php echo $type ?></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><?php echo $data['name'] ?> / More from <a href='publisher.php?id="<?php echo $publisher_id ?>"' class='text-decoration-none' style="color:green"><?php echo $data['name'] ?></a></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><?php echo $data['address'] ?></td>
                </tr>
                <tr>
                    <th>Availability Status</th>
                    <td><?php echo $status ?></td>
                </tr>
            </table>
            <a href="index.php" class='btn btn-success my-3'>Back</a></td>
        </div>
    </div>
</body>

</html>