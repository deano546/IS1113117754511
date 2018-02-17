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
				<li><a href="../homepage.html">Home</a></li>
				<li><a href="../cv/cv_page1.html">CV</a></li>
				<li><a href="../Interests/sports.html">Interests</a></li>
				<li><a href="ebus1.php">Products</a></li>
				<li><a href="#">About Cloud</a></li>
				<li class="rightalign"><a href="https://github.com/deano546/IS1113117754511/graphs/commit-activity">GitHub Graph</a></li>
				<li class="rightalign"><a href="https://is1113117754511.herokuapp.com/">https://is1113117754511.herokuapp.com/</a></li>
			</ul>
		</div>
	</nav>
	
	
	<div class="container">
		<section id="main">
		 <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="post">
            	
            		<label for="name">Name</label>
            		
            		<input type="text" id="name" name="name">
            		<br/>
            		
            		<label for="email">Email</label>
            		<input type="text" id="email" name="email">
            		
            		<br/>

                    <label for="user_pin">PIN</label>
                    
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
        	$_SESSION["total"] = $_POST["total"];
        	$_SESSION["name"] = $_POST["name"];
        	$_SESSION["email"] = $_POST["email"];
          	 ?>
            

        <script type="text/javascript" src="ebus2_validator.js"></script>	
		</section>
		
	
	<footer id="main-footer">
		<p> &copy; George Deane 2018</p>
	</footer>
    </body>
</html>

     
     