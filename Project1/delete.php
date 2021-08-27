<?php

$con=mysqli_connect("localhost","root","","userinfo") or die("Cannot connect to server.".mysqli_error($con));

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"update images set status='1' where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:ContactListPage.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
