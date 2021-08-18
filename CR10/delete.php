<?php
include_once 'actions/db_connect.php';
include_once 'actions/view.php';
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
    <title>Delete Media</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-evenly py-5">
            <div class="mt-3 mb-3">
                <?php echo viewMedia($image, $data['title'], $data['type'], $data['first_name'] . ' ' . $data['last_name'], $data['id'], $author_id); ?>
                <h3 class="mb-4">Do you really want to delete this Media?</h3>
                <form action="actions/a_delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <button class="btn btn-success" type="submit">Yes</button>
                    <a href="admin.php" class="btn btn-danger">No</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>