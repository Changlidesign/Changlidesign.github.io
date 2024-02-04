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
				showRecentPage();
				break;
			case "list-page":
				showListPage();
				break;
			case "animal-profile-page":
				showAnimalProfilePage();
				break;
			case "add-location-page":
				showAddLocationPage();
				break;
			case "profile-page":
				showProfilePage();
				break;
			case "edit-user-page":
				showEditUserPage();
				break;
			case "edit-animal-page":
				showEditAnimalPage();
				break;
		}
	})



	/* FORMS */
	.on("submit","#login-form",function(e){
		e.preventDefault();

		checkLoginForm();
	})
	.on("submit","#signup-form",function(e){
		e.preventDefault();

		if($("#signup-password").val()!=$("#signup-password2").val()) {
			throw "Passwords don't match";
			return;
		}

		query({
			type:'insert_user',
			params:[
				$("#signup-username").val(),
				$("#signup-email").val(),
				$("#signup-password").val()
			]
		}).then(d=>{
			if(d.error) throw d.error;
			$.mobile.navigate("#login-page");
		})
	})
	.on("submit","#list-add-form",function(e){
		e.preventDefault();
		query({
			type:'insert_animal',
			params:[
				sessionStorage.userId,
				$("#list-add-name").val(),
				$("#list-add-type").val(),
				$("#list-add-color").val(),
				$("#list-add-description").val()
			]
		}).then(d=>{
			if(d.error) throw d.error;
			showListPage();
		})
	})


	/* CLICKS */
	.on("click",".js-addlocation",function(e){
		query({
			type:'insert_location',
			params:[
				sessionStorage.animalId,
				$("#add-location-lat").val(),
				$("#add-location-lng").val(),
				$("#add-location-description").val()
			]
		}).then(d=>{
			if(d.error) throw d.error;
		})
	})
	.on("click",".js-edituser",function(e){
		query({
			type:'update_user',
			params:[
				$("#edit-user-name").val(),
				$("#edit-user-email").val(),
				sessionStorage.userId
			]
		}).then(d=>{
			if(d.error) throw d.error;
		})
	})
	.on("click",".js-editanimal",function(e){
		query({
			type:'update_animal',
			params:[
				$("#edit-animal-name").val(),
				$("#edit-animal-type").val(),
				$("#edit-animal-color").val(),
				$("#edit-animal-description").val(),
				sessionStorage.animalId
			]
		}).then(d=>{
			if(d.error) throw d.error;
		})
	})
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

	.on("click",".profile-nav a",function(e){
		let id = $(this).parent().index();
		$(this).parent().addClass("active")
			.siblings().removeClass("active");
		$(this)
			.parent().parent().parent().next().children()
			.eq(id).addClass("active")
			.siblings().removeClass("active");
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