<?php
//Start session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <title>Enter Details</title>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!-- Javascript function to load appropriate logo -->
		<script>
		function imgload() {
			var myvar='<?php echo $_POST["total"];?>';
			
			if (myvar==104.5){
			document.getElementById("reclogo").innerHTML = "<img id='homeimg' src='https://axeos.com/wp-content/uploads/2017/04/salesforcelogo.png'>";
			}
			else if (myvar==209){
			document.getElementById("reclogo").innerHTML = "<img id='homeimg' src='https://static.c9.io/nc-3.1.4109-2ffb85e2-wf/static/plugins/c9.profile/static/images/cloud9-logo.svg'>";	
			}
			else if (myvar==313.5){
			document.getElementById("reclogo").innerHTML = "<img id='homeimg' src='http://www.descasio.com/wp-content/uploads/2017/09/icon-cloud-aws.png'>";	
			}
			else {
			document.getElementById("reclogo").innerHTML = "<img  id='homeimg' src='https://fthmb.tqn.com/tYgJGEdBuq6-UanTN90lSTvzqDA=/735x0/gmail1-56a6a4223df78cf7728f8909.png'>";	
			}
		}//End of imgload()
		</script>
		
        <!-- Styling text boxes -->
        <style>
            input {
                font-size:16px;
            }
        </style>
        
    </head>
    
    <body class="cldpage" onload="javascript:imgload()">
    	
   	<!-- Header --> 
    <header id="cld-header">
	<div class="container">
	<h1>Cloud Services - 117754511 - IS1113 Project</h1>
	</div>
	</header>

	<!-- Navbar --> 
	<nav id="cldnavbar">
		<div class="container">
			<ul>
				<li><a href="../cloud/cloudhomepage.html">Vendor Home</a></li>
				<li><a href="../cloud/aws.html">AWS</a></li>
				<li><a href="../cloud/cloud9.html">Cloud9</a></li>
				<li><a href="../cloud/gmail.html">GMail</a></li>
				<li><a href="../cloud/salesforce.html">Salesforce</a></li>
				<li><a href="../ebusiness/ebus1.php">Our Products</a></li>
				<li class="rightalign"><a href="https://github.com/deano546/IS1113117754511/graphs/commit-activity">GitHub Graph</a></li>
				<li class="rightalign"><a href="https://is1113117754511.herokuapp.com/">https://is1113117754511.herokuapp.com/</a></li>
				<li class="rightalign"><a href="../homepage.html">Personal Home</a></li>
			</ul>
		</div>
	</nav>
	
	
	<div class="container">
		<section id="main">
			
		<!-- Form --> 	
		 <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="post">
            	
            	
            		<!-- Input Textboxes --> 
            		<label class="align" for="name">Name</label>
            		<input type="text" id="name" name="name">
            		<br/>
            		
            		<label class="align" for="email">Email</label>
            		<input type="text" id="email" name="email">
            		<br/>

                    <label class="align" for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br/>
					
					<!-- Buttons --> 
                	<button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            		<br/>
            
            		<button class="validate" onClick="validateDetails()">Validate</button>
            
            		<?php
            		// Set session variables
        			$_SESSION["total"] = $_POST["total"];
           			?>
            

        	
		</section>
		
		<!-- Basket --> 
		<p id="rectext">In Basket:</p>
     	<div id="reclogo"></div>
        
	</div>
		
	<!-- Footer --> 
	<footer id="cldfooter">
		<p> &copy; George Deane 2018</p>
		
	<!-- Google Translate Widget --> 
	<div id="google_translate_element"></div><script type="text/javascript">
	function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</footer>
	

	
    </body>
</html>

     
     