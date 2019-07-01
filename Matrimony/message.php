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
                            <div class="hidden-xs hidden-sm hidden-lg" >
                               <h2 style='color:#f47820'>Valmiki Matrimony</h2>
                            </div>
                            <a href="index.html"><img src="images/logo1.png"></a>
                        </div><!-- end navbar-header -->
                    
                        <div class="collapse navbar-collapse" >
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active"><a href="logout.php" class="dropdown-toggle" >Log-Out<span><i class="fa fa-sign-out"></i></span></a>
                                    		
                                </li>
                               
                                <li class="dropdown active"><a href="contact.html" class="dropdown-toggle" >Contact Us<span><i class="fa fa-envelope"></i></span></a>
                                    		
                                </li>
                                <li class="dropdown active"><a href="register.html" class="dropdown-toggle" >Register<span><i class="fa fa-registered"></i></span></a>
                                    		
                                </li>
                                
                                
                            </ul>
                        </div><!-- end navbar collapse -->
                    </div><!-- end container -->
                 </nav><!-- end navbar -->
        
       
        
        
        <!--========== PAGE-COVER =========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">MESSAGES</h1>
                        
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
                                
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                                
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="register_details1.html"> <button    data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" 
									onclick="abc1()" style='height:40px'>  <i class="glyphicon glyphicon-plus"></i> </button>
									<br><br>
									Add Profiles</a></li>
                                                                                     
                                            <li><a href="logout.php"><span><i class="fa fa-sign-out"></i></span>LOGOUT</a></li>
											<li><a href="action.php"><span><i class="fa fa-user"></i></span>PROFILES</a></li>
                                           
                                        </ul>
                                    </div><!-- end columns -->
                              
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content wishlist">
                                		<h2 class="dash-content-title">Your Messages</h2>
										<div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr class="list-content">
                                                       	<?php 
							include "db.php";
							
							@ $name=$_POST['name'];
							@ $email=$_POST['email'];
							@ $sub=$_POST['sub'];
							@ $msg=$_POST['msg'];
							
							
							
							$sql_1 = mysqli_query($dbc,"select * from message ");
							
							
							while($row_1 = mysqli_fetch_array($sql_1))
							{
								
								
								
							$id=$row_1[0];
							
						?>
                                                        <td class="list-text wishlist-text">
														
														
                                                            <p class="name"><span><font size="5px">Name:<?php echo $row_1[1]?></font></span></p>
                                                            	
                                                            </h3>
															 <p class="sub"><span>Subject:</span> <?php echo $row_1[3]?> </p>
                                                            <p><b>Message : </b></span> <?php echo $row_1[4]?></p>
                                                            <p class="email"><span>Email:</span> <?php echo $row_1[2]?> </p>
                                                            
                                                            <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                        </td>
                                                        <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey"><a href="d_msg.php?id=<?php echo $id;?>" onclick="return confirm('This record will be deleted, continue?')">Remove</a></button></td>
														
														     
                           
                    
														
														
                                                    </tr>
                                                    
                                                        <?php
							}


							?>
                                                  
                                                   
                                                 </tbody>
                                             </table>
                                        </div><!-- end table-responsive -->
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
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
