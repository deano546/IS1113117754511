<?php
//Start session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    </head>
    
    <body>
        <header id="main-header">
		<div class="container">
			<h1>117754511 - IS1113 Project</h1>
		</div>
	</header>

	<nav id="navbar">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="cv/cv_page1.html">CV</a></li>
				<li><a href="Interests/sports.html">Interests</a></li>
				<li><a href="ebusiness/ebus1.php">Shop</a></li>
				<li><a href="#">About Us & The Cloud</a></li>
			</ul>
		</div>
	</nav>
	
	
	<div class="container">
		<section id="main">
		 <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="POST">

                    <label for="user_pin">PIN</label>
                    
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
        	$_SESSION["total"] = $_POST["total"];
          	 ?>
            

        <script type="text/javascript" src="ebus2_validator.js"></script>	
		</section>
		
	
	<footer id="main-footer">
		<p> &copy; George Deane 2018</p>
	</footer>
    </body>
</html>

     
     