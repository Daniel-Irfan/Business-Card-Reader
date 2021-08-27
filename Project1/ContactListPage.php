<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}
body{background-image: url(https://img.freepik.com/free-vector/gray-white-gradient-abstract-background_53876-60238.jpg?size=338&ext=jpg);background-size: 100%;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

	h2{ text-align: center;}
	table{ align: center;}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
	#logout{ float:right; }



/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
}
</style>
</head>
	


<body>
<?php
session_start();
$user=$_SESSION["userid"];
if(isset($user))
{
?>
<div class="topnav">
  <a href="ContactListPage.php">Contact List</a>
		<a href="AddList.php">Add Contact List</a>
		<a href="SearchName0.php">Search By Name/Company Name</a>
          <a href="SearchCategory.html">Search by Category</a>
	<a href="logout.php" id="logout">Logout</a>
</div>

<div class="content">
	
	
  <h2>Contact List</h2>
	<table align ="center" border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Images</td>
    <td>Name</td>
	  <td></td>
	  <td></td>
  </tr>
</centre>
<?php
	
	
	
$con=mysqli_connect("localhost","root","","userinfo");
$records = mysqli_query($con,"select * from images where status ='0' ORDER BY ID ASC"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
		
  <tr>
    <td><?php echo $data['id']; ?></td>
   <td><img src="<?php echo $data['image']; ?>" width="450" height="250"></td>
	  <td><?php echo $data['fname']; ?><br>
	  <?php echo $data['job']; ?><br>
	  <?php echo $data['company']; ?><br>
		  <?php echo $data['phone']; ?><br>
		  <?php echo $data['mobile']; ?><br>
	  <?php echo $data['email']; ?><br>
		   <?php echo $data['address']; ?><br>
		  <h4>Category: </h4>
		<?php echo $data['category']; ?></td>
	   <td><a href="testupdate.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
			
<?php
}
?>

</table>
<?php
}
 else
      
header("Location:LogInUser.html");


?>
</body>
</html>
</div>



