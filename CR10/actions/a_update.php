<?php
include_once 'db_connect.php';
include_once 'view.php';
include_once '../components/boot.php';
include_once '../components/navigation.php';

if ($_POST) {
    $img = '';
    $imgname = '';

    if ($_POST["imagelink"] !== "") {
        $img = $_POST["imagelink"];
        $imgname = $img;
        $imgupload = $img;
    } else if ($_POST["imagelink"] !== "") {
        $class = "danger";
        $message = "Please choose only one method of adding a picture<br>";
    } else {
        $img = $_FILES["picture"];
        $imgname = '../pictures/' . $img->fileName;
        $imgupload = $img->fileName;
    }

    $id = $_POST["id"];
    $title = $_POST["title"];
    $author_id = $_POST["author_id"];
    $isbn = $_POST["ISBN"];
    $short_desc = $_POST["short_desc"];
    $publish_date = $_POST["publish_date"];
    $publisher_id = $_POST["publisher_id"];
    $type = $_POST["type"];
    $status = $_POST["status"];
    $uploadError = '';

    if ($_POST["imagelink"] === "") {
        $query = "UPDATE media SET author_id = '$author_id', ISBN = '$isbn', short_desc = '$short_desc', publish_date = '$publish_date', publisher_id = '$publisher_id', type = '$type', status = '$status', title = '$title' WHERE id = {$id}";
    } else {
        $query = "UPDATE media SET image = '$imgupload', author_id = '$author_id', ISBN = '$isbn', short_desc = '$short_desc', publish_date = '$publish_date', publisher_id = '$publisher_id', type = '$type', status = '$status', title = '$title' WHERE id = {$id}";
    }
    if (mysqli_query($connect, $query) == true) {
        $class = "success";
        $query2 = "SELECT id, image, first_name, last_name FROM media LEFT JOIN author ON media.author_id = author.author_id WHERE id = {$id}";
        $queryresult = mysqli_query($connect, $query2);
        $query2data = $queryresult->fetch_assoc();
        if (strlen($query2data['image']) < 18) {
            $currentimage = '../pictures/' . $query2data['image'];
        } else {
            $currentimage = $query2data['image'];
        }
        $message = "The entry below was successfully updated:<br><br>" . viewMedia($currentimage, $title, $type, $query2data['first_name'] . " " . $query2data['first_name'], '', $author_id);
        if ($_POST["imagelink"] === "") {
            $uploadError = ($img->error != 0) ? $img->ErrorMessage : '';
        }
    } else {
        $class = "danger";
        $message = "Error while updating record. Try again: <br>" . $connect->error;
        if ($_POST["imagelink"] === "") {
            $uploadError = ($img->error != 0) ? $img->ErrorMessage : '';
        }
    }
    $connect->close();
} else {
    header("location: ../error.php");
}
?>


<!-- /////////////////////////////// HTML ///////////////////////////////-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-evenly py-5">
            <div class="d-flex flex-column align-items-center mt-3 mb-3">
                <h1>Update Successful</h1>
            </div>
            <div class="alert alert-<?= $class; ?>" role="alert">
                <span><?php echo ($message) ?? ''; ?></span>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../admin.php' class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>

</html>
<!-- /////////////////////////////// HTML ///////////////////////////////-->