const setNavActive = () => {
	let hash = window.location.hash.substr(1);
	$("."+hash+"-nav").addClass("active")
}




$(()=>{

	checkUserId();

	// event delegation
	$(document)


	// ROUTING
	.on("pagecontainerbeforeshow",function(e,ui){
		console.log(ui.toPage[0].id)
		switch(ui.toPage[0].id) {
			case "recent-page":
				// run code
				break;
			case "list-page":
				showListPage();
				break;
			case "animal-profile-page":
				showAnimalProfilePage();
				break;
			case "profile-page":
				showProfilePage();
				break;
		}
	})


	/* FORMS */
	.on("submit","#login-form",function(e){
		e.preventDefault();

		checkLoginForm();
	})


	/* CLICKS */
	.on("click",".js-logout",function(e){
		sessionStorage.removeItem("userId");
		checkUserId();
	})
	.on("click",".animal-jump",function(e){
		if($(this).data("id")==undefined) {
			throw("No id on this element");
		}
		sessionStorage.animalId = $(this).data("id");
	})


	/* ACTIVATE */

	.on("click","[data-activate]",function(e){
		$($(this).data("activate"))
			.addClass("active");
	})
	.on("click","[data-deactivate]",function(e){
		$($(this).data("deactivate"))
			.removeClass("active");
	})
	.on("click","[data-toggle]",function(e){
		$($(this).data("toggle"))
			.toggleClass("active");
	})
	.on("click","[data-activateone]",function(e){
		$($(this).data("activateone"))
			.addClass("active")
			.siblings().removeClass("active");
	})
	;





	$("[data-template]").each(function(){
		let template_id = $(this).data("template");
		let template_str = $(template_id).html();
		$(this).html(template_str);
	})

	setNavActive();

});