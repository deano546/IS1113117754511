/* global $ */

function validateDetails(){
    
    var pin;
    
    pin= document.getElementById("user_pin"),value;
    
    if(pin == ""){
        alert("please enter your pin")
    }
    else if(String(pin).length < 4){
        alert("please make sure your pin is accurate");
    }
    else{
        enablebtnPurchase();
    }
}

function enablebtnPurchase(){
    $("#btnPurchase").prop("disabled", false)
}

function disablebtnPurchase() {
    $("#btnPurchase").prop("disabled", true)
}