
 <div class="modal fade" id="myModal2add" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true">    <div class="modal-dialog">       <div class="modal-content">          <div class="modal-header">             <button type="button" class="close"                 data-dismiss="modal" aria-hidden="true">                   &times;             </button>             <h4 class="modal-title" id="myModalLabel">                 Add Record in 
 
      message      Table</h4>          </div>          <div class="modal-body">   
	  
	   <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="add_message.php" enctype="multipart/form-data" >
                        
						 
						 
									<input type="hidden"  name="submitadd"   required>
						 
										
   
										
										<div class="form-group">
                                    <label class="col-md-12"> Message  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="value_message" placeholder="message" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Sender  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="value_sender" placeholder="sender" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Receiver  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="value_receiver" placeholder="receiver" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                    
 	<div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Insert</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    


 </div>          <div class="modal-footer">             <button type="button" class="btn btn-default"                 data-dismiss="modal">Close             </button>                     </div>       </div><!-- /.modal-content --> </div><!-- /.modal -->
	
				
 