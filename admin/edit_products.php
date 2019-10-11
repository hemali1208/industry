<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
    <?php
    include 'side_bar.php';
    include 'header.php';
   
	require_once('connect.php');
    include 'functions.php';
   
    $error = false;
	
	
	$update=$_GET['p_id'];

	$result=mysqli_query($conn,"select * from tbl_product where p_id='$update'");
	$row=mysqli_fetch_array($result);
	

    if (isset($_POST['save'])) 
	
	{

             
		$demo=$_POST['reupdate'];
		$c_id=$_REQUEST['c_id'];
		$p_name = $_REQUEST['p_name'];
		$price = $_REQUEST['price'];
		$description = $_POST['description'];
		
		
		
		
		$imgFile = $_FILES['imagee']['name'];
		$tmp_dir = $_FILES['imagee']['tmp_name'];
		$imgSize = $_FILES['imagee']['size'];

    $upload_dir = 'gallery/'; // upload directory
		if($imgFile)
		{
			
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    // rename uploading image
    $userpic = rand(1000, 1000000) . "." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
		{
        // Check file size '5MB'
        if ($imgSize < 5000000)
			{
            move_uploaded_file($tmp_dir, $upload_dir . $userpic);
			}
			else
			{
            $errMSG = "Sorry, your file is too large.";
			}
			} 
	else 
	{
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
	}
	else
	{
		$userpic=$row['imagee'];
	}
		

		$qry=mysqli_query($conn,"update tbl_product set `c_id`='$c_id',`p_name`='$p_name',`price`='$price',`description`='$description',`imagee`='$userpic' where `p_id`='$demo'");
	
	header("location:display_product.php");

        
        
       
    }
   
    ?>

    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Add Product </b> </h3>  

                    </div>
                </div>
                <div class="box">
                    
                    

                    <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >

                        <table class="table">
						
						<tr>
						<input type="hidden" class="form-control" id="" value="<?php echo $row['p_id']; ?>" name="reupdate">
  						</tr>	
						
						<tr>
                                <th width="30%"> <span class="error">*</span>Category Name :</th>
						<td><select name="c_id">
		<?php
		 $q="select * from tbl_category";
			
		$query=mysqli_query($conn,"select * from tbl_category");
		
		while($row1=mysqli_fetch_array($query))
		{
			
			$c_id =$row1['c_id'];
			$name =$row1['c_name'];
			?>
			<option value="<?php echo $c_id?>"<?php if ($row1['c_id']==$c_id){echo 'selected';}?>><?php echo $name;?></option>
			<?php
		}
		
		?>
		
		</select></td>
      
						</tr>		

					   
						
								
								
                          
						
						
						
						
                            
							<tr>
                                <th width="30%"> <span class="error">*</span>product Name :</th>

                                <td><input type="text" name="p_name" id="p_name" value="<?php echo $row['p_name']; ?>" class="form-control" placeholder="Enter Name" maxlength="100"/></td>
                            </tr>
							
							
							
							<tr>
                                <th width="30%"> <span class="error">*</span>product Price :</th>

                                <td><input type="text" name="price" id="price" value="<?php echo $row['price']; ?>" class="form-control" placeholder="Enter Name" maxlength="100"/></td>
                            </tr>
							

							
							
							
						        <tr><th>Product Description :</th>

                                <td>
                                    <textarea  name="description" id="description" style="width:90%;height:200px;"  class="form-control"  /><?php echo $row['description']; ?></textarea>
                                </td>
                            </tr>
							
							
							<th width="30%"> <span class="error">*</span>Image :</th>
							
							<td><img src="gallery/<?php echo $row['imagee']; ?>" height="100" width="100" />
							       <input type="file" name="imagee" id="imagee" class="form-control" />
							
							</td>
							
							
							
                            <tr>
							
							
                                <th>&nbsp;</th>

                                <td><input type="submit" name="save" class="btn btn-warning"  value="Save" /></td>

                            </tr>
                        </table>
                    </form>
                    <script type="text/javascript">

                       

                    </script>
                    

                </div>

            </div>

        </div>


    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                



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
