var color1 = document.getElementById("paymentdetail18");
    if(color1){
document.getElementById('paymentdetail18').style.background="rgba(219, 70, 66, 1)";
}

var color2 = document.getElementById("paymentdetail43");
    if(color2){
document.getElementById('paymentdetail43').style.background="rgba(45, 177, 224, 1)";
}

var color3 = document.getElementById("paymentdetail68");
    if(color3){
document.getElementById('paymentdetail68').style.background="rgba(74, 113, 168, 1)";
}

var color4 = document.getElementById("paymentdetail69");
    if(color4){
document.getElementById('paymentdetail69').style.background="rgba(112, 118, 175, 1)";
}

var color5 = document.getElementById("paymentdetail71");
    if(color5){
document.getElementById('paymentdetail71').style.background="rgba(44, 140, 219, 1)";
}

var color6 = document.getElementById("paymentdetail77");
    if(color6){
document.getElementById('paymentdetail77').style.background="rgba(110, 224, 68, 1)";
}

var color7 = document.getElementById("paymentdetail79");
    if(color7){
document.getElementById('paymentdetail79').style.background="rgba(209, 184, 75, 1)";
}




var divContent = $('.charmyleky').text();

if( divContent.indexOf('Deposit') >= 0){
  // Found world
$(".charmylekyo").removeClass("fa-plus-circle");
$(".charmylekyo").addClass("fa-check-circle");
}

if( divContent.indexOf('Bonus') >= 0){
  // Found world
$(".charmylekyo").removeClass("fa-plus-circle");
$(".charmylekyo").addClass("fa-dot-circle");
}

if( divContent.indexOf('Withdrawal') >= 0){
  // Found world
$(".charmylekyo").removeClass("fa-plus-circle");
$(".charmylekyo").addClass("fa-arrow-alt-circle-down");
}



