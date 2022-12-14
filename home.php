<?php
include("dbconnect.php");




?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>admin home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: DodgerBlue;
  justify-content: space-between;
  align-items: center;
  padding:30px;
 
  
}
}

.flex-container  div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
  border:dotted;
  
}


.flex
{
margin-top:20px;
display:flex;
column-gap:30px;
flex-wrap: wrap;
margin-left:20px;

}


.flexx
{
width:200px;
height:200px;
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
  background-image: url("bg1.png");
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

<p>
<div class="bg">
<p>
<h1 align="center"> admin home page </h1>
</br>
<h2> user details </h2>

</p>
<table width="1092" border="1" align="center">
  <tr>
    <th scope="col">name</th>
    <th scope="col">age </th>
    <th scope="col">email</th>
    <th scope="col">phone.no </th>
    <th scope="col">location</th>
    <th scope="col">registeration.no </th>
  </tr>
  <?php  
  
  $qry=mysqli_query($conn, "select  * from register");
  while ($row=mysqli_fetch_array($qry))
  {
  
  ?>
  <tr>
    <td height="63"><?php   echo $row['name'];  ?></td>
    <td><?php   echo $row['age'];  ?></td>
    <td><?php   echo $row['email'];  ?></td>
    <td><?php   echo $row['phone'];  ?></td>
    <td><?php   echo $row['location'];  ?></td>
    <td><?php   echo $row['reg_num'];  ?></td>
  </tr>
  <?php 
  }
  ?>
</table>
</br>

<div class="full-height" onclick="window.open('login.php')">
<button>Go Back</button>
</div>

</p>
</div>
</body>
</html>
