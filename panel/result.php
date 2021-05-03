<?php 
  require_once("temp-parts/header.php");

$roll = $db['exam_roll'];



  
    $showr = mysqli_query($connection, "SELECT * FROM result WHERE roll = '$roll'"); 
    $show = mysqli_fetch_assoc($showr);

   
?>

    <div class="container-fluid">
    <h2 class= "m-3 text-center" >View Result</h2>
    </div>
    
   

  


    <div class="row m-3">
        <div class="col-sm-12">
        <h5 class=" ">1st Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">111</th>
                        <th scope="col">112</th>
                        <th scope="col">113</th>
                        <th scope="col">113L</th> 
                        <th scope="col">114</th>
                        <th scope="col">115</th>
                        <th scope="col">116</th>
                        <th scope="col">117</th>
                        <th scope="col">118</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(isset($show)){
                                
                                     ?>  
                                </tr>
                                    
                                    <td><?php echo $show["111"]; ?></td>
                                    <td><?php echo $show["112"]; ?></td>
                                    <td><?php echo $show["113"]; ?></td>
                                    <td><?php echo $show["113l"]; ?></td>
                                    <td><?php echo $show["114"]; ?></td>
                                    <td><?php echo $show["115"]; ?></td>
                                    <td><?php echo $show["116"]; ?></td>
                                    <td><?php echo $show["117"]; ?></td>
                                    <td><?php echo $show["118"]; ?></td>
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-4">
        <h5 class=" ">2nd Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">121</th>
                        <th scope="col">121l</th>
                        <th scope="col">122</th>
                        <th scope="col">122l</th> 
                        <th scope="col">123</th>
                        <th scope="col">124</th>
                        <th scope="col">124l</th>
                        <th scope="col">125</th>
                        <th scope="col">126</th>
                        <th scope="col">127</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(isset($show)){
                                
                                     ?>  
                                </tr>
                                    
                                    <td><?php echo $show["121"]; ?></td>
                                    <td><?php echo $show["121l"]; ?></td>
                                    <td><?php echo $show["122"]; ?></td>
                                    <td><?php echo $show["122l"]; ?></td>
                                    <td><?php echo $show["123"]; ?></td>
                                    <td><?php echo $show["124"]; ?></td>
                                    <td><?php echo $show["124l"]; ?></td>
                                    <td><?php echo $show["125"]; ?></td>
                                    <td><?php echo $show["126"]; ?></td>
                                    <td><?php echo $show["127"]; ?></td>
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-4">
        <h5 class=" ">3rd Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">211</th>
                        <th scope="col">212</th>
                        <th scope="col">213</th>
                        
                        <th scope="col">214</th>
                        <th scope="col">215</th>
                        <th scope="col">216</th>
                        <th scope="col">216l</th>
                        <th scope="col">217</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(isset($show)){
                                
                                     ?>  
                                </tr>
                                    
                                    <td><?php echo $show["211"]; ?></td>
                                    <td><?php echo $show["212"]; ?></td>
                                    <td><?php echo $show["213"]; ?></td>
                                    
                                    <td><?php echo $show["214"]; ?></td>
                                    <td><?php echo $show["215"]; ?></td>
                                    <td><?php echo $show["216"]; ?></td>
                                    <td><?php echo $show["216l"]; ?></td>
                                    <td><?php echo $show["217"]; ?></td>
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-4">
        <h5 class=" ">4th Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">221</th>
                        <th scope="col">221l</th>
                        <th scope="col">222</th>
                        
                        <th scope="col">222l</th>
                        <th scope="col">223</th>
                        <th scope="col">224</th>
                        <th scope="col">224l</th>
                        <th scope="col">225</th>
                        <th scope="col">226</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(isset($show)){
                                     ?>  
                                </tr>
                                    <td><?php echo $show["221"]; ?></td>
                                    <td><?php echo $show["221l"]; ?></td>
                                    <td><?php echo $show["222"]; ?></td>
                                    <td><?php echo $show["222l"]; ?></td>
                                    <td><?php echo $show["223"]; ?></td>
                                    <td><?php echo $show["224"]; ?></td>
                                    <td><?php echo $show["224l"]; ?></td>
                                    <td><?php echo $show["225"]; ?></td>
                                    <td><?php echo $show["226"]; ?></td>
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-4">
        <h5 class=" ">5th Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">311</th>
                        <th scope="col">312</th>
                        <th scope="col">313</th>
                        <th scope="col">314</th> 
                        <th scope="col">314L</th>
                        <th scope="col">315</th>
                        <th scope="col">315L</th>
                        <th scope="col">316</th>
                        <th scope="col">317</th>
                        <th scope="col">318</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(isset($show)){
                                     ?>  
                                </tr>
                                    <td><?php echo $show["311"]; ?></td>
                                    <td><?php echo $show["312"]; ?></td>
                                    <td><?php echo $show["313"]; ?></td>
                                    <td><?php echo $show["314"]; ?></td>
                                    <td><?php echo $show["314l"]; ?></td>
                                    <td><?php echo $show["315"]; ?></td>
                                    <td><?php echo $show["315l"]; ?></td>
                                    <td><?php echo $show["316"]; ?></td>
                                    <td><?php echo $show["317"]; ?></td>
                                    <td><?php echo $show["318"]; ?></td>
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-4">
        <h5 class=" ">6th Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">321</th>
                        <th scope="col">322</th>
                        <th scope="col">322L</th>
                        <th scope="col">323</th> 
                        <th scope="col">323L</th>
                        <th scope="col">324</th>
                        <th scope="col">325</th>
                        <th scope="col">325L</th>
                        <th scope="col">326</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(isset($show)){
                                
                                     ?>  
                                </tr>
                                    
                                    <td><?php echo $show["321"]; ?></td>
                                    <td><?php echo $show["322"]; ?></td>
                                    <td><?php echo $show["322l"]; ?></td>
                                    <td><?php echo $show["323"]; ?></td>
                                    <td><?php echo $show["323l"]; ?></td>
                                    <td><?php echo $show["324"]; ?></td>
                                    <td><?php echo $show["325"]; ?></td>
                                    <td><?php echo $show["325l"]; ?></td>
                                    <td><?php echo $show["326"]; ?></td>
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-4">
        <h5 class=" ">7th Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">411</th>
                        <th scope="col">412</th>
                        <th scope="col">413</th>
                        <th scope="col">Null</th> 
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(isset($show)){
                                
                                     ?>  
                                </tr>
                                    
                                    <td><?php echo $show["411"]; ?></td>
                                    <td><?php echo $show["412"]; ?></td>
                                    <td><?php echo $show["413"]; ?></td>
                                    
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-4">
        <h5 class=" ">8th Semester</h5>
            <div class=" " style="overflow-x:auto;">
            
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        
                        <th scope="col">411</th>
                        <th scope="col">421</th>
                        <th scope="col">421L</th>
                        <th scope="col"> Null</th> 
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        <th scope="col">Null</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if(isset($show)){
                                
                                     ?>  
                                </tr>
                                    
                                    <td><?php echo $show["411"]; ?></td>
                                    <td><?php echo $show["421"]; ?></td>
                                    <td><?php echo $show["421l"]; ?></td>
                                    
                                    
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

 
   













    </div>
      
     







<?php require_once("temp-parts/footer.php");?>
