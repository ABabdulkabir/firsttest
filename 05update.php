[7:11 pm, 13/01/2024] Kabeer Rajput❤️: 05update.php
[7:11 pm, 13/01/2024] Kabeer Rajput❤️: <?php


require "01connection.php";



if (isset($_POST["username"])) {

    $id = $_POST["userid"];
    $user = $_POST["username"];
    $title = $_POST["title"];
    $desc = $_POST["desc"];




    $sqlupdate = "UPDATE info SET name='$user',title='$title',Description='$desc' WHERE Id = '$id'" ;

    $res = mysqli_query($con, $sqlupdate);
    if ($res) {
        header("location:index.php");
    }
}