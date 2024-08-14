<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="data:image/jpeg;base64,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" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p><q>A room without books is like a body without a soul.</q></p>
         <p>Get Best Books at reasonable Price.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Nice Books at reasonable price with their latest edition. I always to buy books from ebook studio only.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3></h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/RS Aggarwal.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>RS Aggarwal</h3>
      </div>

       <div class="box">
         <img src="images/RD.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>RD Sharma</h3>
      </div>

      <div class="box">
         <img src="images/HC.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>HC Verma</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>