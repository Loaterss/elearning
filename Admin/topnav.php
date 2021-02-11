
<!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background:#41b3f9;">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="../plugins/images/headimg1.jpg" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="../plugins/images/headimg1.jpg" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="../plugins/images/headimg1.jpg" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="../plugins/images/headimg2.png" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
						
                    
</li>
<li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> 
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a> 
                        </form>
                    </li>
					
					
                      <li>
                        <a class="profile-pic" href=""> <?php
include'connection.php';
 
 
	
		echo "<img class='img-circle' src='../plugins/images/m1.jpg' height='36px' width='36px' alt='user-img' />";
	
	
	?><b class="hidden-xs"><?php echo $_SESSION['SESS_NAME'];  ?></b></a>
                    </li>
					
					 <li>
                        <a class="profile-pic" href="logout.php"> <b class=""><button type="button" class="btn btn-danger"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i>Logout</button></b></a>
                    </li>



                      
					 
					 
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>









