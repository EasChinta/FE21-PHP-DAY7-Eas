<?php
include_once 'actions/db_connect.php';
include_once 'actions/view.php';
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
    <title>Publisher Details</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center">
        <h1 class="text-dark">Media from this Publisher</h2>
    </div>
    <div class="container">
        <div class="class=d-flex flex-column align-items-center py-2">
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</th>
                        <th>Title</th>
                        <th>ISBN</th>
                        <th>Publisher</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_GET['id']) {
                        $id = $_GET['id'];
                        $query = "SELECT * FROM media LEFT JOIN author ON media.author_id = author.author_id LEFT JOIN publisher ON media.publisher_id = publisher.publisher_id WHERE publisher.publisher_id = {$id}";
                        $result = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result)  > 0) {
                            for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
                            foreach ($set as $data) {
                                if (strlen($data['image']) < 18) {
                                    $image = 'pictures/' . $data['image'];
                                } else {
                                    $image = $data['image'];
                                }

                                $title = $data['title'];
                                $isbn = $data['ISBN'];
                                $author = $data['first_name'] . " " . $data['last_name'];
                                $publisher = $data['name'];

                                echo viewRows($image, $title, $isbn, $publisher, $author);
                            }
                        } else {
                            echo "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
                        }
                        $connect->close();
                    } else {
                        header("location: error.php");
                    }
                    ?>
                </tbody>
            </table>
            <a href="javascript:history.back()" class='btn btn-success my-3'>Back</a></td>
        </div>
    </div>
</body>

</html>