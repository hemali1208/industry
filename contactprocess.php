
<?php require_once('connect.php');
	 
	  if(isset($_POST['send']))
{
 
	  $name=$_POST['name'];
	

		$email=$_POST['email'];
			$phone=$_POST['phone'];

			$address=$_POST['address'];

		$message=$_POST['message'];

	
	
	//echo $sql = "INSERT INTO contact_us (name,address,email,message,phone) VALUES ('$name','$address','$email','$message','$phone')";
	
	
	
	
	echo $q="insert into `contact_us`(name,email,phone,address,message)values('$name','$email','$phone','$address','$message')";
	$query=mysqli_query($conn,"insert into `contact_us`(name,email,phone,address,message)values('$name','$email','$phone','$address','$message')");
	 
						
				
		
}?>