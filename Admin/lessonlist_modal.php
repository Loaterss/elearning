
 <?php 
include "header.php";
include 'connection.php';

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
                     <h4 class="page-title"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Play</h4> </div>
							 
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<?php if(isset($_GET["msg"])){ ?>   
			   <div class="row">
                    <div class="col-sm-12">
                         
                            
                                 <div id="myAlert" class="alert alert-<?php  echo $_GET["clr"];  ?>">    <a href="#" class="close" data-dismiss="alert">&times;</a>       </div> 
                      
                         
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
 
 
<th>Video</th>




                                        </tr>
                                    </thead>
									<tbody>
									
									<?php
                                 
                                   
                                    
								
									
                                      
                                        

                                    
									
									
									?>
									
									<tr>
                                    
                               
 
 
<td>
    
<?php
$id=intval($_GET['nid']);
$sql9="SELECT * FROM `lesson` WHERE `lesson_ID`='$id'";
                    $rst9=mysqli_query($con,$sql9);
                    while($rw9=mysqli_fetch_assoc($rst9)){
$vid = $rw9['video'];        ?>
 
                        <style type="text/css">
  .row iframe {
    width: 100%;
    height: 70%;
  }
</style>
 
 <div class="container" >
 	<video width="50%"  controls>
		  <source src="<?php echo 'IMA E-learn/'. $vid;?>" type="video/mp4">Video not supported
		  <source src="<?php echo 'IMA E-learn/'. $vid;?>" type="video/3gp"> 
		</video>
      
        <div class="col-lg-12">Description</div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Subject :</label>
           <label class="col-md-10" class="control-label"><?php echo  $rw9['subject'];
 ?></label>
         </div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Topic: </label>
           <label class="col-md-10" class="control-label"><?php echo  $rw9['topic'];
           echo  $vid;
           
 ?></label>
         </div> 
         <?php
}
?>
 </div> 
 
<div class="container">
	<embed src="<?php echo $rw9['pdf'] ?>" type="application/pdf" width="100%" height="400px" />
</div> 
		

 
            <!-- /.container-fluid -->
            <?php 
			include "footer.php";
			
			?>
 
 