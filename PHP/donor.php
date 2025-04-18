<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $medicalissue=$_POST['medicalissue'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $bloodtype=$_POST['bloodtype'];
    $smoke=isset($_POST['smoke'])? 'YES':'NO';

    if(!empty($name)){
    $query="insert into donor(name,age,medicalissue,email,password,address,bloodtype,smoke) values('$name','$age',' $medicalissue',' $email','$password','$address','$bloodtype','$smoke')";
    mysqli_query($con,$query);
    echo"Successfully Registered!";
    header("location: donor2.php"); 
    die;
    }
  
else {
    echo"<script type='text/javascript'> alert('Please Enter Valid Information!')</script>";
 }
  }
?> 

<!DOCTYPE html>
<html>
    <head>
        <title>DONOR PAGE</title>
        <link rel="stylesheet" href="css/s6.css">
    </head>
    <body>
        <nav>
            <a href="index.html"><img src="image/real.png" alt="oops!failed to load..."></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="help.html">HELP</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
        </nav>
        <div class="donor">
        <h1>Welcome Donor!</h1>

        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="18" max="120" required><br>
            <label for="medicalissue">Any medical issue?</label>
            <input type="text" name="medicalissue" id="medicalissue" required><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            

            <label for="address">Current Address:</label>
            <select name="address" id="address" required>
                <option value="">SELECT</option>
                <option value="Babatpur">Babatpur</option>
                <option value="Beniya-Bagh">Beniya-Bagh</option>
                <option value="Bhelupur">Bhelupur</option>
                <option value="Durga-Kund">Maidagin</option>
                <option value="Gadaulia">Gadaulia</option> 
                <option value="Kabir-Chaura">Kabir-Chaura</option>
                <option value="Lahurabir">Lahurabir</option>
                <option value="Lanka">Lanka</option>
                <option value="Madanpura">Madanpura</option>
                <option value="Maldahiya">Maldahiya</option>
                <option value="Mahmoorganj">Mahmoorganj</option>
                <option value="Maidagin">Maidagin</option>
                <option value="Nichi-Bagh">Nichi-Bagh</option>
                <option value="Pahariya">Pahariya</option>
                <option value="Pandeypur">Pandeypur</option>
                <option value="Ramnagar">Ramnagar</option>
                <option value="Sarnath">Sarnath</option>
                <option value="Sigra">Sigra</option>
               
            </select><br>
            <label for="bloodtype">Blood-Type:</label>
            <select name="bloodtype" id="bloodtype" class="bt">
                <option value="">SELECT</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>

            </select><br>
            <input type="submit" value="Submit">
        </form>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
