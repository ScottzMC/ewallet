function cardFormValidate(){
var cardValid = 0;

//card number validation
$('#card-number').validateCreditCard(function(result){
    if(result.valid){
        $("#card-number").removeClass('required');
        cardValid = 1;
    }else{
        $("#card-number").addClass('required');
        cardValid = 0;
    }
});

//card details validation
var cardName = $("#card-name").val();
var expMonth = $("#card-expiry_month").val();
var expYear = $("#card-expiry_year").val();
var cvv = $("#card-cvc").val();
var regName = /^[a-z ,.'-]+$/i;
var regMonth = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
var regYear = /^2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/;
var regCVV = /^[0-9]{3,3}$/;
if (cardValid == 0) {
    $("#card-number").addClass('required');
    $("#card-number").focus();
    return false;
}else if (!regMonth.test(expMonth)) {
    $("#card-number").removeClass('required');
    $("#card-expiry_month").addClass('required');
    $("#card-expiry_year").focus();
    return false;
}else if (!regYear.test(expYear)) {
    $("#card-number").removeClass('required');
    $("#card-expiry_month").removeClass('required');
    $("#card-expiry_year").addClass('required');
    $("#expiry_year").focus();
    return false;
}else if (!regCVV.test(cvv)) {
    $("#card-number").removeClass('required');
    $("#card-expiry_month").removeClass('required');
    $("#card-expiry_year").removeClass('required');
    $("#card-cvc").addClass('required');
    $("#card-cvc").focus();
    return false;
}else if (!regName.test(cardName)) {
    $("#card-number").removeClass('required');
    $("#card-expiry_month").removeClass('required');
    $("#card-expiry_year").removeClass('required');
    $("#card-cvc").removeClass('required');
    $("#card-name").addClass('required');
    $("#card-name").focus();
    return false;
}else{
    $("#card-number").removeClass('required');
    $("#card-expiry_month").removeClass('required');
    $("#card-expiry_year").removeClass('required');
    $("#card-cvc").removeClass('required');
    $("#card-name").removeClass('required');
    return true;
 }
}
$(document).ready(function() {
//card validation on input fields
$('#paymentForm input[type=text]').on('keyup',function(){
    cardFormValidate();
});
});
