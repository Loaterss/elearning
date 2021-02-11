
 <div class="modal fade" id="myModal2<?php echo $id; ?>" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true">    <div class="modal-dialog">       <div class="modal-content">          <div class="modal-header">             <button type="button" class="close"                 data-dismiss="modal" aria-hidden="true">                   &times;             </button>             <h4 class="modal-title" id="myModalLabel">                 Update Teacher Data</h4>          </div>          <div class="modal-body">       
 
 
  <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="edit_Teacher.php" enctype="multipart/form-data" >
                        
						<input type="hidden"  name="id" value="<?php echo $id;  ?>" required>
						 
									<input type="hidden"  name="submitedit"   required>
						<?php
									$sql9="SELECT * FROM `Teacher` WHERE `Teacher_ID`='$id'";
									$rst9=mysqli_query($con,$sql9);
									while($rw9=mysqli_fetch_array($rst9)){
										
										?>
										
   
										
										<div class="form-group">
                                    <label class="col-md-12">First Name</label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="f_name" placeholder="<?php echo  $rw9["f_name"];    ?>" value="<?php echo  $rw9["f_name"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12">Last Name </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="l_name" placeholder="<?php echo  $rw9["l_name"];    ?>" value="<?php echo  $rw9["l_name"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="email" placeholder="<?php echo  $rw9["email"];    ?>" value="<?php echo  $rw9["email"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12">Username </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="username" placeholder="<?php echo  $rw9["username"];    ?>" value="<?php echo  $rw9["username"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Password </label>
                                    <div class="col-md-12">
										
										  <input type="password"   name="password" placeholder="<?php echo  $rw9["password"];    ?>" value="<?php echo  $rw9["password"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12">Phone Number </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="phone" placeholder="<?php echo  $rw9["phone"];    ?>" value="<?php echo  $rw9["phone"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                    
 						
<?php
						}
										 
										 ?>
  
 
                              
                                 
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
 

 </div>          <div class="modal-footer">             <button type="button" class="btn btn-default"                 data-dismiss="modal">Close             </button>                     </div>       </div><!-- /.modal-content --> </div><!-- /.modal -->
	
	
	 
	

 
 
 