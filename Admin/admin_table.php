
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
                     <h4 class="page-title"><i class="fa fa-table fa-fw" aria-hidden="true"></i>admin</h4> </div>
							 
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<?php if(isset($_GET["msg"])){ ?>   
			   <div class="row">
                    <div class="col-sm-12">
                         
                            
                                 <div id="myAlert" class="alert alert-<?php  echo $_GET["clr"];  ?>">    <a href="#" class="close" data-dismiss="alert">&times;</a>    <strong>  <?php  echo $_GET["msg"];  ?></strong>   </div> 
                      
                         
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
                            <h3 class="box-title">Table admin</h3>
                            
							
							<div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
 
 
<th>admin_ID</th>

<th>name</th>

<th>username</th>

<th>password</th>

 <th>Delete</th> 
										  <th>Edit</th>
                                        </tr>
                                    </thead>
									<tbody>
									
									<?php
									include "connection.php";
									$sql="SELECT * FROM admin";
									$rst=mysqli_query($con,$sql);
									while($rw=mysqli_fetch_array($rst)){
									$id=$rw["admin_ID"];
									
									?>
									
									<tr>
                                    
                               
 
 
<td><?php echo $rw['admin_ID'];  ?></td>

<td><?php echo $rw['name'];  ?></td>

<td><?php echo $rw['username'];  ?></td>

<td><?php echo $rw['password'];  ?></td>


							<td>
											 <a  data-toggle="modal"     data-target="#myModal<?php echo $id; ?>" class="btn btn-danger"> <i class="fa fa-trash fa-fw"></i></a>
											<?php include("delete_admin_modal.php"); ?>
											 
											
											</td>
											<td style="padding-left:0px;">
                                             <a data-toggle="modal"     data-target="#myModal2<?php echo $id; ?>" class="btn btn-success"><i class="fa fa-pencil fa-fw"></i></a>
                                  <?php include("edit_admin_modal.php"); ?>
											
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
                         <?php include("add_admin_modal.php"); ?> 
								
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
 
 