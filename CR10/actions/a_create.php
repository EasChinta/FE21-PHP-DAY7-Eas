<?php
include_once 'db_connect.php';
include_once 'file_upload.php';
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

    $title = $_POST["title"];
    $author_id = $_POST["author_id"];
    $isbn = $_POST["ISBN"];
    $short_desc = $_POST["short_desc"];
    $publish_date = $_POST["publish_date"];
    $publisher_id = $_POST["publisher_id"];
    $type = $_POST["type"];
    $status = $_POST["status"];
    $uploadError = '';

    $query = "INSERT INTO media(image, author_id, ISBN, short_desc, publish_date, publisher_id, type, status, title) VALUES ('$imgupload', '$author_id', '$isbn', '$short_desc', '$publish_date', '$publisher_id', '$type', '$status', '$title')";


    if (mysqli_query($connect, $query) == true) {
        $class = "success";
        $message = "The entry below was successfully created:<br><br>" . viewMedia($imgname, $title, $type, $author_id, '', $author_id);
        if ($_POST["imagelink"] === "") {
            $uploadError = ($img->error != 0) ? $img->ErrorMessage : '';
        }
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
            <div class="mt-3 mb-3">
                <h1>Create Request</h1>
            </div>
            <div class="alert alert-<?= $class; ?>" role="alert">
                <span><?php echo ($message) ?? ''; ?></span>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php' class="btn btn-primary my-2">Home</a>
                <a href='../create.php' class="btn btn-primary my-2">Add more</a>
            </div>
        </div>
    </div>
</body>

</html>
<!-- /////////////////////////////// HTML ///////////////////////////////-->