<!doctype html>
<html lang="en">
    <head>
        <title>Vamlmiki Matrimony</title>
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
    
        
        
        <!--============= TOP-BAR ===========-->
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
        
            <div class="container">
                
    

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent" >
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" id="menu-button">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>                        
                            </button>
                            <div class="hidden-xs hidden-sm hidden-lg" >
                               <h2 style='color:#f47820'>Valmiki Matrimony</h2>
                            </div>
                            <a href="index.html"><img src="images/logo1.png"></a>
                        </div><!-- end navbar-header -->
                    
                        <div class="collapse navbar-collapse" >
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active"><a href="logout.php" class="dropdown-toggle" >Log-Out<span><i class="fa fa-sign-out"></i></span></a>
                                    		
                                </li>
                               
                                <li class="dropdown active"><a href="contact.html" class="dropdown-toggle" >Contact us<span><i class="fa fa-envelope"></i></span></a>
                                    		
                                </li>
                                    		
                                
                               
                                
                                
                            </ul>
                        </div><!-- end navbar collapse -->
                    </div><!-- end container -->
                 </nav><!-- end navbar -->
            </div><!-- end top-bar --><br>
			<br>
			<br>
			<br>
			<br>
        <div class="sidenav-content">
                <div id="mySidenav" class="sidenav" >
                    <h2 ><img src="images/logo1.png"></h2>
    
                    <div id="main-menu">
                        <div class="closebtn">
                            <button class="btn btn-default" id="closebtn">&times;</button>
                        </div><!-- end close-btn -->
                        
                        <div class="list-group panel">
                        
                            <a href="logout.php" class="list-group-item" ><span> <i class="fa fa-home link-icon"></i></span>LogOut<span>&nbsp <i class="fa fa-chevron-down arrow"></i></span></a>
                          
                            
                            
                            
                            <a href="contact.html" class="list-group-item"><span><i class="fa fa-globe link-icon"></i></span>Contact Us<span>&nbsp <i class="fa fa-chevron-down arrow"></i></span></a>
    
    
                            
                         
                        </div><!-- end list-group -->
                    </div><!-- end main-menu -->
                </div><!-- end mySidenav -->
            </div><!-- end sidenav-content -->
        
        
        
         <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Search Details</h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        <!--===== INNERPAGE-WRAPPER ====-->
        
                <div class="container">
                    <div class="row">        	
                        
                     
                        
                      <!-- <div class="col-xs-12 col-sm-12 col-md-12 content-side">-->
                        
						
						       <?php 
							   
							include 'db.php';
							
							$gender=$_POST['gender'];
							$age=$_POST['age'];
						    $fromage=$_POST['fromage'];
						    $education=$_POST['education'];
							$job=$_POST['job'];
							$region=$_POST['region'];
						
							
							$sql_1 = mysqli_query($dbc,"select *from member where gender='$gender' and age between '$age' and  '$fromage' and education='$education' and job='$job' and region='$region'");
							
							if(mysqli_num_rows($sql_1)>0)
							{
							while($row_1 = mysqli_fetch_array($sql_1))
							{
								$date = date('d-m-Y', strtotime($row_1['dob']));
							//	print "<img src='uploads/$row_1[12]' alt='' width='300px' height='300px'>";
							
							
							
						?>
						
                            <div class="col-md-3">
                                
                                    <div class="grid-block main-block f-grid-block">
                                        <a href="flight-detail-left-sidebar.html">
                                            <div class="f-img">
                                                 <img src="uploads/<?php echo $row_1[12]; ?>" class="img-responsive" alt="user-img" / style='height:150px;width:150px'>
                                            </div><!-- end f-list-img -->
                                        </a>
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <center><li><font color="af9b9b"><?php echo $row_1[1]?> <?php echo $row_1[2]?></li><center></font>
                                            
                                        </ul>
                                      
										<b>Date of Birth : </b></span><?php echo $row_1[5]?>
										<br><br>
										<b>Gender : </b></span> <?php echo $row_1[4]?>
										<br><br>
										<b>Religion : </b></span> <?php echo $row_1[8]?></
										<br><br><br>
										<b>Qualification : </b></span> <?php echo $row_1[7]?>
										<br><br>
										<b>Job : </b></span> <?php echo $row_1[20]?>
										<br><br>
										
										
										
										
                                        <a href="index.html" class="btn btn-orange">View More</a>
                                    
                                
                            </div><!-- end f-list-block -->
                            </div><!-- end f-list-img -->
                            
                            <?php
							}
							}
							else{
							
							echo "No Matches For Your Search";
							}
							?>
                    
                        </div><!-- end columns -->
    
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end flight-listings -->
        </section><!-- end innerpage-wrapper -->
        
      
        
        
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
                            	<li><a href="#">Design & Developed by <a href="#">BSA Technologies
								</a></li>
                               
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
		<script src="js/custom-price-slider.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
