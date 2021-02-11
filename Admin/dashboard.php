
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
                     <h4 class="page-title"><i class="fa fa-dashboard" aria-hidden="true"></i> <i class="fa fa-desktop fa-fw" aria-hidden="true"></i>Dashboard</h4> </div>
							 
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
			   
				
				<?php 
				//function for returning different colors
function kosh2(){
$rt=array('text-success','text-purple','text-info','text-warning','text-danger');
	
$srt=	rand(0,4);
return 	$rt[$srt];
	
	
}






				?>
			
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
				
				
				 <div class="row">
				
				<?php 
				include"connection.php";
				$sql234=mysqli_query($con,"SHOW tables FROM $db");
				while($rw1234=mysqli_fetch_array($sql234)){
				$tbn=$rw1234['Tables_in_'.$db.''];
				
				$sql22="SHOW KEYS FROM $tbn WHERE key_name='PRIMARY'";
										$rst22=mysqli_query($con,$sql22);
										$rw22=mysqli_fetch_array($rst22);
										$pk_col_name=$rw22['Column_name'];
				
				
				$sql2345=mysqli_query($con,"SELECT COUNT($pk_col_name) AS NM FROM $tbn");
				$rw12345=mysqli_fetch_array($sql2345)
				
				?>
               
			   
                  <a href="<?php echo $tbn;  ?>_table.php">  <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title"><?php echo $tbn; ?></h3>
                            <ul class="list-inline two-part">
                                <li>
								<i class="fa fa-database fa-fw <?php echo kosh2();  ?>" aria-hidden="true"></i><i class="fa fa-list-ol fa-fw <?php echo kosh2();  ?>" aria-hidden="true"></i>
                                    
                                </li>
                                <li class="text-right"><i class="ti-arrow-up <?php echo kosh2();  ?>"></i> <span class="counter <?php echo kosh2();  ?>"><?php echo $rw12345['NM'];  ?> 
								 
								
								</span></li>
                            </ul>
                        </div>
                    </div> </a>
                    
				<?php  }  ?>   
               

			   </div>
			   
			   
			   
                <!--/.row -->
                <!--row -->
                 
                
               
            </div>
            <!-- /.container-fluid -->
            <?php 
			include "footer.php";
			
			?>
 
 
 
 
 