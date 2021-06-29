<?php 
  require_once("templete-parts/header.php");
  if(isset($_POST["src"])){
      $grp = $_POST["grp"];
    
  
  $db = mysqli_query($connection, "SELECT * FROM students WHERE blood_group = '$grp';");
  $row= mysqli_num_rows($db);
 
 
}

?>


<div class="container-fluid">
        <h2 class= "m-3 text-center" >Blood Bank</h2>
      </div>
      
      <div class="row ml-3 ">
  
            <form style="width:30%; margin:0 auto;" method="POST">
            <div class="form-row mt-3">
                <div class="col-auto">
                <label class="sr-only" for="inlineFormInput"></label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="A+" name="grp">
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2" name="src">Search</button>
                </div>
            </div>
            </form>
       


      </div>
      <div class="row">
        <div class="col-md-11 m-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        
                        <th scope="col">Full Name</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Last Donation Date</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(isset($row)){
                                if($row>0){
                                    while($rows= mysqli_fetch_assoc($db)){ ?>  
                                </tr>
                                    
                                    <td><?php echo $rows["full_name"] ?></td>
                                    <td><?php echo $rows["batch"] ?></td>
                                    <td><?php echo $rows["my_phone_number"] ?></td>
                                    <td><?php echo $rows["blood_group"] ?></td>
                                    <td><?php echo $rows["blood_date"] ?></td>

                                    
                                </tr>

                        <?php }}}?>
                        
                    </tbody>
                </table>
            </div>
                                    </div>
      
   
<?php require_once("templete-parts/footer.php");?>