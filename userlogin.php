<?php
include("dbconnect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>user home</title>

<style>


.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: DodgerBlue;
  justify-content: space-between;
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


.flex
{
display:flex;
column-gap:30px;
flex-wrap: wrap;

}


.flexx
{
width:200px;
height:200px;
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
  background-color:#CCCCCC
}

</style>
</head> 
<body>

<div class="flex-container">
   <div><h3><a href="userlogin.php">home</a></h3></div>
   <div><h3><a href="viewuser.php">view</a></h3></div>
   <div><h3><a href="cart.php">cart</a></h3></div>
   <div><h3><a href="login.php">logout</a></h3></div> 
</div>


<div class="bg">
<div class="header">.</div>
<p>
<h1 align="center"> user home page </h1>
</br>
<h1> user details </h2>
</br>

<h2><?php
echo "welcome ".$_SESSION['uname']; 
?>

</br>
</div>


</body>
</html>
