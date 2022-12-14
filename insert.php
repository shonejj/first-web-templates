<?php
include("dbconnect.php");

extract($_POST);
if(isset($_POST['btn2']))
{

$file_name=$_FILES['img']['name'];
$file_loc=$_FILES['img']['tmp_name'];
$folder="upload/";

$path=move_uploaded_file($file_loc,$folder.$file_name);
$qry2=mysqli_query($conn,"insert into product values('','$name','$discription','$price','$file_name')");
if($qry2)
{
echo '<script>alert("product uploaded succesfully")</script>';
}
}







?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>admin home</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.flex-container {
  display: flex;
  flex-wrap: nowrap;
  background-color: DodgerBlue;
  justify-content: space-around;
  align-items: center;
}
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}

#myDiv {
  display: none;
  text-align: center;
}

h1
{
color:#003366;
}
pr
{
color:#000000;
}

body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("upload/bg1.png");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
</head> 
<body>
<div class="flex-container">
  <div><h3><a href="home.php">home</a></h3></div>
  <div><h3><a href="insert.php">upload</a></h3></div>
   <div><h3><a href="view.php">view</a></h3></div>
  <div><h3><a href="login.php">logout</a></h3></div> 
</div>

</br>
<div style="text-align:center">  
<form method="post" action="#" enctype="multipart/form-data" style="background-image:url(upload/bg2.png);height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;" >
<p>
product name : 
</br>
<input type="text" placeholder="enter the product name" name="name" required />
</br>
product discription :
</br>
<input type="text" placeholder="discribe your product" name="discription" required />
</br>
price:
</br>
<input type="text" placeholder="enter the price in numbers " name="price" required />
</br>
image:
<input type="file" name="img"/>
</p>
<input type="submit" name="btn2" />
</form>
</div>
</p>
</div>
</body>
</html>
