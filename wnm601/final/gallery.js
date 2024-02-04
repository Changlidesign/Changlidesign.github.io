$(".picker .thumbstrip img").on("click",function(){
			let oldsrc = $(this).attr("src");
			// console.log(oldsrc);
			$(this).closest(".picker")
			.find(".main-image img").attr({src:oldsrc});
		});