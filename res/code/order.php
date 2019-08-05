<html>
<head><title></title>

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
    background: url('orderbg.png') no-repeat fixed;
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
	border:2px #333;
    text-align: center;
    background-color: #7d593f;
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


button{
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	    border-radius: 5px;
	}
    h2{
     text-align: center;
    color: #ffb401;   
    }
    h3{
            font-size: x-large;
    color: #c99b2a;
    font-style: italic;
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
body{
	background-color: #ECCD80;
}
    input,select{
            margin: 5px 0px 5px 5px;
    background-color: #f5ce6e;
    }
    input#submit {
    border-radius: 10px;
    background-color: #ba9f8d;
    }
</style>

</head>
<body>
	<header>BANDA FOODS
<body>
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
	

	
	<h2  font color: white>ENTER THE ORDER DETAILS</h2>
    <form  method ="POST" action="hello.php" >
    <div style ="width: 277px; margin: 30px auto 0 auto;">

		<label><h3>Order ID:</h3></label>
		<input type="TEXT"name="order" placeholder="Enter id" required />
		
             
             <label><h3>Item Name</h3></label>
              <select name="food">
             <option value="golden baby corn">Golden Baby Corn</option> 
             <option value="gobi manchurian">Gobi Manchurian</option>
             <option value="paneer 65">Paneer 65</option>
             <option value="chilly mushroom">Chilly Mushroom</option>
             <option value="tandori">Tandori</option> 
             <option value="lemon chicken">Lemon Chicken</option>
             <option value="pepper chicken">Pepper Chicken</option>
             <option value="fish kabab">Fish Kabab</option>
          
            <option value="south meals">South meals</option> 
            <option value="north meals">North meals</option> 
            <option value="veg friedrice">Veg friedrice</option> 
             <option value="veg noodles">Veg noodles</option> 
             <option value="chicken biriyani">Chicken Biriyani</option> 
              <option value="fish biriyani">Fish Biriyani</option>
              <option value="mutton biriyani">Mutton Biriyani</option>
             <option value="egg friedrice">Egg friedrice</option> 
              <option value="death by chocolate">Death By Chocolate</option>
              <option value="hot chocolate fudge">Hot Chocolate Fudge</option>  
              <option value="tiramisu">Tiramisu</option>  
              <option value="mousse">Mousse</option>  
                                       
            </select>
        
    
            
        
             
             
		
		   <label><h3>Quantity</h3></label>  
           <select name="quantity">
           <option value="1">1</option> 
           <option value="2">2</option> 
            <option value="3">3</option> 
             <option value="4">4</option> 
             <option value="5">5</option> 
             <option value="6">6</option> 
             <option value="7">7</option> 
             
           </select>
		   <br>
		   <input id="submit"  type="submit" name="submit" placeholder="submit" />
		    
		    </div>
		
		    </form>
		    </body>
		    </html>