<?php


	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"savsru");
$sql="SELECT * from order_details5 ORDER by order_id";
$records=mysqli_query($conn,$sql);
//$records=mysqli_query($conn,$sql);
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
    background: url('12.jpg') no-repeat fixed;
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
    h1#h{
        text-align:center;
	    padding-top: 15px;
}

    h1{
        text-align:center;
        padding-top: 70px;
       
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
   margin-top: 30px;
        margin-right: 500px;
        margin-bottom: 10px;
        margin-left: 150px;
    
        
    /* height: 250px; */
    width: 76%;
    height: 250px;
    text-align: center;
    border-collapse: collapse;
    border-color: black;
    opacity: 0.9;
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
    button{
         border-radius: 20px;
    background-color: #c0a68e;
    padding: 10px;
    margin-top: 0px;
    margin-left: 550px;
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

        <?php
        if(mysqli_num_rows($records)>0)
   {?>
        <h1 id="h">List Of Orders Placed</h1>
<table id="table1">
<tr >
	<th>Order ID</th>
	<th>Item ID</th>
    <th>Item Name</th>
    <th>Quantity</th>
    <th>action</th>
	</tr>
   
	<?php
	    while($value=mysqli_fetch_assoc($records)){
		echo "<tr>";
		echo "<td>".$value['order_id']."</td>";
		echo "<td>".$value['item_id']."</td>";
         $VALUE=$value['item_id'];   
        $sql1="SELECT *from menu5 where item_id=$VALUE";
	
	    $record=mysqli_query($conn,$sql1);
	 

		while($value1=mysqli_fetch_assoc($record))
		{
			echo "<td>".$value1['item_name']."</td>";
		}
			    
            
		echo "<td>".$value['quantity']."</td>";
            ?>
        <td>
        <a onclick="return confirm('Are you sure?')"href="?idd=<?php echo $value['order_id']?>&idd1=<?php echo $value['item_id']?>" class="btn btn-danger">Delete</a>
        </td>
   
    <?php
                
		echo "</tr>";
        }
         if (isset($_GET['idd'])){

//             $idd = $_GET['idd'];
             $idd = $_GET['idd'];
             
//             $result = $mysqli->query("delete from order_details5 where order_id='$idd'");
  
	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"savsru");           
$sql="DELETE from order_details5 WHERE order_id='$idd'";
$result=mysqli_query($conn,$sql);
             if($result){
                 ?>
    <script>
    alert("success to delete order");
        window.location.href='backup.php';
    </script>
    <?php
             }else{
                 ?>
    <script>
        alert("fail to delete order");
        window.location.href='backup.php';
    </script>
    <?php
             }
         }   
            
    ?>
            </table>

    
        <?php
	
	
  }

    else{
        echo "<h1>"."No Orders Placed"."</h1>";
//        mysql_connect('localhost','root','');
//        mysql_select_db('savsru');
//       $sql5="TRUNCATE table order5";
//        $record5=mysql_query($sql5);
        
    }
   ?>         
</body>
</html>













