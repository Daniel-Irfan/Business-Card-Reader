<!doctype html>
<html>
<head>
<style type="text/css">
body{background-image: url(https://img.freepik.com/free-vector/gray-white-gradient-abstract-background_53876-60238.jpg?size=338&ext=jpg);background-size: 100%;}
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
	#logout{ float:right; }

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
h2 {text-align: center;}

div {text-align: center;}


</style>
<meta charset="utf-8">
<title>View </title>
</head>

	<centre>
	<div class="topnav">
        <a href="ContactListPage.php">Contact List</a>
		<a href="AddList.php">Add Contact List</a>
		<a href="SearchName0.php">Search By Name/Company Name</a>
          <a href="SearchCategory.html">Search by Category</a>
      <a href="logout.php" id="logout">Logout</a>
        
          
         
      </div>	
<h2>All Records</h2>

<table align ="center" border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Images</td>
    <td>Name</td>
	  
  </tr>
</centre>
 <?php
$con=mysqli_connect("localhost","root","","userinfo") or die("Cannot connect to server.".mysqli_error($con));
$id=$_POST["fname"];

$records = mysqli_query($con,"select * from images where fname OR company like '%".$id."%'"); // fetch data from database

while($data = mysqli_fetch_array($records)){
?>
		<centre>
  <tr>
    <td><?php echo $data[0];  ?></td>
   <td><img src="<?php echo $data[9]; ?>" width="450" height="250"></td>
	  <td><?php echo $data[1]; ?><br>
	  <?php echo $data[2]; ?><br>
	  <?php echo $data[3]; ?><br>
	  <?php echo $data[4]; ?><br>
	  <?php echo $data[5]; ?><br>
	  <?php echo $data[6]; ?><br>
	  <?php echo $data[7]; ?><br>
	    <?php echo $data[8]; ?>
	  <td><a href="testupdate.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td></td></td>
  </tr>	
			</centre>
<?php
										   }

?>

</table>
<body>
</body>
</html>
