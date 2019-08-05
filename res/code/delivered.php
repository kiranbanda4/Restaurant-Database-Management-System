<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
<style>
  
    header{
	text-align: center;

	color: goldenrod;
	font-size: 50px;
	background-color: black;
	padding: 40px;
	

	 box-shadow: 0 0 10px 8px goldenrod;
	 
	 
	
	
}

body {
    background: url('14.jpg') no-repeat fixed;
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


    h1{
        text-align: center;
        padding:200px;
          font-size: -webkit-xxx-large;
        
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
table{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    color: black;
 
    padding: 10px;
    margin: 100px 100px 100px 200px;
    
}	
#pay{
	margin:100px 00px 100px 300px;
}
	body{
	background-color: #ECCD80;
}
     table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;

    margin: 30px 500px 200px 150px;
    /* height: 250px; */
    width: 76%;
    height: 250px;
    text-align: center;
    border-collapse: collapse;
    border-color: black;
    opacity: 0.8;
     text-shadow: 0;  
 
}

    #table1 th{
        background-color: black;
        color: goldenrod;
        font-size: x-large;
    }
    #table1 td{
        background-color: goldenrod;
        color: black;
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

	<?php

$conn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($conn,"savsru");

   $sql="SELECT * from delivered_orders ORDER BY order_id ";
   $records=mysqli_query($conn,$sql);
   if(mysqli_num_rows($records)>0)
   {?>
       <table id="table1">
<tr>
	<th>Order ID</th>
    <th>Item name</th>
	<th>Quantity</th>
	<th>Delivered date</th>

	
	</tr><?php
       
$conn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($conn,"savsru");
	while($value=mysqli_fetch_assoc($records)){
		echo "<tr>";
		echo "<td>".$value['order_id']."</td>";
	    $VALUE1=$value['order_id'];
		$VALUE=$value['item_id'];
		$sql1="SELECT *from menu5 where item_id=$VALUE";
		$sql2="SELECT *from bill where order_id=$VALUE1";
	    $record=mysqli_query($conn,$sql1);
	    $record2=mysqli_query($conn,$sql2);

		while($value1=mysqli_fetch_assoc($record))
		{
			echo "<td>".$value1['item_name']."</td>";
		}
			
	    echo "<td>".$value['quantity']."</td>";
	    echo "<td>".$value['delivered_time']."</td>";
	    /*while($value2=mysql_fetch_assoc($record2)){
	    echo "<td>".$value2['total_price']."</td>";
	   }
	
	    echo "</tr>";*/
	}
}
else{
	echo "<h1>"."No Delivered orders"."</h1>";
}
	?>
	</table>







</body>
</html>