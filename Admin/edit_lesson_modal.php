
 <div class="modal fade" id="myModal2<?php echo $id; ?>" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true">    <div class="modal-dialog">       <div class="modal-content">          <div class="modal-header">             <button type="button" class="close"                 data-dismiss="modal" aria-hidden="true">                   &times;             </button>             <h4 class="modal-title" id="myModalLabel">                 EDIT
 
     Edit Lesson</h4>          </div>          <div class="modal-body">       
 
 
  <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="edit_lesson.php" enctype="multipart/form-data" >
                        
						<input type="hidden"  name="id" value="<?php echo $id;  ?>" required>
						 
									<input type="hidden"  name="submitedit"   required>
						<?php
									$sql9="SELECT * FROM `lesson` WHERE `lesson_ID`='$id'";
									$rst9=mysqli_query($con,$sql9);
									while($rw9=mysqli_fetch_array($rst9)){
										
										?>
										
   
										
										<div class="form-group">
                                    <label class="col-md-12"> Subject  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="subject" placeholder="<?php echo  $rw9["subject"];    ?>" value="<?php echo  $rw9["subject"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Topic  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="topic" placeholder="<?php echo  $rw9["topic"];    ?>" value="<?php echo  $rw9["topic"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12">Video </label>
                                    <div class="col-md-12">
										
										  <input type="file"   name="file" placeholder="<?php echo  $rw9["video"];    ?>" value="<?php echo  $rw9["video"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Pdf  </label>
                                    <div class="col-md-12">
										
										  <input type="file"   name="pdf" placeholder="<?php echo  $rw9["pdf"];    ?>" value="<?php echo  $rw9["pdf"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Class </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="class" placeholder="<?php echo  $rw9["class"];    ?>" value="<?php echo  $rw9["class"];    ?>"
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
	
	
	 
	

 
 
 