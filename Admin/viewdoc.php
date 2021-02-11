
 <?php 
include "header.php";
include 'connection.php';

?>
<body class="">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div>
        <!-- ============================================================== -->
      <?php 
	 
	  
	  ?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php 
	   include "leftnav.php";
	   ?>
	   
	   
	   <!--  begin extension of left nav   -->
	   </ul>
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
                     <h4 class="page-title"><i class="fa fa-table fa-fw" aria-hidden="true"></i>View Document</h4> </div>
							 
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				
				
				
				
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
               
			   <div class="row">
                    <div class="col-sm-12">
                        <div class="">
                            <h3>View Document</h3>
                            
							
							<div class="">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
 
 





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
$vid = $rw9['pdf'];        ?>
 

<p style="font-size: 18px;font-weight: bold;"></p>
<div class="container">
	<embed src="<?php echo '../PDF_upload/'.$vid; ?>" type="application/pdf" width="100%" height="500px" />
</div> 
      
        <div class="col-lg-12">Description</div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Subject :</label>
           <label class="col-md-10" class="control-label"><?php echo  $rw9['subject'];
 ?></label>
         </div>
         <div class="col-lg-12">
           <label class="col-md-2" class="control-label">Topic: </label>
           <label class="col-md-10" class="control-label"><?php echo  $rw9['topic'];
           
           
 ?></label>
         </div> 
         <?php
}
?>
 </div> 
 

		

 
 