<?php 

session_start();
if(isset($_SESSION['logged'])){
    header("location: index.php");
    die();
}

require_once("../rprocess.php");


if (isset($_POST['register'])){
    $full_name = $_POST["full_name"];
    
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $present_adress = $_POST["present_adress"];
    $permanent_adress = $_POST["permanent_adress"];
    $blood_group = $_POST["blood_group"];
    $my_phone_number = $_POST["my_phone_number"]; 
    $position = $_POST["position"];
    $token = $_POST["token"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pconfirm = $_POST["bypass"];
    

    

    $dbemail = mysqli_query($connection, "SELECT password FROM teachers WHERE email = '$email';");
    $dbtoken = mysqli_query($connection , "SELECT * FROM tokens ;");

    $tokenlist = mysqli_fetch_assoc($dbtoken);
   



   
    if(mysqli_num_rows($dbemail)== 0){
        if($password == $pconfirm){
            if( $token ==  $tokenlist["token"] ){
                mysqli_query($connection , "INSERT INTO teachers( full_name, dob ,gender, present_adress, permanent_adress , blood_group , my_phone_number , position , email , password ) VALUES('$full_name', '$dob' , '$gender' , '$present_adress' , '$permanent_adress', '$blood_group' , '$my_phone_number' , '$position'  , '$email' , '$password');");

                

                
            }else{
                $error['token']= "Token number is incorrect";
            }
        }else{
            $error["pass-not-matched"] = "Password Does not matched.";
        }
    }
    else{
        $error['email_exist'] = "Email adress already exist try another Email adress.";

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
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

    <div class="container ">
        <div class="row">
            <div class="col">
            <a href="index.php"><img src="images/logo.png" alt="" width="25%" height="auto"></a>
            </div>
           
        </div>
        <div class="row center ">
            <div class="col">
              
                <h3 class="reg">Teacher Registration form</h3>
            </div>
            
            
        </div>
        <div class="row">
        <div class="error">

<?php if(isset($error["email_exist"])) {
    echo $error["email_exist"] . "<br>"; 
}
    if(isset($error["pass-not-matched"])) {
    echo $error["pass-not-matched"] . "<br>";  
} 
if(isset($error["token"])) {
    echo $error["token"] . "<br>";  
} 
    ?>
</div>
        </div>
        
        <form method="POST">
            <div class="row mt-5 reg-row mb-5">
                <div class="col-md-6 p-5">
             
                    <div class="mb-3">
                        <label for="Fullname" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" name="full_name" required>
                    </div>

                   
                    
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth:</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="mb-3 mt-2">
                    <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="not-to-say">Not To Say</option>
                        </select> 
                    </div>   
                </div>
                <div class="col-md-6 p-5">
             
                    <div class="mb-3">
                        <label for="Presentadress" class="form-label">Present Adress:</label>
                        <input type="text" class="form-control" name="present_adress" required>
                    </div>

                    <div class="mb-3">
                        <label for="Permanetadress" class="form-label">Permanent Adress:</label>
                        <input type="text" class="form-control" name="permanent_adress" required>
                    </div>
                    <div class="mb-3">
                        <label for="Bloodgroup" class="form-label">Blood Group:</label>
                        <input type="text" class="form-control" name="blood_group" required>
                    </div>
                    <div class="mb-3">
                        <label for="MyPhonenumber" class="form-label">My Phone number:</label>
                        <input type="text" class="form-control" name="my_phone_number" required>
                    </div>
                    
                </div>
               
                
            </div>
            <div class="row mt-5 reg-row mb-5">
                <div class="col-md-6 p-5">
                    <label for="father_phone_number" class="form-label">Position :</label>
                    <input type="text" class="form-control" name="position"  placeholder="Lecturer" >

                    <label for="father_phone_number" class="form-label mt-2">Token Number: (Contact with Administration)</label>
                    <input type="text" class="form-control" name="token" required>
                    
                </div>
                
                
            </div>
            <div class="row mt-5 reg-row mb-5">
                <div class="col-md-7 p-5">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
               
                
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                
                
                    <div class="mb-3">
                        <label for="pass" class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control" name="bypass" required>
                    </div>
                </div>
            </div>
            


            <div class="center mb-5">
                    <button type="submit" class="reg-btn btn btn-primary" name="register">Registration</button>
            </div>
            <div class="center mb-5 .reg_success">
                   <?php if(isset($reg_success)){
                       echo $reg_success;

                   }  ?>
            </div>

        

            
        </form>
       
        
 
    </div>



    
</body>
</html>