<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
<style>
/*header{
	text-align: center;
	border: 3px solid #333;
	color: goldenrod;
	font-size: 50px;
	background-color: black;
	padding: 40px;
	 background-image:url('header.jpg');
	 background-repeat : no-repeat;
	 background-position-x: 1080px;
	 background-position-y : center;
	
	
}*/
    
    
    
    header{
	text-align: center;

	color: goldenrod;
	font-size: 50px;
	background-color: black;
	padding: 40px;
	

	 box-shadow: 0 0 10px 8px goldenrod;
	 
	 
	
	
}

body {
    background: url('rest.jpg') no-repeat fixed;
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
    <a href="javascript:void(0)" class="dropbtn" >ORDER</a>
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
</body>
</html>