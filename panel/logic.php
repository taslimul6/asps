<?php

$roll= $_SESSION["roll"];
$dbmain = $connection -> query("SELECT * FROM students WHERE exam_roll = '$roll';");
$db = mysqli_fetch_array($dbmain);




?>