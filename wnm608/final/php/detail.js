// Document ready
$(function(){

	$(".cart-btn").on("click",function(e){
		let original_cart_amount = $(".cart-amount").html() == "" ? 0 : parseInt($(".cart-amount").html(), 10);
		let new_cart_amount = parseInt($(".cart-btnn option:selected").text(), 10);
		$(".cart-amount").html(original_cart_amount+new_cart_amount);
	})

})