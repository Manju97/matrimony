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
       
        
        
        <!--============= TOP-BAR ===========-->
       
              <!--====== LOADER =====-->
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
                        
                            <a href="logout.php" class="list-group-item" ><span> <i class="fa fa-sign-out link-icon"></i></span>LogOut<span>&nbsp <i class="fa fa-chevron-down arrow"></i></span></a>
                          
                            
                            
                            
                            <a href="contact.html" class="list-group-item"><span><i class="fa fa-globe link-icon"></i></span>Contact Us<span>&nbsp <i class="fa fa-chevron-down arrow"></i></span></a>
    
    
                            
                         
                        </div><!-- end list-group -->
                    </div><!-- end main-menu -->
                </div><!-- end mySidenav -->
            </div><!-- end sidenav-content -->
        
        
        
        
       
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="dashboard-heading">
                                <h2 style='font-size:28px'> Thank you, &nbsp <span> for registering with us</span></h2>
                                
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                               
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
									
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="#"> <button    data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" 
									onclick="abc1()" style='height:40px'>  <i class="glyphicon glyphicon-plus"></i> </button>
									<br><br>
									Add More Details</a></li>
                                        	<li><a href="view_details.php"><span><i class="fa fa-eye"></i></span>View Details</a></li>
                                        	<li><a href="edit_details.php"><span><i class="fa fa-pencil"></i></span>Edit Details</a></li>
											<li><a href="more_photos.php"><span><i class="fa fa-pencil"></i></span>More Photos</a></li>
                                            
										</ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
									   <?php 
							include "db.php";
							$sql_1 = mysqli_query($dbc,"select * from member where phone='$uname' and password='$password' ");
							while($row_1 = mysqli_fetch_array($sql_1))
							{
								$date = date('d-m-Y', strtotime($row_1['dob']));
							//print "<img src='uploads/$row_1[11]' alt='' width='300px' height='300px'>";
							
							$id=$row_1[0];
							 echo $user_id=$row_1[28];
							
						?>
									
                                		<h2 class="dash-content-title"><span class="entry--meta-cat" style='font-size:20px'><a href="#"><font size='7'><?php echo $row_1[1]." ".$row_1[2]; ?></font></a> , <a href="#"><font size='3'><?php echo $row_1[7]; ?></font></a></span></h2>
                                        <div class="panel panel-default">
                                            										
                                            <div class="panel-body">
											
                                            	<div class="row">
												
                                                	<div class="col-sm-5 col-md-4 user-img">
                                                        <img src="uploads/<?php echo $row_1[11];?>" class="img-responsive" alt="user-img" / style='height:222px;width:222px'>
														
								                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-7 col-md-8  user-detail">
                                                       
														
														<ul class="list-unstyled">
                                                            <li><span>Name:</span> <?php echo $row_1[1]?> <?php echo $row_1[2]?></li>
                                                            <li><span>Date of Birth:</span> <?php echo $row_1[4]?></li>
                                                            <li><span>Gender</span> <?php echo $row_1[5]?></li>
															<li><span>Age</span> <?php echo $row_1[6]?></li>
                                                            <li><span>Religion:</span> <?php echo $row_1[8]?></li>
                                                            <li><span>Education:</span><?php echo $row_1[7]?></li>
															<li><span>Job:</span><?php echo $row_1[20]?></li>
															<li><span>Email:</span><?php echo $row_1[9]?></li>
                                                            <li><span>Phone:</span><?php echo $row_1[3]?></li>
                                                            <li><span>Address:</span> <?php echo $row_1[24]?></li>
                                                         
														                 
                                                        </ul>
														<br>
														<br>
														 <form action="upload_knj.php"  method="post" enctype="multipart/form-data">
													  
													  <input type='hidden' name='user_id' value="<?php echo $user_id;?>">
													  
						<h4>Note : To upload multiple images use ctrl button an mouse left click</h4>
                                                            <i>Select Images</i><input type="file"  name="files[]" multiple >
							<br>
								<input type="submit" class="btn btn-danger" name="submit" value="UPLOAD">
						</form>

						
													
													<p class="col-md-6"><button class="btn btn-danger"><a href="delete.php?id=<?php echo $id;?>">Delete Your profile from Matrimony</a>
													</button></p>	
                                                   	</div><!-- end columns -->
													
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
			<input type="text"  style="height: 35px" placeholder="Enter Father Name" name="father_name" id="father_name"  class="form-control" />
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
            <label for="recipient-name" class="control-label">Your Skin Color</label><br>
             <input type="text"  style="height: 35px" placeholder="Color" name="color"  id="color"  class="form-control" />
		</div>
		  
		  
		  
		  <div class="form-group">
		  <label for="recipient-name" class="control-label"> Rashi</label><br>
             <select class="form-control" name="rashi" id="rashi" placeholder="rashi"  required/>
                                        <option value="select">select</option>
                                        <option value="mesha(aries)">Mesha(Aries)</option>
							                   <option value="vrushabha(taurus)">Vrushabha(Taurus)</option>
							                   <option value="mithuna(gemini)">Mithuna(Gemini)</option>
							                   <option value="karkataka(cancer)">Karkataka(Cancer)</option>
							                   <option value="simha(leo)">Simha(leo)</option>
							                   <option value="kanya(virgo)">Kanya(virgo)</option>
							                   <option value="thula(libra)">Thula(Libra)</option>
							                   <option value="vrishchika(scorpio)">Vrishchika(Scorpio)</option>
							                   <option value="dhanu(sagittarius)">Dhanu(Sagittarius)</option>
							                   <option value="makara(capricorn)">Makara(Capricorn)</option>
							                   <option value="kumbha(aquarius)">kumbha(aquarius)</option>
							                   <option value="meena(pisces)">Meena(Pisces)</option>
											   </select>
		</div>
		  <div class="form-group">
		   <label for="recipient-name" class="control-label"> Nakshatra</label><br>
             <select class="form-control" name="nakshatra" id="nakshatra" placeholder="nakshatra" required/>
                                                <option value="select">select</option>
                                                <option value="ashwini">Ashwini</option>
							                    <option value="bharani">Bharani</option>
							                   <option value="krutthika">Krutthika</option>					                 
							                   <option value="rohini">Rohini</option>
							                   <option value="mrughashira">Mrughashira</option>
							                   <option value="arudra">Arudra</option>
							                   <option value="punarvasu">Punarvasu</option>
							                   <option value="pushya">Pushya</option>
							                   <option value="ashlesha">Ashlesha</option>
							                   <option value="makha(magha)">Makha(magha)</option>
							                   <option value="pubba(purva-palguni)">Pubba(purva-palguni)</option>
							                   <option value="uttara(uttara-palguni)">Uttara(uttara-palguni)</option>
							                   <option value="hasta">Hasta</option>
							                   <option value="chitta">Chitta</option>
							                   <option value="swathi">Swathi</option>
							                   <option value="vishska">Vishska</option>
							                   <option value="anuradha">Anuradha</option>
							                   <option value="jyeshta">Jyeshta</option>
							                   <option value="moola">Moola</option>
							                   <option value="purvashada">Purvashada</option>
							                   <option value="uttarashada">Uttarashada</option>
							                   <option value="shravana">Shravana</option>
							                   <option value="dhanishta(shravistha)">Dhanishta(shravistha)</option>
							                   <option value="shatabhisha(shataraka)">Shatabhisha(shataraka)</option>
							                   <option value="purvabhadra(purvabhadrapada)">Purvabhadra(purvabhadrapada)</option>
							                   <option value="uttarabhadra(uttarabhadrapada)">Uttarabhadra(uttarabhadrapada)</option>
							                   <option value="revathi">Revathi</option>
											   </select>
											  
                                        
		</div>
		
		  <div class="form-group">
            <label for="recipient-name" class="control-label">God</label><br>
             <input type="text"  style="height: 35px" placeholder="God" name="god"   id="god" class="form-control" />
		</div>
		<div class="form-group">
		<label for="recipient-name" class="control-label">Region</label><br>
            <select id="region" name="region" class="form-control">
			<option value="select">Region</option>
			<option value="north Karnataka">North Karnataka</option>
			<option value="south Karnataka">South Karnataka</option>
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
	  	  <button type="submit" class="btn btn-orange"  name="submit" id="submit" class="form-submit" value="register"onclick="submit()">Submit</button></form>
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
