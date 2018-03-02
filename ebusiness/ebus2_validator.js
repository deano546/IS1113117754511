/* global $ */

function validateDetails(){
    
    var pin;
    var name;
    var email;
    
    pin = document.getElementById("user_pin").value;
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    
    if (pin == ""  || name == "" || email == "") {
        
        alert("Please ensure all fields have been filled.");
    }
    else if (String(pin).length < 4){
        
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
    
    
}//End of validateDetails()

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}//End of enablebtnPurchase()

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}//End of disablebtnPurchase()