// instantiate variables

// write functions
//http://hamiltondraws.com/smallcode/#ex9
//as=function(a){var b=a.slice(0);b.sort(function(){return Math.random()-.5});return b}

//http://hamiltondraws.com/smallcode/#ex12
var templater = function(template,data){
    if(!template || !data) return template||'';
    for(var key in data){
        if(data.hasOwnProperty(key) === false) continue;
        template = template.replace(RegExp('\\<%=\\s*' + key + '\\s*%>', 'g'), data[key]);
    }
    return template;
}






function showData1(arr){
	var output = "";
	for(var i in arr) {
		output += `<div>${arr[i].item}</div>`;
	}
	$(".product-list").html(output);
}

function showData2(arr,target,template_string){
	var output = "";

	for(var i in arr) {
		output += templater(template_string,arr[i]);
	}

	$(target).html(output);
}






// run code
// document ready
$(function(){
	$.ajax({
		url:"data_feed.php",
		dataType:"json"
	})
	.done(function(data){
		console.log("success",data);

		// var reversed = data.reverse();
		//var rand = as(data);

		showData1(data); // start here

		// showData2(  // then here
		// 	data,
		// 	".product-list",
		// 	$("#product-item-template").html()
		// 	);
	})
	// .fail(function(data){
	// 	console.log("failure",data);
	// })
	// .always(function(data){
	// 	console.log("always",data);
	// })

	$(".js-sortdata").on("click",function(){
		$.ajax({
			url:"data_feed.php?orderby="+
			$(this).data("sort")+
			"&direction="+
			$(this).data("order"),
			dataType:"json"
		})
		.done(function(d){
			showData(
				d,
				".product-list",
				$("#product-item-template").html()
				);
		})
	})
});