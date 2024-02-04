

const checkLoginForm = () => {
	let user = $("#login-username").val();
	let pass = $("#login-password").val();

	console.log(user,pass)

	if(user==='user' && pass==='pass') {
		// logged in
		sessionStorage.userId = 3;
		$("#login-form")[0].reset();
	} else {
		// not logged in
		sessionStorage.removeItem('userId');
	}
	checkUserId();
}

const checkUserId = () => {
	let p = ["#login-page","#signup-page",""];

	if(sessionStorage.userId===undefined) {
		// not logged in
		if(!p.some(o=>window.location.hash===o))
			$.mobile.navigate("#login-page");
	} else {
		// logged in
		if(p.some(o=>window.location .hash===o))
			$.mobile.navigate("#recent-page");
	}
}