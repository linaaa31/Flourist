<?php
include('connect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Updating ID: " . $id;
	$select = "DELETE FROM `products` WHERE id = $id";
	$selectQuery = mysqli_query($db,$select);
    header("Location: all.php");
}

?>