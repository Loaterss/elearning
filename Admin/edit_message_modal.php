
 <div class="modal fade" id="myModal2<?php echo $id; ?>" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true">    <div class="modal-dialog">       <div class="modal-content">          <div class="modal-header">             <button type="button" class="close"                 data-dismiss="modal" aria-hidden="true">                   &times;             </button>             <h4 class="modal-title" id="myModalLabel">                 EDIT
 
      message   Table</h4>          </div>          <div class="modal-body">       
 
 
  <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="edit_message.php" enctype="multipart/form-data" >
                        
						<input type="hidden"  name="id" value="<?php echo $id;  ?>" required>
						 
									<input type="hidden"  name="submitedit"   required>
						<?php
									$sql9="SELECT * FROM `message` WHERE `message_ID`='$id'";
									$rst9=mysqli_query($con,$sql9);
									while($rw9=mysqli_fetch_array($rst9)){
										
										?>
										
   
										
										<div class="form-group">
                                    <label class="col-md-12"> message <small style="font-size:12px; color:red;">***UPDATE   message ***</small> </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="value_message" placeholder="<?php echo  $rw9["message"];    ?>" value="<?php echo  $rw9["message"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> sender <small style="font-size:12px; color:red;">***UPDATE   sender ***</small> </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="value_sender" placeholder="<?php echo  $rw9["sender"];    ?>" value="<?php echo  $rw9["sender"];    ?>"
                                            class="form-control form-control-line">  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> receiver <small style="font-size:12px; color:red;">***UPDATE   receiver ***</small> </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="value_receiver" placeholder="<?php echo  $rw9["receiver"];    ?>" value="<?php echo  $rw9["receiver"];    ?>"
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
	
	
	 
	

 
 
 