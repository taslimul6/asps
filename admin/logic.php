<?php

if(isset($_POST["create-notice"])){
    $title = $_POST["title"];
    $content = $_POST["content"];

   mysqli_query($connection, "INSERT INTO notices(title , content)  VALUES('$title', '$content');");
   header("location: notices.php?notice=success");
    
    
}


$dbi = mysqli_query($connection , "SELECT * FROM students ORDER BY batch , exam_roll;");
$row = mysqli_num_rows($dbi);



$email= $_SESSION["email"];
$dbmain = $connection -> query("SELECT * FROM teachers WHERE email = '$email'");
$db = mysqli_fetch_array($dbmain);



?>