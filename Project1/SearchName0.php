<!doctype html>
<html>
<head>
<style type="text/css">
body{background-image: url(https://img.freepik.com/free-vector/gray-white-gradient-abstract-background_53876-60238.jpg?size=338&ext=jpg);background-size: 100%;}
h3 {text-align: center;}

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
<meta charset="utf-8">
<title>Test</title>
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
<form action="searchname.php" method="POST" enctype="multipart/form-data">
<h3>Search by Name/Company Name</h3>

 Enter Contact Name/Company Name: 

<input name="fname" type="text"  required==$0>

<input type="submit" name="submit" value="Search">
</form>
</center>

</body>
</html>

