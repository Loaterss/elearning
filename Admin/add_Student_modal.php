
 <div class="modal fade" id="myModal2add" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true">    <div class="modal-dialog">       <div class="modal-content">          <div class="modal-header">             <button type="button" class="close"                 data-dismiss="modal" aria-hidden="true">                   &times;             </button>             <h4 class="modal-title" id="myModalLabel">        Add Student</h4>          </div>          <div class="modal-body">   
  
   <div class="white-box">
                       <form class="form-horizontal form-material" method="POST" action="add_Student.php" enctype="multipart/form-data" >
                   
                          
                          
                                        <input type="hidden"  name="submitadd"   required>
                          
                                             

                                             
                                             <div class="form-group">
                               <label class="col-md-12"> First Name</label>
                               <div class="col-md-12">
                                             
                                               <input type="text"   name="f_name" placeholder="Enter student first name" value=""
                                       class="form-control form-control-line" required>  
                                        </div>
                           </div> 
                                </br>           
                                 
                                             
                                             <div class="form-group">
                               <label class="col-md-12">Last Name </label>
                               <div class="col-md-12">
                                             
                                               <input type="text"   name="l_name" placeholder="Enter student last name" value=""
                                       class="form-control form-control-line" required>  
                                        </div>
                           </div> 
                                </br>           
                                 
                                             
                        
                                 
                                             
                                             <div class="form-group">
                               <label class="col-md-12"> Username </label>
                               <div class="col-md-12">
                                             
                                               <input type="text"   name="username" placeholder="Enter student username" value=""
                                       class="form-control form-control-line" required>  
                                        </div>
                           </div> 
                                </br>           
                                 
                                             
                                             <div class="form-group">
                               <label class="col-md-12">Password</label>
                               <div class="col-md-12">
                                             
                                               <input type="password"   name="password" placeholder="password" value=""
                                       class="form-control form-control-line" required>  
                                        </div>
                           </div> 
                                </br>           
                                 
                                             
                                             <div class="form-group">
                               <label class="col-md-12">Class </label>
                               <div class="col-md-12">
                                             
                                               <input type="text"   name="class" placeholder="Enter Student Class" value=""
                                       class="form-control form-control-line" required>  
                                        </div>
                           </div> 
                                </br>           
                               
 <div class="form-group">
                               <div class="col-sm-12">
                                   <button class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Submit</button>
                               </div>
                           </div>
                       </form>
                   </div>
               


</div>          <div class="modal-footer">             <button type="button" class="btn btn-default"                 data-dismiss="modal">Close             </button>                     </div>       </div><!-- /.modal-content --> </div><!-- /.modal -->

               
