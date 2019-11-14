<?php 
include_once 'header.php';
?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<body>
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">  
                <div class="carousel-caption">
                  <h3>Musica</h3>
                  <p>Let the Music Speak</p>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>" Without music, life would be a mistake "</h3>
                  <p>Friedrich Nietzsche</p>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>" Music is moonlight in the gloomy night of life "</h3>
                  <p>Jean Paul</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<section class ="section-1">
    <div class ="container">
        <div class= "row">
            <div class ="col-md-5 col-sm-12">
                <h1>Trending Singers</h1>
                    <div class ="singer">
                        <img src = "img/blog-img/ar.jpg" alt ="not Available" class ="alb-cov">
                        <img src = "img/blog-img/din.jpg" alt ="not Available" class ="alb-cov">
                        <img src = "img/blog-img/si.jpg" alt ="not Available" class ="alb-cov">
                        <img src = "img/blog-img/sing.jpg" alt ="not Available" class ="alb-cov">
                        <img src = "img/blog-img/twp.jpg" alt ="not Available" class ="alb-cov">
                        <img src = "img/blog-img/rahat.jpg" alt ="not Available" class ="alb-cov">
                    </div>
</div>
            
            <div class ="col-md-7 col-sm-12">
                <div class ="artist">
                <h1>Upcoming Playlist</h1>
                <table class ="up-table">
                    <tr>
                        <td><img src = "img/blog-img/don.webp" alt ="not Available" class ="up-cov"></td>
                        <td><h3>The same way</h3></td>
                        <td><button class = "musica-btn">Book Now</button></td>
                    </tr>
                    <tr>
                        <td><img src = "img/blog-img/maroo.jpg" alt ="not Available" class ="up-cov"></td>
                        <td><h3>Memories</h3></td>
                        <td><button class = "musica-btn">Book Now</button></td>
                    </tr>
                    <tr>
                        <td><img src = "img/blog-img/tatoo.jpg" alt ="not Available" class ="up-cov"></td>
                        <td><h3>Tattoos And Taquila</h3></td>
                        <td><button class = "musica-btn">Book Now</button></td>
                    </tr>
                </table>    
            </div>
            </div>
</div>
</div>
</section>
<section class ="section-2">
<br>
<div class ="container">
<div class= "row">
<div class ="col-md-6 col-sm-12">
<div class ="app">
<img src ="img/blog-img/mockup-iphone.png">
</div>
</div>
<div class ="col-md-6 col-sm-12">
<div class ="down-app">
<div id ="con-info">
<h3 style = " fon-size:15px;">Downlaod Our App Now</h3>
<h4>Enjoy The latest Music</h4> 
<h2 style = "color:#cc1573; fon-size:25px;">Music</h2>
<p>Musica app plus is a app that lets you download
 videos and music from social network, Youtube, etc.
  You may also download and play the latest HD series and movies, 
  and also watch free live television.
   This app is  available for Android and Ios.
</p>
<a href ="www.playstore.com"><img src ="img/blog-img/google-play.png"></a>
<a href ="www.appstore.com"><img src ="img/blog-img/app-store.png"></a>
</div>
</div>
</div>
</div>
</div>

</section>
<section class ="section-3">

<div class ="container">
<div class= "row">
<div class ="col-md-12 col-sm-12">
<div class ="in-post">
<h1>Social Media Posts</h1>
<img src ="img/blog-img/ar.jpg" width = "150" height="150">
<img src ="img/blog-img/rahat.jpg"  width = "150" height="150">
<img src ="img/bg-img/2.jpg" width = "150" height="150">
<img src ="img/blog-img/5.jpg"  width = "150" height="150">
<img src ="img/blog-img/6.jpg"  width = "150" height="150">
<img src ="img/blog-img/7.png"  width = "150" height="150">
<img src ="img/blog-img/25.jpg" width = "150" height="150">
<img src ="img/blog-img/28.jpg"  width = "150" height="150">
<img src ="img/blog-img/29.jpg" width = "150" height="150">
<img src ="img/blog-img/35.jpg"  width = "150" height="150">
<img src ="img/blog-img/41.jpg"  width = "150" height="150">
<img src ="img/blog-img/54.jpg"  width = "150" height="150">

</div>
</div>
</div>
</div>

</section>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script type = "text/javascript">
$('#carouselFade').carousel();
</script>
<?php 
include_once 'footer.php';
?>