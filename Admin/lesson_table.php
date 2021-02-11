
 <?php 
include "header.php";
?>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
      <?php 
	  include "topnav.php";
	  
	  ?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php 
	   include "leftnav.php";
	   ?>
	   
	   
	   <!--  begin extension of left nav   -->
	   </ul>
                <div class="center p-20">
                     <a href="#"  class="btn btn-info btn-block waves-effect waves-light">IMA E-learn</a>
                 </div>
            </div>
            
        </div>
	   <!--  end extension of left nav   -->
	   
	   
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title"><i class="fa fa-table fa-fw" aria-hidden="true"></i>lesson</h4> </div>
							 
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<?php if(isset($_GET["msg"])){ ?>   
			   <div class="row">
                    <div class="col-sm-12">
                         
                            
                                 <div id="myAlert" class="alert alert-<?php  echo $_GET["clr"];  ?>">    <a href="#" class="close" data-dismiss="alert">&times;</a>     <strong>  <?php  echo $_GET["msg"];  ?> </strong>   </div> 
                      
                         
                    </div>
                </div>
			   <?php  } ?>
			   
				
				
				
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
               
			   <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Lesson List</h3>
                            
							
							<div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
 
 


<th>subject</th>

<th>topic</th>



<th>class</th>

 <th>View Video</th> 

 <th>View Document</th> 
										  <th>Delete</th>
                                          <th>Edit</th>
                                        </tr>
                                    </thead>
									<tbody>
									
									<?php
									include "connection.php";
									$sql="SELECT * FROM lesson";
									$rst=mysqli_query($con,$sql);
									while($rw=mysqli_fetch_array($rst)){
									$id=$rw["lesson_ID"];
									
									?>
									
									<tr>
                                    
                               
 
 


<td><?php echo $rw['subject'];  ?></td>

<td><?php echo $rw['topic'];  ?></td>



<td><?php echo $rw['class'];  ?></td>


							
<td>
                                             <a href="watchvideo.php?nid=<?php echo htmlentities($rw['lesson_ID'])?>"" class="btn btn-success"><span class="fa fa-info fw-fa"></span> Watch Video </i></a>
                                             
											
											</td>
                                            							
<td>
                                             <a href="viewdoc.php?nid=<?php echo htmlentities($rw['lesson_ID'])?>"" class="btn btn-success"><span class="fa fa-info fw-fa"></span> View Document</i></a>
                                             
											
											</td>
                            <td>
											 <a  data-toggle="modal"     data-target="#myModal<?php echo $id; ?>" class="btn btn-danger"> <span class="fa fa-trash fa-fw"></span>Delete</a>
											<?php include("edit_lesson_modal.php"); ?>
											 
											
											</td>
											<td style="padding-left:0px;">
                                             <a data-toggle="modal"     data-target="#myModal2<?php echo $id; ?>" class="btn btn-success"><span class="fa fa-pencil fa-fw"></span>Edit</a>
                                  <?php include("delete_lesson_modal.php"); ?>
											
											</td>
                                            		
									
</tr>
						
<?php
						}
										 
										 ?>
										 
                                    </tbody>







 
  </table>
  
  <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"> </h4> </div>
						 
						 <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                           
                             <a data-toggle="modal"     data-target="#myModal2add"  class="btn btn-primary pull-right m-l-20"><i class="fa fa-plus fa-fw"></i>Add Record</a>
                         <?php include("add_lesson_modal.php"); ?> 
								
                    </div>
						 
						 
                    <!-- /.col-lg-12 -->
                </div>
  
  
  
  
                            </div>
                        </div>
                    </div>
                </div>
			   
			   
			   
			   
                <!--/.row -->
                <!--row -->
                 
                
               
            </div>
            <!-- /.container-fluid -->
            <?php 
			include "footer.php";
			
			?>
 
 