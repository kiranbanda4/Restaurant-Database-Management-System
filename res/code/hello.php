<?php
session_start();
if(isset($_POST['submit']))
{
   $conn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($conn,"savsru");
	$order_id=$_POST['order'];
    $quantity=$_POST['quantity'];
    $manager_id=$_SESSION['id'];
    $sql1="SELECT * from order5";
    $records=mysqli_query($conn,$sql1);
    
    $value=mysqli_fetch_assoc($records);
    $id=$value['order_id'];
			if( $id!=$order_id)
			{
				$sql="INSERT INTO order5(order_id,manager_id) values($order_id,$manager_id)";
                $query=mysqli_query($conn,$sql);
            }
            else
            {
				echo "done";
			}
    
    
        
    
	$item_name=$_POST['food'];
    $sql2="SELECT * from menu5";
    $records2=mysqli_query($conn,$sql2);
    
     while($value1=mysqli_fetch_assoc($records2)){
         $item=$value1['item_name'];
             if( $item_name==$item )
             {
                 $item_id=$value1['item_id'];
             }
         else{
             echo "invalid";
         }
           
     }
		
     



    $query=mysqli_query($conn,"call take($order_id,$item_id,$quantity)") or die("order unsuccesful");
    
    
	header("Location: success.php");
}
else
{
	header("Location: order.php");

}
mysql_close($conn);

?>