<?php






$email= $_SESSION["email"];

$dbmain = $connection -> query("SELECT * FROM teachers WHERE email = '$email'");
$db = mysqli_fetch_array($dbmain);



?>