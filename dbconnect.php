<?php 
$servername="localhost";
$username = "root";
$password = "";
$mydb ="ecommerce";

  $conn = mysqli_connect($servername,$username,$password,$mydb);
if(!$conn){
die("cant reach database" .mysqli_connect_error());
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
