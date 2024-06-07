<?php
include('connect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Updating ID: " . $id;
	$select = "SELECT * FROM `products` WHERE id = $id";
	$selectQuery = mysqli_query($db,$select);
	$selectResult = mysqli_fetch_assoc($selectQuery);
}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$info = $_POST['info'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$update = "UPDATE `products` SET `title`= '$title',`info`='$info',`price`='$price' WHERE `id` = '$id'";
	$updateQuery = mysqli_query($db,$update);
	header("Location: update.php?id=$id");
}
?>

<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
	<input type="text" name="title" placeholder="Title" value="<?php echo $selectResult['title']; ?>"><br><br>
	<input type="text" name="info" placeholder="Info" value="<?php echo $selectResult['info']; ?>"><br><br>
	<input type="number" name="price" placeholder="Price" value="<?php echo $selectResult['price']; ?>"><br><br>
	<input type="text" name="image" placeholder="Image" value="<?php echo $selectResult['image']; ?>"><br><br>
	<input type="submit" name="update" value="Update product">
</form>