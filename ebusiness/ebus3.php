<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <title>RECEIPT</title>
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
			<h4>RECEIPT</h4>
			
             
        <?php
        // Echo session variables that were set on previous page
        echo "Name: " . $_POST["name"] . ". <br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Total is " . $_SESSION["total"] . ". <br>";
        ?>
        
       
		
	
	
	<footer id="main-footer">
		<p> &copy; George Deane 2018</p>
	</footer>
    </body>
</html>



