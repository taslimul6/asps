<?php 
    session_start();
    require_once("config.php");
    if(isset($_SESSION["roll"])){
        header("location: panel/");
        die();
    }

    if(isset($_POST['login'])){
        $roll = $_POST['roll'];
        $password = $_POST['password'];


        $con_pass = mysqli_query($connection , "SELECT password FROM students WHERE exam_roll = '$roll'");
        $pass = mysqli_fetch_assoc($con_pass);

        if(mysqli_num_rows($con_pass) == 1){
            if($password == $pass["password"]){
                $_SESSION["roll"]=$roll;
                header("location: panel/");
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
<link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container ">
        <div class="row">
            <div class="col">
                <a href="index.php"><img src="images/logo.png" alt="" width="25%" height="auto"></a>
            </div>
           
        </div>
        <div class="row center mt-5 ">
            <div class="col">
              
                <h3 class="welcome">Welcome to Advance Academic Portal</h3>
            </div>
            
        </div>
        <div class="row mt-5">
            <div class="col-md-7 m-auto p-5 login ">
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Exam Roll</label>
                        <input type="number" class="form-control" id="examroll" name="roll">
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
                        <button type="submit" name="login" class="btn btn-primary login-btn">Student Login</button>

                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 m-auto mt-4 mb-4 login">
                <ul class="nav nav-tabs m-4 justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">New Student?</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">What is Student Portal </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">How to use it</button>
                    </li>
                </ul>
                <div class="tab-content m-4" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Are you a new student of Department of Electrical and Electronice engineering? <br>
                Please Register here to use this portal.<br>
                <a href="register.php" style="color:#0d6efd;">Registraion</a> </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Student Portal of Gono Bishwabidyalay EEE dept provide student a single point data access. Student can get their important educational data , their progress and notices from this portal.</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">TO use this student portal you have to have a student account. Fill up the registration from register page. Then login to the portal and get your desire information.</div>
                </div>

            
            
            </div>
        
        
        </div>
        
 
    </div>



    
</body>
</html>