<?php
session_start(); 
ini_set('max_execution_time', 900); //300 seconds = 5 minutes

if($_SESSION['status']!="Active")
{
    header("location:register_details.php");
}
else
{
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Vamlmiki Matrimony</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
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
        
        <!--Jquery UI Stylesheet-->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
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
        	<div id="hotel-grid" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                                        
                            <div id="search" class="tab-pane in active">
                        <form action="search.php" method='post'>	
                            <div class="side-bar-block filter-block">
							 
                                <h3>Sort By Filter</h3>
                                <p>Find your match</p>
								
                                
                                   
                                
                                <label style='color:white'>I'm looking for a</label>
                                <select id="gender" name="gender" class="form-control">
                                <option value="">Select</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                 </select>
                           
                                <!-- end panel-collapse -->
                                
                                    
                                    <div class="panels-group">
                                       <div class="form-group left-icon">
									     <label style='color:white'>Age</label>
                                                            <select id="toage" name="age" class="form-control" width="100px">
											  <option value="">Select</option>
											  <option value="18">18</option>
											  <option value="19">19</option>
											  <option value="20">20</option>
											  <option value="21">21</option>
											  <option value="22">22</option>
											  <option value="23">23</option>
											  <option value="24">24</option>
											  <option value="25">25</option>
											  <option value="26">26</option>
											  <option value="27">27</option>
											  <option value="28">28</option>
											  <option value="29">29</option>
											  <option value="30">30</option>
											  <option value="31">31</option>
											  <option value="32">32</option>
											  <option value="33">33</option>
											  <option value="34">34</option>
											  <option value="35">35</option>
											  <option value="36">36</option>
											  <option value="37">37</option>
											  <option value="38">38</option>
											  <option value="39">39</option>
											  <option value="40">40</option>
											  <option value="41">41</option>
											  <option value="42">42</option>
											  <option value="43">43</option>
											  <option value="44">44</option>
											  <option value="45">45</option>
											  <option value="46">46</option>
											  <option value="47">47</option>
											  <option value="48">48</option>
											  <option value="49">49</option>
											  <option value="50">50</option>
											  <option value="51">51</option>
											  <option value="52">52</option>
											  <option value="53">53</option>
											  <option value="54">54</option>
											  <option value="55">55</option>
											  <option value="56">56</option>
											  <option value="57">57</option>
											  <option value="58">58</option>
											  <option value="59">59</option>
											  <option value="60">60</option>
											  <option value="61">61</option>
											  <option value="62">62</option>
											  <option value="63">63</option>
											  <option value="64">64</option>
											  <option value="65">65</option>
											  <option value="66">66</option>
											  <option value="67">67</option>
											  <option value="68">68</option>
											  <option value="69">69</option>
											  <option value="70">70</option>
										</select>
                                             
                                      </div>
                                        
                                    </div><!-- end panel-default -->
                                    
                                    <div class="panels-group">
                                       <div class="form-group left-icon">			
                                            <label style='color:white'>Age</label>
                                                            <select id="fromage" name="fromage" class="form-control" width="100px">
											  <option value="Select">Select</option>
											  <option value="18">18</option>
											  <option value="19">19</option>
											  <option value="20">20</option>
											  <option value="21">21</option>
											  <option value="22">22</option>
											  <option value="23">23</option>
											  <option value="24">24</option>
											  <option value="25">25</option>
											  <option value="26">26</option>
											  <option value="27">27</option>
											  <option value="28">28</option>
											  <option value="29">29</option>
											  <option value="30">30</option>
											  <option value="31">31</option>
											  <option value="32">32</option>
											  <option value="33">33</option>
											  <option value="34">34</option>
											  <option value="35">35</option>
											  <option value="36">36</option>
											  <option value="37">37</option>
											  <option value="38">38</option>
											  <option value="39">39</option>
											  <option value="40">40</option>
											  <option value="41">41</option>
											  <option value="42">42</option>
											  <option value="43">43</option>
											  <option value="44">44</option>
											  <option value="45">45</option>
											  <option value="46">46</option>
											  <option value="47">47</option>
											  <option value="48">48</option>
											  <option value="49">49</option>
											  <option value="50">50</option>
											  <option value="51">51</option>
											  <option value="52">52</option>
											  <option value="53">53</option>
											  <option value="54">54</option>
											  <option value="55">55</option>
											  <option value="56">56</option>
											  <option value="57">57</option>
											  <option value="58">58</option>
											  <option value="59">59</option>
											  <option value="60">60</option>
											  <option value="61">61</option>
											  <option value="62">62</option>
											  <option value="63">63</option>
											  <option value="64">64</option>
											  <option value="65">65</option>
											  <option value="66">66</option>
											  <option value="67">67</option>
											  <option value="68">68</option>
											  <option value="69">69</option>
											  <option value="70">70</option>
										</select>
                                             
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
									
									 <div class="panels-group">
                                       <div class="form-group left-icon">	
                                          <label style='color:white'>Qualification</label>        
                                              <select class="form-control" name="education" id="education" />
											<option value="select">select</option>
							                    <option value="10th">10th</option>
							                   <option value="PUC">PUC</option>
							                   <option value="ITI">ITI</option>
							                   <option value="Diploma">Diploma</option>
							                   <option value="BA">BA</option>
							                   <option value="MA">MA</option>											   
							                   <option value="Bsc">Bsc</option>
											   <option value="Msc">Msc</option>
							                   <option value="BCA">BCA</option>
							                   <option value="MCA">MCA</option>
							                   <option value="BCom">BCom</option>
							                   <option value="Mcom">Mcom</option>
							                   <option value="MBA">MBA</option>
							                   <option value="Bed">Bed</option>											   
							                   <option value="Lawyer">Lawyer</option>
							                   <option value="Medical">Medical</option>
							                   <option value="BE">BE</option>
							                  
											   <option value="Fashion Designing">Fashion Designing</option>
											   <option value="Others">Others</option>
											   </select>
                                         
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
									
									<div class="panels-group">
                                       <div class="form-group left-icon">					
                                                              <label style='color:white'>Job</label>
                                                             <select class="form-control" name="job" id="job">
                                                               <option value="Select">Select</option>
																 <option value="Farmer">Farmer</option>
															   <option value="Business">Business</option>
															   <option value="Government">Government</option>
															   <option value="IT">IT</option>
															   <option value="Lawyer">Lawyer</option>
															   <option value="Doctor">Doctor</option>
															   <option value="Engineer">Engineer</option>
															   <option value="Others">Others</option>
															   <option value="Teacher">Teacher</option></select>
															</select>
                                        </div><!-- end panel-collapse -->
                                    </div><!-- end panel-default -->
									
									<div class="panels-group">
                                       <div class="form-group left-icon">				
                                            <label style='color:white'>Region</label>
                                                             <select class="form-control" name="region">
                                                                <option value="Select">Select</option>
                                                                <option value="North Karnataka">North Karnataka</option>
                                                                <option value="South Karnataka">South Karnataka</option>
                                                              </select>
                                    </div><!-- end panel-default -->
                                    
                                </div><!-- end panel-group -->
                                
                              <center><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                                <button type='submit' class="btn btn-orange">Search</button>
                                            </div><!-- end columns --></center>
                            </div><!-- end side-bar-block -->
                            
                        </form>
						</div><!-- end side-bar-block -->
                            
                            <!-- end row -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            <div class="row">
                    
                            
                        	<?php 
							include "db.php";
							
							/* $gender=$_POST['looking'];
							$toage=$_POST['toage'];
							$fromage=$_POST['fromage'];
							$education=$_POST['education'];
							$job=$_POST['job'];
							$region=$_POST['region'];
						 */
							
							
							$sql_1 = mysqli_query($dbc,"select * from member where fname!=''");
							
							
							while($row_1 = mysqli_fetch_array($sql_1))
							{
								
								$user_id=$row_1[28];
								$date = date('d-m-Y', strtotime($row_1['dob']));
							//	print "<img src='uploads/$row_1[11]' alt='' width='300px' height='300px'>";
							
							
						?>
                                <div class="col-md-4">
								
						       
								
                            		<div class="grid-block main-block f-grid-block">
                                    	
                                            <div class="main-img f-img">
											
											<?php
											if($row_1[11]!="")
											{
											?>
											
                                                <img src="uploads/<?php echo $row_1[11]; ?>" class="img-responsive"  style='height:200px;width:222px'>
												
												<?php
											}
											else
											{
												?>
												<img src="images/no-image.png" class="img-responsive"  / style='height:200px;width:222px'>
												<?php
											}
											?>
											
												
                                            </div><!-- end f-img -->
                                       
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price"><span class="pkg"><?php echo $row_1[1]?> <?php echo $row_1[2]?></span></li>
                                        </ul>
                                        
                                        <div class="block-info f-grid-info">
                                        	<div class="f-grid-desc">
                                              
										<b>Date of Birth : </b></span><?php echo $row_1[4]?>
										<br><br>
										<b>Age : </b></span> <?php echo $row_1[6]?>
										<br><br>
										<b>Gender : </b></span> <?php echo $row_1[5]?>
										<br><br>
										<b>Religion : </b></span> <?php echo $row_1[8]?></
										<br><br><br>
										<b>Qualification : </b></span> <?php echo $row_1[7]?>
										<br><br>
										<b>Job : </b></span> <?php echo $row_1[20]?>
										<br><br>
										<a href="user_more_photo.php?user_id=<?php echo $user_id;?>" class="btn btn-info">View More Photos</a>
										<br><br>
                                            	<a href="#" class="btn btn-orange btn-block btn-lg">View More Details</a><br>
										
										
                                            </div><!-- end f-grid-desc -->
                                            
                                           
                                            <!-- end grid-btn -->
                                        </div><!-- end f-grid-info -->
                                    </div><!-- end f-grid-block -->
									  
                            
									
                                </div><!-- end columns -->
                                
                               <?php
							}

}
							?>
                    
                        
                  
            </div><!-- end row -->
                            
                           <!-- end pages -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end hotel-grid -->
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

