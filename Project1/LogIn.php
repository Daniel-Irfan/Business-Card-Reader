<!DOCTYPE html> 
<html>

<head>
</head>
<body>
<?php
$con=mysqli_connect("localhost", "root", "","userinfo") or die("Cannot connect to server");
$username=$_POST["name"];
$password=$_POST["password"];
$sql="Select * from user where username='$username'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)== 0)
echo '<script type="text/javascript"> alert("Wrong Username Entered!"); window.location.href = "LogInUser.html"; </script>';  // when error occur
else
{
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
if($row[password]==$password)
{
session_start();
$_SESSION["userid"]= $username;

header("Location:ContactListPage.php");
}
else
echo '<script type="text/javascript"> alert("Wrong Password Entered!"); window.location.href = "LogInUser.html";</script>';  // when error occur
}
?>
</body>
</html>