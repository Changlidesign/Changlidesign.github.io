
// Document Ready
$(function(){

	$(".js-increasecart").on("click",function(e){
		let cartvalue = $(".cart-value").html();
		$(".cart-value").html(++cartvalue);
	})


	$(".js-addtocart").on("change",function(e){
		let cartvalue = $(".js-addtocart:checked").length;
		$(".cart-value").html(cartvalue);
	})

})