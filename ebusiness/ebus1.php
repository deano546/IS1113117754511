<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="text/javascript" src="cost_calc.js"></script>
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
            
            <label for="subtotal">
                Sub Total
             <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>  
            
            <br/>
             
             <label for="discount">
                Discount @ 5%
             <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>     
                   
                
            <br/>
            
              <label for="vat">
                VAT @ 10%
             <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
    
            <br/>
            
            <button type="submit" id="btnproceed" disabled>add to shopping cart</button>
            
            </form>
            
            <br/>
            <button onclick="calcSub()">Calculate Cost</button>
            <a role="button" href="ebus1.php">clear choice</a>
        </section>
        
        </div>
    
    <footer id="main-footer">
        <p> &copy; George Deane 2018</p>
    </footer>
        
    </body>
</html>