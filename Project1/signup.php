<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","userinfo");
$name=$_POST["name"];
$pass=$_POST["old"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$query = "select * from user where username='$name'";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)>0)
{
 die('<script type="text/javascript"> alert("Username already existed!"); window.location.href = "SignUpUser.html"; </script>');  // when error occur
}
else
{
$sql_state="INSERT INTO user VALUES('$name','$pass','$email','$phone')";
$insert_sql=mysqli_query($con,$sql_state);

if($insert_sql)
echo '<script type="text/javascript"> alert("Your Account has been Created!"); window.location.href = "LogInUser.html"; </script>';
else
echo '<script type="text/javascript"> alert("Error in creating your account!"); window.location.href = "SignUpUser.html"; </script>';
}
?>

</body></html>