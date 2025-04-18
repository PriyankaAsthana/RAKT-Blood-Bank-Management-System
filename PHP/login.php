<?php
  include("db.php");
  session_start();

  
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $gmail=$_POST['mail'];
    $password=$_POST['pass'];
  
    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query="select * from form where email = '$gmail' limit 1";
        $result=mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) >0)
            {
                $user_data= mysqli_fetch_assoc($result);

                if($user_data['pass']==$password)
                {
                    header("location: loginas.php"); 
                    die;
                }
            }
        }
        echo"<script type='text/javascript'> alert('Wrong Username Or Password!')</script>";
    }
    else {
        echo"<script type='text/javascript'> alert('registered already!')</script>";
    }
    
  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>DONOR LOGIN PAGE</title>
    </head>
    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form method ="POST" autocomplete="off">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" name="mail" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="pass" required>
                            <label for="">Password</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Remember me <a href="#">Forgot password?</a></label>
                        </div> 
                        <button>Log In</button>
                        <div class="register">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
