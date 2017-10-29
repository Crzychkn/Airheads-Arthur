//Add To Cart Text Change (Not working)
/*
$(document).ready(function(){
	$('#addtocart1').on('click', function(event) { 
		event.preventDefault(); console.log("ollo");
  $('#addtocart1').text('Added!');
	});
	});
*/

function redirect(){

	ccNumber = document.getElementById("CreditCardNumber").value;
        ccNumber = ccNumber.replace(/ /g, "");
	document.getElementById("CreditCardNumber").value = ccNumber;

	if (ccNumber.length != 16 || ccNumber == "" || ccNumber == null)
	{
		document.getElementById("CreditCardNumber").value="";
		alert("Please enter your 16 digit credit card number");
	}
       	else{
		window.location.href = "thanks.php";
	}
}
