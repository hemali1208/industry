<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
    <?php
    include 'side_bar.php';
    include 'header.php';
    //include 'connect.php';
	require_once('connect.php');
    include 'functions.php';
    //include 'allfunction.php';
    $error = false;
	
	


		$demo=$_GET['id'];

	$result=mysqli_query($conn,"select * from tbl_service  where id='$demo'");
	$row=mysqli_fetch_array($result);
	$isstatus=$row['isstatus'];
	if($isstatus==1)
	{
		$isstatus=0;
	}
	else
	{
		$isstatus=1;
	}
    
             
		
$qry=mysqli_query($conn,"update tbl_service set `isstatus`='$isstatus' where `id`='$demo'");
	
	header("location:display_service.php");
		
		
?>