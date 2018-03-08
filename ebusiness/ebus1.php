<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Select Product</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <!-- Add icon library and JQuery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <!-- Styling text boxes, Positioning Social Media Logos -->
        <style>
            input {
                font-size:16px;
            }
        </style>
        
    </head>
    
    <body class="cldpage">
        
        
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
            <!-- Form to Select Product -->
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="post" action="ebus2.php">
            
            <label for="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            Salesforce @ $100
            </label>
            
            <br/>
            
            <label for="cloud9">
            <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
            Cloud 9 @ $200
            </label>
            
            <br/>
            
            <label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            Amazon Web Services @ $300
            </label>
            
            <br/>
            
            <label for ="gmail">
            <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
            Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            
            <label class="align" for="subtotal">
                Sub Total
             <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
             
             <label class="align" for="discount">
                Discount @ 5%
             <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>     
                   
                
            <br/>
            
              <label class="align" for="vat">
                VAT @ 10%
             <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label class="align" for="total">
                total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
    
            <br/>
            
            <button type="submit" id="btnproceed" class="addcart" disabled>add to shopping cart</button>
            
            </form>
            
            <br/>
            <button class="calculate" onclick="calcSub()">Calculate Cost</button>
            
            <button class="clrchoice"><a href="ebus1.php">Clear Choice</a></button>
            
        </section>
        
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