<?php
session_start( );
if (isset($_SESSION["userid"])) 

{
session_destroy( );
echo '<script type="text/javascript"> alert("You Have Logged Out!"); window.location.href = "LogInUser.html"; </script>';
}
else
	echo '<script type="text/javascript"> alert("Error Log Out!"); window.location.href = "LogInUser.html"; </script>';
?>