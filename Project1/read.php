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
        <a href="1.php">Contact List</a>
		<a href="AddList.php">Add Contact List</a>
	<a href="SearchName0.php">Search By Name/Company Name</a>
	<a href="SearchCategory.html">Search by Category</a>
        <a href="logout.php" id="logout">Logout</a>
          
           
      </div>
<center>
<?php
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];

	
move_uploaded_file($file_tmp,"images/".$file_name);

echo "<h3>Add New Contact</h3>";
echo '<img src="images/'.$file_name.'" style="width:25%">';
	
shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\wamp\www\Project\images\\'.$file_name.'" out');

echo "<br><h3>Scanned Text</h3><br><pre>";

$myfile = fopen("out.txt", "r") or die("Unable to open file!");

echo fread($myfile,filesize("out.txt"));

fclose($myfile);
echo "</pre>";

	


}

	
?>
<!doctype html>
<html>
<head>
<style type="text/css">
body{background-image: url(https://img.freepik.com/free-vector/gray-white-gradient-abstract-background_53876-60238.jpg?size=338&ext=jpg);background-size: 100%;}
h2 {text-align: center;}
textarea {
    padding: 10px;
    max-width: 100%;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
	box-shadow: 1px 1px 1px #999;}
	
	
div {text-align: center;}
</style>
<meta charset="utf-8">
<title>Add New Contact Page</title>
</head>

<body>
<form method= "post"   action="AddTEst.php"   enctype="multipart/form-data">	
Name: <br>
<input name = "fname" type="text" size= "50"><br>
Job Tittle:<br>
<input name = "job" type="text" size= "50"><br>
Company Name:<br>
<input name = "company" type="text" size= "50"><br>
Telephone: <br>
<input name = "telephone" type="text" size= "50"><br>
Mobile: <br>
<input name = "mobile" type="text" size= "50"><br>
Address: <br>
	<textarea name = "address" type="textarea" rows="3" cols="30"></textarea><br>
Email Adress: <br>
<input name = "email" type="text" size= "50"><br>
Category:<br>
Smart Transportation & Mobility
<input name="checkbox[]" type="checkbox" value="Smart Transportation & Mobility">
<br>Smart Home & Environment
<input name="checkbox[]" type="checkbox" value="Smart Home & Environment">
<br>Smart Government Services
<input name="checkbox[]" type="checkbox" value="Smart Government Services">
<br>Smart Infrastructure & Utilities
<input name="checkbox[]" type="checkbox" value="Smart Infrastructure & Utilities">
<br>Smart Safety & Security
<input name="checkbox[]" type="checkbox" value="Smart Safety & Security">
 <br>Smart Economy
<input name="checkbox[]" type="checkbox" value="Smart Economy">
  <br>Smart Community
<input name="checkbox[]" type="checkbox" value="Smart Community"><br>

	<h4>Select image to save :</h4></br>
<input type="file" name="image" required><br><br>
<input type="submit" name="submit" value="Upload"  button onclick="view.php">



</form>	
</body>
</html>
