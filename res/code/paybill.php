<?php
//for calculating total price
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"savsru");
session_start();
$sum=0;
$cash=0;
$_SESSION['order_id']=$_POST['order'];
  $order=$_POST['order'];
      $sql="SELECT * from order_details5 where order_id=$order";
     $records=mysqli_query($conn,$sql);
     while($value=mysqli_fetch_assoc($records)){
			$id=$value['item_id'];
	
	    $sql1="SELECT *from menu5 WHERE item_id=$id";
	    $records1=mysqli_query($conn,$sql1);
	     while($value1=mysqli_fetch_assoc($records1)){
			$price=$value1['item_price'];
		}
            $quantity=$value['quantity'];
            $total=$price*$quantity;
            $sum=$sum+$total;
     
     }
           $cash=$sum+($sum*0.05);
     $sql2="insert into bill(order_id,total_price) values($order,$cash)";
     mysqli_query($conn,$sql2);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
<style>
    body {
    background: url('114.jpg') no-repeat fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    
}
header{
	text-align: center;

	color: goldenrod;
	font-size: 50px;
	background-color: black;
	padding: 40px;
	

	 box-shadow: 0 0 10px 8px goldenrod;
	 
	 
	
	
}
    

h1 {
    text-align: center;
/*    font-size: -webkit-xxx-large;*/
    padding-top: 50px;
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
    #table1{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
   margin-top: 30px;
        margin-right: 500px;
        margin-bottom: 10px;
        margin-left: 150px;
    
        
     height: 250px; 
    width: 76%;
    height: 250px;
    text-align: center;
    border-collapse: collapse;
    border-color: black;
    opacity: 0.8;
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
    


table#popup {
    margin-left: 350px;
        border: 5px solid black;
    }
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 200px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 200%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
text-align: center;
    padding: 2px 16px;
    background-color: #efc357;
    color: white;
}

.modal-body {padding: 2px 16px;
        padding: 2px 16px;
    background-color: #fefefe;
    text-align: center;
    font-size: 35px;
    }

.modal-footer {
   
    padding-left: 30px;
    
    background-color: #efc357;
    color: white;
}
#popup
{    
	align:center;
	border: 1px solid black;
}
body{
	background-color: #ECCD80;
}
button {
    padding: 10px 10px 10px 10px;
    margin: 30px 100px 50px 50px;
    border-radius: 20px;
}
    #myBtn{
        margin-left: 650px;
    }
    
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}
    h1{
        padding-top: 50px;
    }

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
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
  //to display the bill
$conn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($conn,"savsru");
  $_SESSION['order_id']=$_POST['order'];
  $order=$_POST['order'];
  $sql="SELECT * from order_details5 where order_id=$order";
  $records=mysqli_query($conn,$sql);
        if(mysqli_num_rows($records)>0)
        {
            
    $order=$_SESSION['order_id'];
    echo"<h1 text-align:center>"."Bill for order id:".$order."</h1>";?>
    
    
	<table id="table1">
<tr>
<th>ITEM_ID</th>
<th>ITEM_NAME</th>
<TH>PRICE</TH>
<Th>QUANTITY</Th>

</tr>
         <?php   
	    while($value=mysqli_fetch_assoc($records)){
			$id=$value['item_id'];
		echo "<tr>";
        echo "<td>".$value['item_id']."</td>";
	    $sql1="SELECT *from menu5 WHERE item_id=$id";
	    $records1=mysqli_query($conn,$sql1);
	     while($value1=mysqli_fetch_assoc($records1)){
			 echo "<td>".$value1['item_name']."</td>";
			 echo "<td>".$value1['item_price']."</td>";
		}
	    echo "<td>".$value['quantity']."</td>";
		echo "</tr>";
        }
            ?>
        </table>
         <button id="myBtn">paybill</button>
<?php
	
            
        
}
       
        
else
{
	echo "<h1>"."No Bills to be paid"."</h1>";
}

?>
	


<!--modal/popup window -->



<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1>BILL</h1>
    </div>
    <div class="modal-body">
     <table id="popup">
         <tr><td>Total price:</td>
		<td><?php
		echo $sum;
        ?></td>
        </tr>
        
         <tr><td>Gst:<td>5%</td> </tr>
        
        <tr><td>--------------</td><td>----</td></tr>
        
         <tr><td>Total amount:</td>
        <td><?php
   
        echo $cash;
            ?></td>
        </tr>
		</table>

    </div>
    <div class="modal-footer">
 
      
      
      <div class="popup" onclick="myFunction()"><button>Credit Card</button>
  <span class="popuptext" id="myPopup">PAYMENT SUCCESSFUL!</span>
</div>
 <div class="popup" onclick="myFunction1()"><button>Debit Card</button>
  <span class="popuptext" id="myPopup1">PAYMENT SUCCESSFUL!</span>
</div>
 <div class="popup" onclick="myFunction2()"><button>Cash</button>
  <span class="popuptext" id="myPopup2">PAYMENT SUCCESSFUL!</span>
</div>
    <div class="popup" onclick="myFunction3()"><button>Paytm</button>
  <span class="popuptext" id="myPopup3">PAYMENT SUCCESSFUL!</span>
</div>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
function myFunction1() {
    var popup = document.getElementById("myPopup1");
    popup.classList.toggle("show");
}
function myFunction2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.toggle("show");
}
    function myFunction3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}
</script>


<?php
//for trigger
$order_delete=$_SESSION['order_id'];
$sql="delete from order_details5 where order_id=$order_delete";
$records=mysqli_query($conn,$sql);
?>






</body>

</html>