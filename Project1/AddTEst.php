

<?php

$con=mysqli_connect("localhost","root","","userinfo");

if(isset($_POST["submit"]))
{
$Fname=$_POST['fname'];
	
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
	
	$checkbox=$_POST['checkbox'];
	$chk="";
	foreach($checkbox as $chk1){
		$chk.=$chk1.",";
	}
	
 $check = mysqli_query($con,"insert into images(fname,job,company,phone,mobile,address,email,category,image) values ('$_POST[fname]','$_POST[job]','$_POST[company]','$_POST[telephone]','$_POST[mobile]','$_POST[address]','$_POST[email]','$chk','$dst_db')");  // executing insert query
	}

  
		
  
		
    if($check)
    {
		?>
    	<script type="text/javascript">  
	 alert("Data Inserted Successfully !");
		window.location.href = "ContactListPage.php";
		</script>;// alert message
<?php
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
	


?>







