<?php 
include_once 'header.php';
?>
<section class ="audio">
    <div class ="container">
        <div class ="row">
            <div class ="col-sm-12">
            <div class ="player">
            <?php 
                $_SESSION['song_url']=$_GET['submit'];
                ?>
                <audio controls>
                <source src= "<?php echo $_SESSION['song_url'];?>">
                </audio>
</div>
</div>
</div>
</div>
</section>

