<?php 
include_once 'header.php';
?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<!-- <style>
 body{
    background-image:url('img/bg-img/bg-8.jpg');
}  </style> -->
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
<section>
    <div class ="container">
        <div class= "row">
            <div class ="col-md-6 col-sm-12">
                <div class ="about">


            </div>
            </div>
            <div class ="col-md-6 col-sm-12">
                <div class ="artist">
                <h1>Artists</h1>

                    
                    
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