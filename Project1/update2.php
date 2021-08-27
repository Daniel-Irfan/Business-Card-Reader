<html>
<body style="background:url(https://cdn.hipwallpaper.com/i/92/14/r4Xpi8.jpg);background size:100%;">
<?php
$con=mysqli_connect("localhost","root","","userinfo") or die("Cannot connect to server.".mysqli_error($con));
	$id = $_POST['id'];
$fname=$_POST["fname"];
$job=$_POST["job"];
$company=$_POST["company"];
$phone=$_POST["telephone"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$email=$_POST["email"];
$checkbox=$_POST['checkbox'];
	$chk="";
	foreach($checkbox as $chk1){
		$chk.=$chk1.",";
	}
$update_sql="UPDATE images SET  job = '$job', company = '$company',phone='$phone',mobile='$mobile',address='$address', email = '$email',category='$chk' ,fname ='$fname' WHERE id ='$id'";
$sql_result=mysqli_query($con,$update_sql);
if($sql_result)
{
		?>
    	<script type="text/javascript">  
	 alert("Data Updated Successfully !");
		window.location.href = "ContactListPage.php";
		</script>;// alert message
<?php
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
?>
</body>
</html>
