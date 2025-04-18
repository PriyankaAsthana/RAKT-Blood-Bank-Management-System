<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $Gender=$_POST['gender'];
    $num=$_POST['number'];
    $address=$_POST['add'];
    $gmail=$_POST['mail'];
    $password=$_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query="insert into form(fname,lname,gender,number,address,email,pass) values('$firstname','$lastname',' $Gender',' $num','$address','$gmail','$password')";
        mysqli_query($con,$query);
        echo"<script type='text/javascript'> alert('Successfully Registered!')</script>";
    }
    else {
        echo"<script type='text/javascript'> alert('Please Enter Valid Information!')</script>";
    }
   }  
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Register</title>
        <link rel="stylesheet" href="css/s1.css"> 
    </head>
    <body>
        
        <div class="signup">

            <h1>SIGN UP</h1>
            
            <form method="POST">
                <label>First Name</label>
                <input type="text" name="fname" required> <ion-icon name="at-circle-outline"></ion-icon>
                <label>Last Name</label>
                <input type="text" name="lname" required><ion-icon name="at-circle-outline"></ion-icon>
                <label>Gender</label>
                <input type="text" name="gender" required><ion-icon name="male-female-outline"></ion-icon>
                <label>Contact Number</label>
                <input type="tel" name="number" required><ion-icon name="location-outline"></ion-icon>
                <label>Address</label>
                <input type="text" name="add" required><ion-icon name="pin-outline"></ion-icon>
                <label>Email</label>
                <input type="email" name="mail" required><ion-icon name="mail-outline"></ion-icon>
                <label>Password</label>
                <input type="password" name="pass" required><ion-icon name="lock-closed-outline"></ion-icon>
                <input type="submit" name="" value="Submit">
            </form>
            <style>
                a{
                    color: darkblue;
                }
            </style>
            <p>By clicking the Sign Up button, you agree to our<br>
            <a href="">Terms And Conditions</a> and <a href="#">Privacy Policy</a>
            </p>
             <p>Already Have An Account? <a href="login.php">Login Here</a></p><br>
            
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
