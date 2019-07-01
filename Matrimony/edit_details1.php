<?php

session_start(); 
$uname=$_SESSION["uname"];
$password=$_SESSION["password"];

ini_set('max_execution_time', 900); //300 seconds = 5 minutes

if($_SESSION['status']!="Active")
{
    header("location:login.php");
}
else
{

?>
<html lang="en">
    <head>
        <title>Valmiki Matrimony</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/logo1.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
    
    
    	<!--======== SEARCH-OVERLAY =========-->       
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                
            </div><!-- end container -->
        </div><!-- end top-bar -->

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent" >
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" id="menu-button">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>                        
                            </button>
                            <div class="header-search hidden-lg" >
                               <h2 style='color:#f47820'>Valmiki Matrimony</h2>
                            </div>
                            <a href="#" class="hidden-xs hidden-sm"><img src="images/logo1.png"></a>
                        </div><!-- end navbar-header -->
                    
                        <div class="collapse navbar-collapse" >
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span><i class="fa fa-angle-down"></i></span></a>
                                    		
                                </li>
                               
                                <li class="dropdown active"><a href="contact.html" class="dropdown-toggle" >Contact Us<span><i class="fa fa-angle-down"></i></span></a>
                                    		
                                </li>
                               
                                
                                
                            </ul>
                        </div><!-- end navbar collapse -->
                    </div><!-- end container -->
                 </nav><!-- end navbar -->
        
        <div class="sidenav-content">
                <div id="mySidenav" class="sidenav" >
                    <h2 ><img src="images/logo1.png"></h2>
    
                    <div id="main-menu">
                        <div class="closebtn">
                            <button class="btn btn-default" id="closebtn">&times;</button>
                        </div><!-- end close-btn -->
                        
                        <div class="list-group panel">
                        
                            <a href="#home-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Login<span><i class="fa fa-chevron-down arrow"></i></span></a>
                          
                            
                            
                            
                            <a href="contact.html" class="list-group-item"><span><i class="fa fa-globe link-icon"></i></span>Contact Us<span><i class="fa fa-chevron-down arrow"></i></span></a>
    
    
                            
                         
                        </div><!-- end list-group -->
                    </div><!-- end main-menu -->
                </div><!-- end mySidenav -->
            </div><!-- end sidenav-content -->
        
        
        <!--========== PAGE-COVER =========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">My Account</h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="dashboard-heading">
                                <h2 style='font-size:28px'> User <span>Account Details</span></h2>
                                
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                               
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="#"> <button    data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" 
									onclick="abc1()" style='height:40px'>  <i class="glyphicon glyphicon-plus"></i> </button>
									<br><br>
									Add More Details</a></li>
                                        	<li class="active"><a href="view_details.php"><span><i class="fa fa-eye"></i></span>View Details</a></li>
                                        	<li class="active"><a href="edit_details.php"><span><i class="fa fa-pencil"></i></span>Edit Details</a></li>
                                            <li><a href="update_details.php"><span><i class="fa fa-briefcase"></i></span>Update Details</a></li>
                                            <li><a href="logout.php"><span><i class="fa fa-heart"></i></span>LOGOUT</a></li>
                                           
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                		<h2 class="dash-content-title">My Profile</h2>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Profile Details</h4></div>
                                            <div class="panel-body">
											<?php 
							include "db.php";
							$sql_1 = mysqli_query($dbc,"select * from member where fname='$uname' and password='$password' ");
							while($row_1 = mysqli_fetch_array($sql_1))
							{
								//print "<img src='uploads/$row_1[12]' alt='' width='300px' height='300px'>";
								$date = date('d-m-Y', strtotime($row_1[5]));
							
							
						?>
											
                                            	<div class="row">
                                                	<div class="col-sm-5 col-md-4 user-img">
                                                        <img src="uploads/<?php $row_1[12]; ?>" class="img-responsive" alt="user-img" / style='height:222px;width:222px'>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-3 col-md-4  user-detail">
                                                        <ul class="list-unstyled">
														<form action="update_details.php" method="post">
                                                            <li><span>Name:</span><input type='text' name='first_name' value='<?php echo $row_1[1]; ?>' style="width:250px; height:35px" class="form-control"></li>
                                                            <li><span>Date of Birth:</span> <?php echo $row_1[5]?></li>
                                                            <li><span>Gender</span> <?php echo $row_1[4]?></li>
                                                            <li><span>Religion:</span> <?php echo $row_1[8]?></li>                                                       
                                                            <li><span>Education:</span> <?php echo $row_1[7]?></li>
                                                            <li><span>Email:</span><?php echo $row_1[9]?></li>
                                                            <li><span>Phone:</span><?php echo $row_1[3]?></li>
                                                            <li><span>Address:</span> <?php echo $row_1[25]?></li>
                                                           <li><span>Siblings</span> <?php echo $row_1[18]?></li>
                                                        </ul>
                                                        
                                                   	</div>
													<div class="col-sm-3 col-md-4  user-detail">
                                                        <ul class="list-unstyled">
                                                            <li><span>Father Name:</span> <?php echo $row_1[15]?></li>
                                                            <li><span>Mother Name:</span> <?php echo $row_1[16]?></li>
                                                           
                                                            <li><span>Height:</span> <?php echo $row_1[18]?></li>                                                       
                                                            <li><span>Birth Time:</span> <?php echo $row_1[19]?></li>
                                                            <li><span>Color:</span><?php echo $row_1[20]?></li>
                                                            <li><span>Rashi:</span><?php echo $row_1[22]?></li>
                                                            <li><span>Nakshatra:</span> <?php echo $row_1[23]?></li>
                                                            <li><span>God:</span> <?php echo $row_1[24]?></li>
                                                            <li><span>Expectations:</span> <?php echo $row_1[26]?></li>
                                                            <li><span>Region:</span> <?php echo $row_1[10]?></li>
															
                                                        </ul>
                                                        
                                                   	</div>
													
													
													<!-- end columns -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add Details</h4>
      </div>
      <div class="modal-body">
	  <form action="more_details.php" method="post">
	  <input type='hidden' name='inc_id' value="<?php echo $row_1[0]?>">
	  <div class="form-group">
            <label for="recipient-name" class="control-label">Father Name</label><br>
			<input type="text"  style="height: 35px" placeholder="Enter Father Name" name="father_name" value='<?php echo $row_1['father_name']; ?>' id="father_name"  class="form-control" />
		</div>
		
            <div class="form-group">
            <label for="recipient-name" class="control-label">Mother Name</label><br>
             <input type="text"  style="height: 35px" placeholder="Enter Mother Name" name="mother_name"  id="mother_name" class="form-control" />
		</div>
		  <div class="form-group">
            <label for="recipient-name" class="control-label">Siblings</label><br>
             <input type="text"  style="height: 35px" placeholder="Enter Siblings" name="siblings"  id="siblings" class="form-control" />
		</div>
		 <div class="form-group">
            <label for="recipient-name" class="control-label">Height</label><br>
             <input type="text"  style="height: 35px" placeholder="Height" name="height"   id="height" class="form-control" />
		</div>
		<div class="form-group">
            <label for="recipient-name" class="control-label">Birth Time</label><br>
             <input type="text"  style="height: 35px" placeholder="Birth Time" name="b_time"  id="b_time"  class="form-control" />
		</div>
		<div class="form-group">
            <label for="recipient-name" class="control-label">Color</label><br>
             <input type="text"  style="height: 35px" placeholder="Color" name="color"  id="color"  class="form-control" />
		</div>
		  
		  <div class="form-group">
            <label for="recipient-name" class="control-label">Job</label><br>
             <input type="text"  style="height: 35px" placeholder="Job" name="job"   id="job" class="form-control" />
		</div>
		  
		  <div class="form-group">
            <label for="recipient-name" class="control-label">Rashi</label><br>
             <input type="text"  style="height: 35px" placeholder="Rashi" name="rashi"  id="rashi"  class="form-control" />
		</div>
		  <div class="form-group">
            <label for="recipient-name" class="control-label">Nakshatra</label><br>
             <input type="text"  style="height: 35px" placeholder="Nakshatra" name="nakshatra"  id="nakshatra"   class="form-control" />
		</div>
		
		  <div class="form-group">
            <label for="recipient-name" class="control-label">God</label><br>
             <input type="text"  style="height: 35px" placeholder="God" name="god"   id="god" class="form-control" />
		</div>
		<div class="form-group">
		<label for="recipient-name" class="control-label">Region</label><br>
            <select id="region" name="region" class="form-control">
			<option value="">Region</option>
			<option value="North Karnataka">North Karnataka</option>
			<option value="South Karnataka">South Karnataka</option>
			</select>
		</div>
			  <div class="form-group">
            <label for="recipient-name" class="control-label">Address</label><br>
              <textarea  placeholder="Enter Address" name="address" id='address'  class="form-control" rows='4'></textarea>
		</div>
		<div class="form-group">
            <label for="recipient-name" class="control-label">Expectations</label><br>
             <textarea  placeholder="Enter Expectations" name="expectations" id='expectations'  class="form-control" rows='4'></textarea>

		</div>
      <div class="modal-footer">
	  	  <button type="submit" class="btn btn-orange" onclick="submit()">Submit</button></form>
        <button type="submit" class="btn btn-red"  style="background-color:red"  >Close</button>
        	      </div>
						
    </div>
  </div>
</div>
</div>
                                                
                                                </div><!-- end row -->
												<?php
												
							}
}?>
										
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->

        
        <!--========================= NEWSLETTER-1 ==========================-->
      
        <!--======================= FOOTER =======================-->
       <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-about">
                            <h3 class="footer-heading">About Us</h3>
                            <p>Valmiki Matrimoney is a matchmaking service created for parents who are looking for a life partner for their loved ones. </p>
                           
                        </div><!-- end columns -->
						
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">Connect Us</h3>
                            <ul class="list-unstyled">
                            	
                            	<li><span><i class="fa fa-phone"></i></span>94495 70971
 / 96200 22524 / 94837 77779 (Avinash)</li>
                                <li style='font-size:16px'><span><i class="fa fa-envelope"></i></span>info@valmikimatrimonial.in</li>
                            </ul>
                        </div><!-- end columns -->
						
						
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">Reach Us</h3>
                            <ul class="list-unstyled">
                            	<li><span><i class="fa fa-map-marker"></i></span>H F Doddamani, H No 2, Shakti Nagar, Gokul Road, Hubli - 580 030

</li>
                            	
                            </ul>
                        </div><!-- end columns -->
                        
                          
                        
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-about">
                            <h3 class="footer-heading">Social Media</h3>
                            
                            <ul class="social-links list-inline list-unstyled">
                            	<li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            	<li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                              
                                <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                               
                            </ul>
                        </div><!-- end columns -->
                        
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2018 <a href="#">Valmiki Matrimony</a>. All rights reserved.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                            	<li><a href="#">Design & Developed by <a href="#"><a href="#">BSA Technologies
								</a></li>
                               
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
