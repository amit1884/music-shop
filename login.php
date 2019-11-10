<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';
?>
 
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="login">
                    <br><br><br>
                        <h2>Login</h2>
                        <form action="includes/login.inc.php" method="POST">
                        <input type ="text" name ="user" placeholder=" Username" id="log-user">
                        <input type ="password" name ="pwd" placeholder="Password" id="log-user">
                        <center><button type ="submit" name ="submit" class="musica-btn">Login</button></center>
                        </form>
                    </div>
                </div>
            </div>
</div>
           
            
            
<?php
include_once 'footer.php';
?>