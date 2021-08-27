<!doctype html>
<html>
<head>
<style type="text/css">
body{background-image: url(https://img.freepik.com/free-vector/gray-white-gradient-abstract-background_53876-60238.jpg?size=338&ext=jpg);background-size: 100%;}
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}
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
#logout{ float:right; }
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
h2 {text-align: center;}
td {text-align: center;}
div {text-align: center;}
table {text-align: center;}

</style>
<meta charset="utf-8">
<title>View </title>
</head>

<body>
<div class="topnav">
        <a href="ContactListPage.php">Contact List</a>
		<a href="AddList.php">Add Contact List</a>
	<a href="SearchName0.php">Search By Name/Company Name</a>
          <a href="SearchCategory.html">Search by Category</a>
	<a href="logout.php" id="logout">Logout</a>
      
        
          
            
      </div>

<center>
<h3>Add New Contact</h3>
<form action="read.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image" required>
<input type="submit"/>


</form>
</center>

</body>
</html>
