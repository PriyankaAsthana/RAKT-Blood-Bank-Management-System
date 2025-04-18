<?php
    include('db.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/s5.css">
        <title>DONOR/RECIEVER ENTRANCE</title>
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img src="image/real.png"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="signup.php">SIGN UP</a></li>
                        <li><a href="contact.html">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <h1>WELCOME USER!</h1><br>
                <p>*Enter as reciever: <a href="donor2.php" class="btn">CLICK HERE</a></p>
                <p>*Enter as donor: <a href="donor.php" class="btn">CLICK HERE</a></p>
                <p>Already a Donor?</p>
                <a href="login2.php" class='btn'>CLICK HERE</a>
            </div>
        </section>
        <div class="icons">
            <a href="" target="_blank"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a>
            <a href="" target="_blank"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
            <a href="" target="_blank"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
            <a href="" target="_blank"><i class="fa fa-2x fa-linkedin" aria-hidden="true"></i></a>
        </div>
        <div class="f">
        <p class="u">Made with<i class="fa fa-gratipay" aria-hidden="true"></i>by Priyanka and team </p>
        </div>
    </body>
</html>
