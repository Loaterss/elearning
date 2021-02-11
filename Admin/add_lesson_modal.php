
 <div class="modal fade" id="myModal2add" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true">    <div class="modal-dialog">       <div class="modal-content">          <div class="modal-header">             <button type="button" class="close"                 data-dismiss="modal" aria-hidden="true">                   &times;             </button>             <h4 class="modal-title" id="myModalLabel">                 Add Record in 
 
      lesson      Table</h4>          </div>          <div class="modal-body">   
	  
	   <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" action="add_lesson.php" enctype="multipart/form-data" >
                        
						 
						 
									<input type="hidden"  name="submitadd"   required>
						 
										
   
										
										<div class="form-group">
                                    <label class="col-md-12"> Subject  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="subject" placeholder="subject" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Topic  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="topic" placeholder="topic" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                      
                                     <div class="form-group">
                                    <label class="col-md-12"> Lesson Note  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="topic" placeholder="topic" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Video  </label>
                                    <div class="col-md-12">
										
										  <input type="file"   name="file" placeholder="video" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> PDF </label>
                                    <div class="col-md-12">
										
										  <input type="file"   name="pdf" placeholder="PDF" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                      
										
										<div class="form-group">
                                    <label class="col-md-12"> Class  </label>
                                    <div class="col-md-12">
										
										  <input type="text"   name="class" placeholder="class" value=""
                                            class="form-control form-control-line" required>  
									</div>
                                </div> 
                                     </br>           
                                    
 	<div class="form-group">
                                    <div class="col-sm-12">
                                        <button name="submitadd" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Insert</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    


 </div>          <div class="modal-footer">             <button type="button" class="btn btn-default"                 data-dismiss="modal">Close             </button>                     </div>       </div><!-- /.modal-content --> </div><!-- /.modal -->
	
				
 