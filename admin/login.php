<?php 
    session_start();
    require_once("../rprocess.php");

    if(isset($_SESSION['logged'])){
        header("location: index.php");
        die();
    }
    if(isset($_SESSION["roll"])){
        header("location: ../");
        die();
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];


        $con_pass = mysqli_query($connection , "SELECT * FROM teachers WHERE email = '$email'");
        $pass = mysqli_fetch_assoc($con_pass);

        if(mysqli_num_rows($con_pass) == 1){
            if($password == $pass["password"]){
                $_SESSION["logged"]="logged in";
                $_SESSION["email"]=$email;
                header("location: index.php");
            }
            else {
            $error["ipass"]="Your Password is Incorrect";
            }
            
        }

        else{
            $error["not_roll"] = "Your Roll Number is incorrent or not registered";
        }


       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome TO Academic Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container ">
        <div class="row">
            <div class="col">
                <a href="index.php"><img src="../images/logo.png" alt="" width="25%" height="auto"></a>
            </div>
           
        </div>
        <div class="row bz">
        <div class="row center mt-5 ">
            <div class="col">
              
                <h3 class="welcome">Teacher's Area</h3>
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col-md-7">
            </div>
            <div class="col-md-5 text-right p-5 login mt-5">
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Stay Login</label>
                    </div>
                    <div class="error">
                    <?php if(isset($error["not_roll"])){
                        echo $error["not_roll"] . "<br>";

                    } 
                    if(isset($error["ipass"])){
                        echo $error["ipass"];

                    } 
                    
                    
                    
                    ?>
                    </div>


                    <div class="logaction center ">
                        <button type="submit" name="login" class="btn btn-primary login-btn ">Teacher Login</button>
                        <a  href="register.php" class="btn btn-primary login-btn ml-5">Teacher Registraion</a>

                    </div>
                </form>
            </div>
        </div>
        </div>
        
        
 
    </div>



    
</body>
</html>