<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link ref="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
  <body>
  <?php include 'menu.php'; ?>
<div class="mt-4 p-5 text-white-50 bg-dark text-white rounded">
  <h1>Jack Solar</h1>
  <p>like this</p>
</div>
<section class="my-5">

    <div class="py-5">
        <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
    <div class ="col-lg-6 col-md-6 col-12">
        <img src="images/banner2.jpg" class="img-fluid aboutimg">
</div>
<div class ="col-lg-6 col-md-6 col-12">
       <h2 class="display-4">Time is money</h2>
       <p class="py-5">The standard portion of Lorem Ipsum, a copy of which has been in use since 1500, 
        is available below for those interested. Sections 1.10.32 and 1.10.3 of 
        "De Finibus Bonorum et Malorum" written by Cicero are also produced in their exact original form, 
        as well as the version translated into English in 1914 by H. Rackham.</p>
       <a href="about.php" class="btn btn-success">check more</a>

</div>
</div>
</div>
</section>
</body>
<footer>
    <p class="p-3 bg-dark text-white text-center">visit again <br><?php
echo "Today is " . date("d/m/y") . date("l");
?></p>
    
</footer>


</html>