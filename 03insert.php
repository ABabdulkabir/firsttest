<?php


require"01connection.php";


if (isset($_POST["username"])) {

    echo $user = $_POST["username"];
    echo  $title = $_POST["title"];
    echo  $desc = $_POST["desc"];




    $sqlins = "INSERT INTO info(NAME, TITLE, description) VALUES ('$user','$title','$desc')";
     $res = mysqli_query($con, $sqlins);
    if ($res) {
        header("location:index.php");
    }
 }

?>