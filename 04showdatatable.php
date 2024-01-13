<?php

require "01connection.php";

$query = "select * from info";


$res = mysqli_query($con, $query);



if ($res) {

   $kabeer=0;}

   while ($item = mysqli_fetch_assoc($res)) {
      $kabeer++;}
      echo "<tr> <td>" . $kabeer . "</td>";
      echo " <td>" . $item["NAME"] . "</td>";
      echo " <td>" . $item["TITLE"] . "</td>";
      echo " <td>" . $item["description"] . "</td>";

      echo " <td><button type='button' data-bs-toggle='modal' data-bs-target='#updateModal' class='btn btn-success update' id=". $item["ID"].">Update</button>
    <button type='button' class='btn btn-danger delete'  id= >Delete</button></td></tr>;
   }
}







?>