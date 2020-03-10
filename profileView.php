<?php
require 'menu.php';
?>

<section id="one" class="wrapper style1 align">
<div class="inner">
    <div class="box">
    <header>
        <center>
        <span><img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" class="image-circle" class="img-responsive" height="200%"></span>
        <br>
        <h2><?php echo $_SESSION['Name'];?></h2>
        <h4 style="color: black;"><?php echo $_SESSION['Username'];?></h4>
        <br>
    </center>
    </header>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <b><font size="+1" color="black">RATINGS : </font></b>
                <font size="+1"><?php echo $_SESSION['Rating'];?></font>
            </div>
            <div class="col-sm-3">
                <b><font size="+1" color="black">Email ID : </font></b>
                <font size="+1"><?php echo $_SESSION['Email'];?></font>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <b><font size="+1" color="black">Mobile No : </font></b>
                <font size="+1"><?php echo $_SESSION['Mobile'];?></font>
            </div>
            <div class="col-sm-3">
                <b><font size="+1" color="black">ADDRESS : </font></b>
                <font size="+1"><?php echo $_SESSION['Addr'];?></font>
            </div>
            <div class="col-sm-3"></div>
        </div>
            <div class="12u$">
                <center>
                    <div class="row uniform">
                        <div class="3u 12u$(large)">
                            <a href="changePassPage.php" class="btn btn-danger" style="text-decoration: none;">Change Password</a>
                        </div>
                        <div class="3u 12u$(large)">
                            <a href="profileEdit.php" class="btn btn-danger" style="text-decoration: none;">Edit Profile</a>
                        </div>
                        <div class="3u 12u$(xsmall)">
                            <a href="uploadProduct.php" class="btn btn-danger" style="text-decoration: none;">Upload Product</a>
                        </div>
                        <div class="3u 12u$(large)">
                            <a href="Login/logout.php" class="btn btn-danger" style="text-decoration: none;">LOG OUT</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>



</body>
</html>
