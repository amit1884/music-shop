<?php 
include_once 'header.php';
?>
<!-- <link rel ="stylesheet" href= "style1.css"> -->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<style>
 body{
    background-image:url('img/bg-img/bg-1.jpg');
    overflow:hidden;
}  </style>
<body>
<br><br><br><br>
<div class="row">
        <div class ="col-sm-12">
            <center>
                <p id ="song-head">
                Our Music Your Melody</p>
            </center>
</div>
    </div>
    <br>
<div class ="container">
    <div class ="row">
        <div class ="col-md-6 col-md-12">
            <div class= "songlist">

            <?php 
         $song_url='song-data.json';
         $song_json=file_get_contents($song_url);
         $song_array=json_decode($song_json,true);
         foreach($song_array as $song)
         {
            echo '<img src ="'.$song['cover_image'].'" alt = "not showing"width ="150" height = "150"
             >';
            echo $song['song'];
            echo '<br>';
         }
        ?> 
        </div>
        </div>
        <div class ="col-md-6 col-md-12">
            <img src = "img/blog-img/4.jpg" alt ="N/A" class= "cover-img">
            <audio controls>
                <source src="">
            </audio>

        </div>
</div>
</div>