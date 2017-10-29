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
	var re16digit=/^\d{16}$/;

	if(CreditCardNumber.value.search(re16digit)==-1){
	window.location.href = "thanks.php";
 else{
	 input.value="";
	alert("Please enter your 16 digit credit card number");
}


}
}
//$(
    
 //function validate_creditcardnumber()
//{

    
//if (CreditCardNumber.value.search(re16digit)==-1)
//return false;


//}

//);