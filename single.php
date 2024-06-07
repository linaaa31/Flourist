<?php
include('admin/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
 $sql = "SELECT * FROM `products` WHERE id = $id";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
}
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
        <div class="single-div">
            <div class="single-div-half"><img src="<?php echo $row['image']; ?>"></div>
            <div class="single-div-half">
            <div class="single-content">
                <h1 class="h1-textt"><?php echo $row['title']; ?></h1>
                <h2 class="price-text"><?php echo $row['price']; ?>,00 CAD$</h2>
                <h2 class="h2-text">Quantity:</h2>
                <input class="single-input" type="number" id="quantity" name="quantity" min="1" value="1">
                <h2 class="h2-text">Our Addresses:</h2>
                <label class="address-text">
                    <input class="single-item" type="radio" name="address" value="Address 1"> 3433 Commerical St Vancouver BC</label>
                <br>
                    <label class="address-text">
                    <input class="single-item" type="radio" name="address" value="Address 2"> 859 East Hastings
                </label>
                <h2 class="h2-text">Allergies:</h2>
                <label class="address-text">
                    <input class="single-item" type="checkbox" name="allergy" value="Allergy 1"> Allergy - Wheat
                </label>
                <br>
                <label class="address-text">
                    <input class="single-item" type="checkbox" name="allergy" value="Allergy 2"> Allergy - Gluten
                </label>
                <br>
                <label class="address-text">
                    <input class="single-item" type="checkbox" name="allergy" value="Allergy 3"> Allergy - Dairy
                </label>
                <br>
                <label class="address-text">
                    <input class="single-item" type="checkbox" name="allergy" value="Allergy 4"> Allergy - Nuts
                </label>
                <br>
                <label class="address-text">
                    <input class="single-item" type="checkbox" name="allergy" value="Allergy 5"> Allergy - Peanuts
                </label>
                <br>
                <h2 class="h2-text">Something to add:</h2>
                <input class="input-text" type="text">
                <br>
                <button class="single-button" id="addToOrder">Add to Order</button>
            </div>
            </div>
          </div>
    </main>
         <?php
include('footer.php');
?>
</body>
</html>