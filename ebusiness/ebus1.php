<!DOCTYPE html>
<html>
    <head>
        <title>
            Select Product
        </title>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <script  type="text/javascript" src="cost_calc.js"></script>
    </head>
    <body>
        <h4> Select a Product</h4>
        <br/>
        
        <form method="POST" action="ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked OnClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" OnClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            
            
            
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Costs</button>
        <a role="button" href="ebus1.php">Clear Choices</a>
    </body>
</html>