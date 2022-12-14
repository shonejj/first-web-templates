<?php
include("dbconnect.php");
session_start();

extract($_POST);
if(isset($_POST['button']))
{
$user=$_SESSION['uname'];

$qry2=mysqli_query($conn,"insert into cart values('','$uid','$pid','$price','','','')");
if($qry2)
{
echo '<script>alert("added to cart successfully")</script>';
}

}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>student view</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
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


h1
{
color:#003366;
}
pr
{
color:#000000;
}

* {
  margin:0;
  padding:0;

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


<div class="flex">


 <?php  
  
  
  $folder="upload/";
  
  $qry=mysqli_query($conn, "select  * from product");
  while ($row=mysqli_fetch_array($qry))
  { 
  ?>

<div>
  <img src="<?php echo "$folder".$row['image']; ?>" width="200px" height="200px" >
    <div class="flexx">
    <h4><b><?php   echo $row['name'];  ?></b></h4> 
    <p><?php   echo $row['discription'];  ?></p> 
	<p><?php   echo "Rs.".$row['price'];  ?></p>
	<a href="payment.php?id=<?php echo $row['id'];?>">buy now</a>
	<a href="cart.php?id=<?php echo $row['id'];?>&price=<?php   echo $row['price'];?> " >add to cart</a>
	</br>
	 
	</div>
</div>


<?php 
  }
  ?>

</div>

</div>
</body>
</html>
