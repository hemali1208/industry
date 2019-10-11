<!DOCTYPE html>
<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['uname'])) {
    header('location:index.php');
}
 $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Travels</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="logo-tops.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/bvalidator.css"/>


        <!-- EOF CSS INCLUDE -->  
        <!-- this query is for datepeeker  -->
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="dashboard.php"><img src="" width="30" absalign="middle"/> NF Enginerring </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">

                        </a>
                    </li>
					
					
                   <li class=" <?php echo ($activePage == "dashboard" ? "active" : ""); ?>">
                        <a href="dashboard.php"><span class="fa fa-home"></span> <span class="xn-text">Dashboard</span></a>

                    </li>
					
					
					<li class=" <?php echo ($activePage == "name" ? "active" : ""); ?>">
                        <a href="name.php"><span class="fa fa-home"></span> <span class="xn-text">what we do</span></a>

                    </li>
                   
					
					<li class=" <?php echo ($activePage == "display_name" ? "active" : ""); ?>">
                        <a href="Display_name.php"><span class="fa fa-home"></span> <span class="xn-text">Display</span></a>

                    </li>
                   
					
                    <li class=" <?php echo ($activePage == "add_service" ? "active" : ""); ?>">
                        <a href="add_service.php"><span class="fa fa-plus"></span> <span class="xn-text">Add Service</span></a>

                    </li>
					<li class=" <?php echo ($activePage == "display_service" ? "active" : ""); ?>">
                        <a href="display_service.php"><span class="fa fa-list"></span> <span class="xn-text">Display Service </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "add_gallery" ? "active" : ""); ?>">
                        <a href="add_gallery.php"><span class="fa fa-plus"></span> <span class="xn-text">Gallery  </span></a>

                    </li>
					
					<li class=" <?php echo ($activePage == "display_gallery" ? "active" : ""); ?>">
                        <a href="display_gallery.php"><span class="fa fa-list"></span> <span class="xn-text">Display Gallery </span></a>
            
                   </li>


				   
					
					
					
					
					<li class=" <?php echo ($activePage == "display_inquiry1" ? "active" : ""); ?>">
                        <a href="display_inquiry1.php"><span class="fa fa-home"></span> <span class="xn-text">Service Inquiry</span></a>
					</li>	
							
					
					<li class=" <?php echo ($activePage == "display_inquiry" ? "active" : ""); ?>">
                        <a href="display_inquiry.php"><span class="fa fa-list"></span> <span class="xn-text">List Inquiry </span></a>

                    </li>
					
					<li class=" <?php echo ($activePage == "contact" ? "active" : ""); ?>">
                        <a href="contact.php"><span class="fa fa-list"></span> <span class="xn-text">Contact Us </span></a>

                    </li>
					
					
					
					<li class=" <?php echo ($activePage == "ChangePassword" ? "active" : ""); ?>">
                        <a href="ChangePassword.php"><span class="fa fa-list"></span> <span class="xn-text">Change Password</span></a>

                    </li>
					
					
					
                   
                        

                    </li>
                   
              <!--
                    <li>
                        <a href="change_pass.php"><span class="fa fa-files-o"></span> <span class="xn-text"> Change Password </span></a>
                    </li>
-->



                </ul>
                <!-- END X-NAVIGATION -->
            </div>