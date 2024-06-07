<?php


include('connect.php');

if(isset($_POST['add'])){
	$title = $_POST['title'];
	$info = $_POST['info'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$add = "INSERT INTO `products`(`title`, `info`, `price`, `image`) VALUES ('$title', '$info', '$price', '$image')";

	$query = mysqli_query($db,$add);

	if($query){
		echo "good";
	}else{
		echo "error";
	}
}

?>

<form action="add.php" method="post"> 
	<input type="text" name="title" placeholder="Title"><br><br>
	<input type="text" name="info" placeholder="Info"><br><br>
	<input type="number" name="price" placeholder="Price"><br><br>
	<input type="text" name="image" placeholder="Image"><br><br>
	<input type="submit" name="add" value="Add product">
</form>