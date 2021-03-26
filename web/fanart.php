<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="fstyle.css">
    <title>FanArt</title>
<script src="https://use.fontawesome.com/63b01dadb6.js"></script>
</head>
<body>
<?php include "header.php"?>
<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit" style=" background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;">Logout</button>
</form>
<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/1.jpg" ">
</div>
<div class="mySlides fade">
  <img src="images/2.jpg"">
</div>
<div class="mySlides fade">
  <img src="images/3.png">
</div>
<div class="mySlides fade">
  <img src="images/4.png">
</div>
<div class="mySlides fade">
  <img src="images/5.jpg">
</div>
<a class="prev" onclick="plusSlides(-1)">Prev</a>
<a class="next" onclick="plusSlides(1)">Next</a>
</div>
<br>
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
</div>
<script src="slideshow.js"></script>
<?php include "footer.php"?>
</body>
</html>