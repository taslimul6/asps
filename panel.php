<?php
    session_start();
    if(!isset($_SESSION["roll"])){
        header("location: index.php");
        die();
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
</head>
<body>
    <?php echo $_SESSION["roll"]; ?>
    <a href="logout.php" class="logout">Logout</a>
</body>
</html>