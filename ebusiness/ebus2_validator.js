/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
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