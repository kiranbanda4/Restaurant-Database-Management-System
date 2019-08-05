<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>CSE</title>
	<meta charset="utf-8"/>
	
	<style>

li#logout
{
	float: right;
	font-size:25px;
	margin:0px 0px 0px 0px;

}

	

    

h2#header1 {
    
    font-size: 30px;
    text-align: center;
    color: rgb(0, 0, 0);
}
	
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
	margin-left:290px;
    opacity: 0.9;
}

#customers td, #customers th {
    padding: 8px;
}
#customers tr
{
	background-color:goldenrod;

}


#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: black;
    color: goldenrod;
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
    background: url('menubg.png') no-repeat fixed;
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
label{
	margin:5px 10px 3px 10px;
}
select{
	margin: 5px 0px 5px 5px;
}
input{
	margin: 5px 0px 5px 5px;
}
button{
	margin: 5px 0px 10px 100px;
}	
div{
	border:1px solid #333;
}
li.dropdown {
    display: inline-block;
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
    </div> 
<li><a href="bill.php">BILL</a></li>
<li id="logout"><a href="newhome.php">Logout</a></li>
</ul>
</nav>
</header>
 <h2 id="header1">VEG STARTER:</h2>
<table id="customers">
  <tr>
	  <th>Item ID</th>
    <th>ITEM NAME</th>
    <th>PRICE</th> 
    </tr>
  <tr>
	<td>1</td>  
    <td>GOLDEN BABY CORN</td>
    <td>150</td>
    </tr>
  <tr>
	  <td>2</td> 
    <td>GOBI MANCHURIAN</td>
    <td>130</td>
    </tr>
     <tr>
		 <td>3</td> 
    <td>PANEER 65</td>
    <td>150</td>
    </tr>
     <tr>
		 <td>4</td> 
    <td>CHILLY MUSHROOM</td>
    <td>120</td>
    </tr>
    
</table>
    <h2 id="header1">NON-VEG STARTER:</h2>
<table id="customers">
  <tr>
	  <th>Item ID</th>
    <th>ITEM NAME</th>
    <th>PRICE</th> 
    </tr>
  <tr>
	<td>1</td>  
    <td>TANDORI</td>
    <td>250</td>
    </tr>
  <tr>
	  <td>2</td> 
    <td>LEMON CHICKEN</td>
    <td>180</td>
    </tr>
     <tr>
		 <td>3</td> 
    <td>PEPPER CHICKEN</td>
    <td>190</td>
    </tr>
     <tr>
		 <td>4</td> 
    <td>FISH KABAB</td>
    <td>150</td>
    </tr>
    
</table>
<h2 id="header1">VEG MAIN COURSE:</h2>
<table id="customers">
  <tr>
	  <th>Item ID</th>
    <th>ITEM NAME</th>
    <th>PRICE</th> 
    </tr>
  <tr>
	<td>1</td>  
    <td>SOUTH MEALS</td>
    <td>150</td>
    </tr>
  <tr>
	  <td>2</td> 
    <td>NORTH MEALS</td>
    <td>130</td>
    </tr>
     <tr>
		 <td>3</td> 
    <td>VEG FRIEDRICE</td>
    <td>100</td>
    </tr>
     <tr>
		 <td>4</td> 
    <td>VEG NOODLES</td>
    <td>120</td>
    </tr>
    
</table>
<h2 id="header1">NON-VEG MAIN COURSE:</h2>
<table id="customers">
  <tr>
	  <th>Item ID</th> 
<th>ITEM NAME</th> 
    <th>PRICE</th>
  </tr>
  <tr>
	  <td>1</td> 
    <td>CHICKEN BIRIYANI</td>
    <td>180</td>
   </tr>
  <tr>
	  <td>2</td> 
    <td>FISH BIRIYANI</td>
    <td>250</td>
    </tr>
  <tr>
	  <td>3</td> 
    <td>MUTTON BIRIYANI</td>
    <td>230</td>
    </tr>
    <tr>
		<td>4</td> 
    <td>EGG FRIEDRICE</td>
    <td>120</td>
    </tr>
</table>
<h2 id="header1">DESSERTS:</h2>
<table id="customers">
  <tr>
	  <th>Item ID</th> 
<th>ITEM NAME</th> 
    <th>PRICE</th>
  </tr>
  <tr>
	  <td>1</td> 
    <td>DBC</td>
    <td>250</td>
   </tr>
  <tr>
	  <td>2</td> 
    <td>HOT CHOCOLATE FUDGE</td>
    <td>250</td>
    </tr>
  <tr>
	  <td>3</td> 
    <td>TIRAMISU</td>
    <td>150</td>
    </tr>
    <tr>
		<td>4</td> 
    <td>MOUSSE</td>
    <td>180</td>
    </tr>
</table>


</body>
</html>
