<?php 
$userid = $_GET["id"];

include "config.php";

$Query = "DELETE FROM `users` WHERE `u_id` = '{$userid}'";

mysqli_query($conn,$Query);

header("location:http://localhost:82/harmain.php-main/users.php");
?>
