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

   


$id=$_GET['c_id'];

$query=mysqli_query($conn,"select *from  tbl_category WHERE  c_id='$id'");
$row=mysqli_fetch_array($query);
unlink("gallery/$row[image]");
mysqli_query($conn,"delete from tbl_category WHERE  c_id='$id'");

header("Location:display_category.php");



?>