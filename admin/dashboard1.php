

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
<script>
$(document).ready(function() {
  $("#basic").validate({
    rules: {
		c_name:{
        required: true
		},
		
		
      },
	   messages : {
		c_name:{
        required: "please enter category name"
		},
		
		 
      }
  });
});

</script>

    <?php
	
    include 'side_bar.php';
    include 'header.php';
    //include 'connect.php';
	require_once('connect.php');
    include 'functions.php';
    //include 'allfunction.php';
	//$result =mysqli_query($conn,"select * from tbl_category");
    $error = false;
	//$result=mysqli_query($conn,"select * from tbl_category  order by c_id DESC");
?>
    <!-- END PAGE CONTENT WRAPPER -->                                

		  <div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- industry grid wrapper -->
                    <div class="industry-grid-wrapper">
                        <div class="row">
						<?php
                        
                       // $query = "select * from tbl_product";
                       		//                $page = $_GET['c_id'];

                        
			//	$result = mysqli_query($conn, "SELECT * FROM `tbl_product` where p_id='$page'");
			$result = mysqli_query($conn, "SELECT * FROM `tbl_product`");
                        while ($row = mysqli_fetch_array($result)) {

							$p_id=$row['p_id'];
							$p_name=$row['p_name'];
							$price=$row['price'];
							$description = $row['description'];
							$imagee = $row['imagee'];
							
            ?>
                              <div class="col-md-6 col-md-12">
                                <div class="industry-two-slider__single-item industry-two-slider__single-item--style3 section-space--bottom--60">
                                    
                          
			
		
				<!--<div class="col-md-4 agileits_services_grid">-->
				
				                              <div class="col-md-4 col-md-12">
						<div class="box>"
                 <div class="industry-two-slider__single-item__content">
						<h3   class="title"><?php echo $p_name; ?></h3>
						<p class="subtitle"> <?php echo $price; ?> </p>
						<p class="subtitle"> <?php echo $description; ?> </p>
				
				</div>
				
				</div>
					 
					  </div>
					  </div>
					  
					   <?php }?>
					</div>
					</div>
                </div>
            </div>
        </div>
    </div>
	


    <!-- END PAGE CONTENT -->
</div>

<?php
include 'footer.php';
?>


<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>


<script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>    


<!--  Datepicktime js   -->
<script src="js/jquery.datetimepicker.full.js"></script>
<!-- END PAGE PLUGINS -->
<script>
 $("#DevloperDate").datepicker();
                        $("#StartDate").datepicker();
                        $("#EndDate").datepicker();
             $('#Hours').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
});
                        </script>
<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>



<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

<script type="text/javascript">
//<![CDATA[
    bkLib.onDomLoaded(function () {

        new nicEditor({fullPanel: true, maxHeight: 200}).panelInstance('area1');
       
    });
    //]]>
</script>

<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->



</body>
<script type="text/javascript">
//<![CDATA[
    $(document).ready(function ()

    {


        $("#form_register").validate(
                {

                    rules: {
                           'DevloperDate': {

                            required: true,

                        },
                        'UserName': {

                            required: true,
                            
                        },
                        
                        'Password': {

                            required: true,

                        },
                        'u_email': {

                            required: true,

                        },
                        'Phone': {

                            required: true,

                        }
                        
                        
    


                    },

                    messages: {

                        'UserName': {

                            required: "The UserName is mandatory!",

                        },

                        'Password': {

                            required: "The Password is mandatory!",

                        },

                        'u_email': {

                            required: "The Email is mandatory!",

                        },
                        'Phone': {

                            required: "The Phone is mandatory!",

                        },

                        'Placements': {

                            required: "The placements is mandatory!",

                        },
                        'Hours': {

                            required: "Enter today's working hours is mandatory!",

                        }


                    }

                });

    });

//]]>
</script>

</html>

<?php //ob_end_flush(); ?>
