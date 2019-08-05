<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
<style>
	body{
	background-color: #ECCD80;
}

p.outset {
	
	    border-style: outset;
    border-color: black;
    width: 20%;
    height: 175px;
    margin-left: 500px;
    margin-top: 200px;
    background-color: goldenrod;
    opacity: 0.9;
	
	
	}

input[type="submit"] {
    border-radius: 20px;
    background-color: #cfd2e5;
    padding: 7px;
    }
    input[type="text"] {
    padding: 5px;
    text-align: center;
    background-color: #f1f1f1;
    }

  
    header{
	text-align: center;

	color: goldenrod;
	font-size: 50px;
	background-color: black;
	padding: 40px;
	

	 box-shadow: 0 0 10px 8px goldenrod;
	 
	 
	
	
}

body {
    background: url('good.jpeg') no-repeat fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    
}



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
     top: 0;
    	 font-size:25px;
  
        
}
li {
    float: left;
   
}
li#logout
{
	float: right;
	font-size:25px;
	margin:0px 0px 0px 0px;

}
h2{
	border: 1px solid #333;
	background-color: #7F7F7F;
}


li a, .dropbtn{
    display: block;
    color: goldenrod;
    text-align: center;
    padding: 15px 15px;
    text-decoration: none;
}

li a:hover,.dropdown:hover .dropbtn {
    background-color: white;
    color: black;
}
li.dropdown {
    display: inline-block;
}

div{
	border:1px solid #333;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: goldenrod;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
	
}
	
</style>
	</head>
    	<body>
            <header>BANDA FOODS
                
<nav>
<ul>
<li><a href="secondpage.php">MENU</a></li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" >Order</a>
    <div class="dropdown-content">
      <a href="order.php">Place Order</a>
      <a href="view.php">View Order</a>
      <a href="delivered.php">Delivered Order</a>
    </div></li>
<li><a href="bill.php">BILL</a></li>
<li id="logout"><a href="newhome.php">Logout</a></li>
</ul>
</nav>
</header>


<form action="paybill.php" method="POST">

<p align="center" class="outset"><br> ORDER ID:<br>
  <input type="text" name="order" placeholder="enter id" required>
  <br><BR>
  <input type="submit" value="Submit">
  </p>

 
</form> 



</body>
</html>

