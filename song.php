<?php 
include_once 'header.php';
?>
<!-- <link rel ="stylesheet" href= "style1.css"> -->
<style>
 body{
    background-image:url('img/bg-img/bg-1.jpg');
    overflow:hidden;
}  </style>
<body>
<br><br><br><br>
<div class = "row">
    <div class= "col-md-3 col-sm-12"></div>
    <div class ="col-md-6 col-sm-12">
    <div class ="audio-palyer">
    <div class ="row">
    <div class ="col-md-6 col-sm-12">
    <div class ="playlist">
        <h1>PLAYLIST</h1>
        <div class ="songlist">
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
    </div>
    <div class ="col-md-6 col-sm-12">
        <div class = "player">
    <h1>MUSIC PALYER</h1>
        <div class= "cover-img">
    <img src ="http://hck.re/kWWxUI" alt = "no preview" width= "400" height= "400">
</div>
    <audio controls>
        <source src ="http://hck.re/Rh8KTk">
    </audio>
</div>
    </div>
    </div>
    </div>
    </div>
</div>
