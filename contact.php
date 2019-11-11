<?php 
include_once 'header.php';
?>

<!-- <body style = "background-image:url('img/blog-img/bg-9.jpg');"> -->
<div class="contact">
<img src= "img/bg-img/breadcumb4.jpg" class  ="breadcumb">
<center><h1 class="musica-btn contact-head">CONTACT</h1></center>
</div>
<br><br>
<div class= "container">
<div class= "row">
<div class= "col-md-6 col-sm-12">

</div>
<div class= "col-md-6 col-sm-12">
<div class ="contact-form">
<form  action ="includes/contact.inc.php" method = "POST">
<input type ="text" name ="name" placeholder = "Enter your name" class= "con-in">
<input type ="text" name ="email" placeholder = "Enter your email" class= "con-in">
<input type ="text" name ="subject" placeholder = "Enter your subkect" class= "con-in">
<textarea name ="message" placeholder = "Enter your message" class= "con-mes"></textarea>
<br><br>
<center>
<button class ="musica-btn" name= "submit">SEND</button></center>
</form>
</div>
</div>
</div>
</div>