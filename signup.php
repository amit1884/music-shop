<?php 
include_once 'header.php';
?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign">
                        <h2>Sign Up</h2>
                        <form action="includes/signup.inc.php" method="POST">
                        <input type ="text" name ="user" placeholder=" Username" id="log-user">
                        <input type ="password" name ="pwd" placeholder="Password" id="log-user">
                        <input type ="email" name ="email" placeholder="E Mail" id="log-user">
                        <input type ="text" name ="first" placeholder="First" id="log-user">
                        <input type ="text" name ="last" placeholder="Last" id="log-user">
                        <input type ="number" name ="mob" placeholder="MobileNo" id="log-user">
                        <center><button type ="submit" name ="submit" class="musica-btn">SignUps</button></center>
                        </form>
                    </div>
                </div>
            </div>
<br><br><br><br>


<?php
include_once 'footer.php';
?>