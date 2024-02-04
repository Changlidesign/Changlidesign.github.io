// Document ready
$(function(){

	$(".cart-btn").on("click",function(e){
		let cart_amount = $(".cart-amount").html();
		$(".cart-amount").html(++cart_amount);
	})


	$(".cart-button input").on("change",function(){
		let cart_amount = $(".cart-button input:checked").length;
		$(".cart-amount").html(+cart_amount);
	})

})