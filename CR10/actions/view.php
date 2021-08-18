<?php

////////////////////////////////////////////////// VIEW PUBLISHERS ////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function viewRows($image, $title, $isbn, $name, $name2) {
    return "<tr>
        <td><img class='img-thumbnail' style='height: 150px;' src='".$image."'</td>
        <td>".$title."</td>
        <td>".$isbn."</td>
        <td>".$name."</td>
        <td>".$name2."</td>
    </tr>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////// VIEW AS USER ////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function viewMedia($img, $title, $type, $author, $id)
    {
    return "<div class=\"col-6 col-md-4 col-lg-3 my-3\">
        <div class=\"card\bg-transparent\h-100\">
            <div style='background-image: url(".$img."); background-repeat: no-repeat; background-size: contain; height: 350px; background-position: center;'>
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">".$title."</h5>
                <p class=\"card-text\">".$type."</p>
                <p class=\"card-text\">Author: ".$author."</p>
            </div>
            <div class=\"card-body\">
                <a href='details.php?id=".$id."' class='btn btn-success btn-sm'>Read More</a>
            </div>
        </div>
    </div>";
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////




////////////////////////////////////////////////// VIEW AS ADMINISTRATOR //////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function viewMediaAdministrator($img, $title, $type, $author, $id)
    {
    return "<div class=\"col-6 col-md-4 col-lg-3 my-3\">
        <div class=\"card\bg-light\">
            <div style='background-image: url(".$img."); background-repeat: no-repeat; background-size: contain; height: 350px; background-position: center;'>
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">".$title."</h5>
                <p class=\"card-text\">".$type."</p>
                <p class=\"card-text\">Author: ".$author."</p>
            </div>
            <div class=\"card-body\">
                <a href='update.php?id=".$id."' class='btn btn-success btn-sm'>Edit</a>
                <a href='delete.php?id=".$id."' class='btn btn-danger btn-sm'>Delete</a>
            </div>
        </div>
    </div>";
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
