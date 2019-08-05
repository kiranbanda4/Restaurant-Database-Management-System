<html>
<head>
<title>
</title>
<style>
    p.groove {border-style: groove}
form {
    border-width: 4px ;
     border-style: outset;
    border-color: goldenrod;
  
}
    body {
    background: url('food2.jpg') no-repeat fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.h1{
    text-align: center
}
label {
    font-size: 15px;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 5px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #CCC;
    box-sizing: border-box;
}
header{
        text-align: center;
       color: goldenrod;
background-color: black;
    padding: 40px;
     box-shadow: 0 0 10px 8px goldenrod;
    
}
   
    h1{
        font-size: 50px;
    }
    h2{
        font-style:italic;
        color: #661303;
    }  
    h2#h{
       
      color: goldenrod;
      font-style:italic;  
    }
    img{
        align: left;
    }
input[type="submit"] {
    border: 1px solid white;
    border-radius: 10px;
    }

    input[type="submit"]:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
       input[type="submit"]:active {
   box-shadow: 0 3px #666;
  transform: translateY(4px);
           border-radius: 10px;
}
input[type="text"] {
    margin-left: 10px;
}



.container {
    padding: 16px;
    background-color: #f0b056;
}
h1 {
    font-size: -webkit-xxx-large;
}
input[type="submit"] {
    margin-left: 80px;
    padding: 6;
    /* -webkit-margin-after-collapse: collapse; */
}
</style>
<meta charset="utf-8"/>
</head>
<body>
    <header>
        
     
        <font color="goldenrod" ><h1 align="center">BANDA FOODS</h1></font>
        
        <h2 id="h" align="center">..THERE IS NO LOVE SINCERE THAN THE LOVE OF FOOD..</h2>
   
            
    </header>
    <div style ="width: 277px; margin: 70px auto 0 auto;">
    <form  method ="POST" action="">
    
                <div class="container">
                        
            <label><b>Enter your ID:</b></label>
            <input type="text" name="manager_id" placeholder="manager_id" required/> 
            <label><b>Enter password:</b></label>
             <input type="password" name="password" placeholder="Password" required/>
             
        <input text-align="center" type="submit" name="submit" value="LOGIN"/>
                    </div>
                    </form>
        <?php
$error='';
session_start();

if(isset($_POST['submit'])){
    if(empty($_POST['manager_id']) || empty($_POST['password'])){
        $error = "usern invalid";
    }
    else
    {
        $user=$_POST['manager_id'];
        $_SESSION['id']=$user;
        $pass=$_POST['password'];
        $conn=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($conn,"savsru");
        $query=mysqli_query($conn,"SELECT * FROM manager5 WHERE manager_id='$user' and password='$pass' ");

$rows = mysqli_num_rows($query);
if($rows == 1){
header("Location: 1menu.php");
}

else
{
 echo "<h2  text-align:center>"."User Invalid"."</h2>";
    echo "<h2 >"."Enter correct login id and password"."</h2>";
 
//    header("Location: newhome.php"); 
}

}
}

?>
            </body></html>