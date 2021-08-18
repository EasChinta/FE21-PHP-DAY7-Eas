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
    <title>Update Request</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-evenly py-5">
            <div class="mt-3 mb-3">

                <?php echo viewMedia($image, $data['title'], $data['type'], $data['first_name'] . ' ' . $data['last_name'], $data['id'], $author_id); ?>
                <fieldset>
                    <legend class='h2 py-4'>Update Media</legend>
                    <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
                        <table class='table'>
                            <tr>
                                <th>Title</th>
                                <td><input class='form-control' type="text" name="title" placeholder="Media title" value="<?php echo $title ?>" /></td>
                            </tr>
                            <tr>
                                <th>Image URL</th>
                                <td><input class='form-control' type="text" name="imagelink" placeholder="Image URL" /></td>
                            </tr>
                            <tr>
                                <th>Author ID</th>
                                <td><select id="authors" name="author_id" value="<?php echo $author_id ?>">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td><input class='form-control' type="text" name="ISBN" placeholder="ISBN-Number" value="<?php echo $isbn ?>" /></td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td><textarea class='form-control' type="text" name="short_desc" placeholder="Short description, max. 255 characters" rows="5"><?php echo $short_desc ?></textarea></td>
                            </tr>
                            <tr>
                                <th>Date Published</th>
                                <td><input class='form-control' type="date" name="publish_date" value="<?php echo $publish_date ?>" /></td>
                            </tr>
                            <tr>
                                <th>Publisher ID</th>
                                <td><select id="publisher" name="publisher_id" value="<?php echo $publisher_id ?>">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><select id="type" name="type" value="<?php echo $type ?>">
                                        <option value="Book">Book</option>
                                        <option value="CD">CD</option>
                                        <option value="DVD">DVD</option>
                                    </select>
                                </td>
                            </tr>
                            <th>Status</th>
                            <td><select id="status" name="status" value="<?php echo $status ?>">
                                    <option value="available">available</option>
                                    <option value="reserved">reserved</option>
                                </select>
                            </td>
                            <tr>
                                <th></th>
                                <input type="hidden" name="id" value="<?php echo $id ?>" />
                                <input type="hidden" name="picture" value="<?php echo $data['image'] ?>" />
                                <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                                <td><a href="admin.php" class="btn btn-danger">Back</a></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>

</html>