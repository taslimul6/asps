<?php



require_once("templete-parts/header.php");
require_once("../rprocess.php");

require_once("logic.php");
require_once("logic.php");


$dbi = $connection -> query("SELECT * FROM tokens WHERE id='1';");
$dbz= mysqli_fetch_array($dbi);

if(isset($_POST['gen'])){
    $new=rand(1,99999999);
    mysqli_query($connection , "UPDATE tokens SET token = '$new' WHERE id = '1';");
    header("location:token.php?up=1");
}



?>



        <div class="container-fluid">
            <h2 class= "m-3 text-center" >Token</h2>
        </div>
       
      
        <div class="row ml-2 mr-2">
            <div class="col-md-11 m-auto">
                <p>This token will use for the new teacher registration form.
this feature is introduced To avoid unauthentic registration.
Provide this token code to the new teacher for 1st-time registration.</p>
                <form action="" method="post">
                    <input type="text"  value="<?php echo $dbz['token']; ?>" name='token'>
                    <button name='gen'>Generate New Token</button>
                
                </form>
            </div>
        </div>
      
     






        <?php require_once("templete-parts/footer.php") ?>



