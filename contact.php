<!DOCTYPE html>
<html lang="en">
   <?php
include('head.php');
?>
<body class="contact-body">
   <?php
include('header.php');
?>

    <main>
        <div class="img-div">
            <img class="image1" src="images/location1.jpg">
            <h1 class="img-text">Contact Us</h1>
      </div>
      <section class="contact-section">
        <div class="contact-form">
             <form id="contactForm" action="contact.php" method="POST">
        <div class="form-item">
            <input type="text" id="firstname" name="firstname" placeholder="FirstName" required>
        </div>
        <div class="form-item">
            <input type="text" id="lastname" name="lastname" placeholder="LastName" required>
        </div>
        <div class="form-item">
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-item">
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
        </div>
        <div class="form-btn">
            <input type="submit" value="Send">
        </div>
    </form>
        </div>
        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.185451436041!2d-123.07083732448146!3d49.2539307727911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548676ad5a15ad95%3A0xf7869a874e7116!2zMzQzMyBDb21tZXJjaWFsIFN0LCBWYW5jb3V2ZXIsIEJDIFY1TiA0RTgsINCa0LDQvdCw0LTQsA!5e0!3m2!1sru!2sam!4v1698328074709!5m2!1sru!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </section>
    </main>

      <?php
include('footer.php');
?>
<script src="main.js"></script>
</body>
</html>