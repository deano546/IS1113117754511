/* global $ */

function calcSub() {
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
    }
    else if (document.getElementById('aws').checked) {
        argSubTotal = 300;
    }
    else if (document.getElementById('cloud9').checked) {
        argSubTotal = 200;
    }
    else {
        argSubTotal = 400;
    }
    
    
    display(argSubTotal);
    
    
}//End of calcSub()


function display(parm1){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
}//End of display()


function enablebtnProceed(){
    $('#btnproceed').prop('disabled', false);
}//End of enablebtnProceed()


function disablebtnProceed() {
    $('btnproceed').prop('disabled', true);
}//End of disablebtnProcees()