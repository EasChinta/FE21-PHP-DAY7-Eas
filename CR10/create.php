<?php 
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
    <title>Add Media</title>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <fieldset>
                <legend class='h2 py-4'>Add a new Media</legend>
                <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                    <table class='table'>
                        <tr>
                            <th>Title</th>
                            <td><input class='form-control' type="text" name="title" placeholder="Media title" /></td>
                        </tr>
                        <tr>
                            <th>Image URL</th>
                            <td><input class='form-control' type="text" name="imagelink" placeholder="Image URL" /></td>
                        </tr>
                        <tr>
                            <th>Author ID</th>
                            <td><select id="authors" name="author_id">
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
                            <td><input class='form-control' type="text" name="ISBN" placeholder="ISBN-Number" /></td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td><textarea class='form-control' type="text" name="short_desc" placeholder="Short description, max. 255 characters" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <th>Date Published</th>
                            <td><input class='form-control' type="date" name="publish_date" /></td>
                        </tr>
                        <tr>
                            <th>Publisher ID</th>
                            <td><select id="publisher" name="publisher_id">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td><select id="type" name="type">
                                    <option value="Book">Book</option>
                                    <option value="CD">CD</option>
                                    <option value="DVD">DVD</option>
                                </select>
                            </td>
                        </tr>
                        <th>Status</th>
                        <td><select id="status" name="status">
                                <option value="available">available</option>
                                <option value="reserved">reserved</option>
                            </select>
                        </td>
                        <tr>
                            <th></th>
                            <td><button class='btn btn-success mx-2' type="submit">Create Media</button><a href="admin.php" class='btn btn-danger mx-2'>Cancel</a></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
</body>

</html>