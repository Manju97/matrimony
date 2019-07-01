<?php
session_start(); 
ini_set('max_execution_time', 900); //300 seconds = 5 minutes

if($_SESSION['status']!="Active")
{
    header("location:login.php");
}
else
{
?>

<!doctype html>
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
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
	<style>
	.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th
	
	
	
	

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid black;
	border-color : black;
	    border-top: 1px solid #4cb53a;
		    border-top: 1px solid #4cb53a;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid black;
	border-bottom: 1px solid black;
}

th {
	text-align : center;
	color : Black;

	border-color : black;
	 border-top: 1px solid black;
	border-bottom: 1px solid black;
}

tr:nth-child(even){background-color:}
.table .thead-dark th {
    color: #fff;
    background-color: black;
    border-color: black;
	border: 1px solid #5f0404;
</style>
    <body>
    
        <!--====== LOADER =====-->
    
        
        
        <!--============= TOP-BAR ===========-->
       
            <div class="container">
               
            </div><!-- end container -->
      
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
                            <a href="index.html"><img src="images/logo1.png" ></a>
                        </div><!-- end navbar-header -->
                    
                        <div class="collapse navbar-collapse" >
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active"><a href="logout.php" class="dropdown-toggle" >Logout<span>&nbsp <i class="fa fa-sign-out"></i></span></a>
                                    		
                                </li>
                               
                                <li class="dropdown active"><a href="contact.html" class="dropdown-toggle" >Contact Us<span>&nbsp <i class="fa fa-envelope"></i></span></a></li>
                                  
                                                                                               
                            </ul>
                        </div>
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
                        
                            <a href="logout.php" class="list-group-item"><span><i class="fa fa-sign-out link-icon"></i></span>Log-out<span><i class="fa fa-chevron-down arrow"></i></span></a>
                          
                            <a href="contact.html" class="list-group-item"><span><i class="fa fa-globe link-icon"></i></span>Contact Us<span><i class="fa fa-chevron-down arrow"></i></span></a>
    
    
                            
                         
                        </div><!-- end list-group -->
                    </div><!-- end main-menu -->
                </div><!-- end mySidenav -->
            </div><!-- end sidenav-content -->
        <!-- end sidenav-content -->
        
        <br><br>
        <!--================ PAGE-COVER ===============-->
    <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">PROFILES</h1>
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
		<div class="dashboard-wrapper">
                            	<div class="row">
                               <label></label>
                                	<div class="col-xs-1 col-sm-1 col-md-1 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="register_details1.html"> <button    data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" 
									onclick="abc1()" style='height:40px'>  <i class="glyphicon glyphicon-plus"></i> </button>
									<br><br>
									Add Profiles</a></li>
                                                                                     
                                            <li><a href="logout.php"><span><i class="fa fa-sign-out"></i></span>LOGOUT</a></li>
											<li><a href="message.php"><span><i class="fa fa-heart"></i></span>MESSAGES</a></li>
                                            <li><a href="viewprofile.php"><span><i class="fa fa-sign-out"></i></span>profiles</a></li>
                                        </ul>
                                    </div><!-- end columns -->
		  
          
                
                   
					<br><h3 style="text-align:center;color:#bf8378; font-family:cursive;"></h3> 
		
                 <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-container">
				<div style="overflow-x:auto;">

                   <table class="table table-bordered table-dark" size="100">
					
                     <thead class="thead-dark">
					 <div style="overflow-y:auto;">
						<tr>
							<th scope="col">Sl No</th>
							<th scope="col">Name</th>					
							<th scope="col"><span>DOB</span></th>
							<th scope="col">Age</th>
							<th scope="col">Gender</th>
							<th scope="col">Religion</th>
							<th scope="col">Qualification</th>
							<th scope="col">job</th>
							<th scope="col">Mobile</th>
							<th scope="col">password</th>
							<th scope="col">Email</th>	
                            <th scope="col">Reg-No</th>							
							<th scope="col">Photo</th>
							<th scope="col">status</th>
							
							
						
							<!-- <th scope="col">Status</th> -->
						</thead>
						
						<tr>
						
							<?php
							
							include "db.php";
							
							$sl_no = 1;
						  
                            $sql=mysqli_query($dbc,"select * from member where fname!=''");
								
                            while($row=mysqli_fetch_array($sql))
                            {
								$id=$row[0];
								$date = date('d-m-Y', strtotime($row[5]));
									
								print "<td>$sl_no</td>
								<td>$row[1].$row[2]</td>
								<td>$date</td>
								<td>$row[6]</td>
								<td>$row[4]</td>
								<td>$row[8]</td>
								<td>$row[7]</td>
								<td>$row[20]</td>
								<td>$row[3]</td>
								<td>$row[10]</td>
								<td>$row[9]</td>
								<td>$row[28]</td>
								
								<td align='center'><img src='uploads/$row[11]' alt='' width='50px' height='50px'></td>";
								?>
								<td><a href="delete.php?id=<?php echo $id;?>"><button type="button" class="btn btn-danger">Delete</button>
</a></td>
								</tr>
							   


								</tr>
								<?php
								$sl_no++;
								
							}
							
							?>
						</div>
					</table> 
					</div>
                </div></div>
                </div>
                        <!-- .col-md-6 end -->
            </div>
                    <!--/.row-->
                </div><!--/.col-md-6-->
            </div><!--/.container-->
        </div><!--/.contact-us-area-->
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
                            	<li><a href="#">Design & Developed by <a href="http://bsctechnologies.com/">BSA Technologies
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
       
   
        
    
<?php
}
?>