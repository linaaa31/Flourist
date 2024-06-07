<?php
include('admin/connect.php');
$sql = "SELECT * FROM products ";
$result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="en">
   <?php
include('head.php');
?>
<body>
     <?php
include('header.php');
?>
    <main>

<section class="products-section">
   
    <?php
     while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
    <div class="product-card">
        <div class="product-img">
            <img src="<?php echo $row['image']; ?>">
        </div>
        <div class="product-title">
            <h1><?php echo $row['title']; ?></h1>
        </div>
        <div class="product-price">
            <p><?php echo $row['price']; ?>,00 CAD$</p>
        </div>
        <div class="product-star">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </div>
        <div class="product-btn">
            <a href="single.php?id=<?php echo $row['id']; ?>">See More</a>
        </div>
    </div>
<?php 
     }
?>
</section>

</main>
    
 <?php
include('footer.php');
?>
</body>
</html>