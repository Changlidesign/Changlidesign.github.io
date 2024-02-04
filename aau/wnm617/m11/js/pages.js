

// async await
const showListPage = async () => {
	let d = await query({
		type:'animals_from_user',
		params:[sessionStorage.userId]
	});

	console.log(d);

	$("#list-page .animallist")
		.html(makeAnimalList(d.result));
}



const showProfilePage = async () => {
	let d = await query({
		type:'user_by_id',
		params:[sessionStorage.userId]
	});

	console.log(d);

	$("#profile-page .scrollable-Jony")
		.html(makeUserProfile(d.result));
}


const showAnimalProfilePage = async () => {
	query({
		type:'animal_by_id',
		params:[sessionStorage.animalId]
	}).then(d=>{
		console.log(d);

		$("#animal-profile-page .scrollable-Jony")
			.html(makeAnimalProfile(d.result));
		$("#animal-profile-page .profile-description")
			.html(d.result[0].description);
	});

	query({
		type:'locations_from_animal',
		params:[sessionStorage.animalId]
	}).then(async d=>{
		let map_el = await makeMap("#animal-profile-page .map");

		makeMarkers(
			map_el,
			d.result
		);
	});


}




const showRecentPage = async () => {
	let d = await query({
		type:'recent_locations',
		params:[sessionStorage.userId]
	});

	console.log(d);

	let animals = d.result.reduce((r,o)=>{
		o.icon = o.img;
		// o.icon = `img/icons/icon_${o.type}.svg`;
		if(o.lat) r.push(o);
		return r;
	},[])

	let map_el = await makeMap("#recent-page .recent-map");

	makeMarkers(
		map_el,
		animals
	);

	map_el.data("markers").forEach((o,i)=>{
		o.addListener("click",function(e){
			let content = makeRecentWindow(animals[i]);

			// example 1
			$("#recent-page .basin")
				.addClass("active")
				.html(content);


			// example 2
			map_el.data("infoWindow")
				.open(map_el.data("map"),o);
			map_el.data("infoWindow")
				.setContent(content);
		})
	});
	map_el.data("map").addListener("click",function(e){
		$("#recent-page .basin")
			.removeClass("active")
	});
}





const showAddLocationPage = async () => {
	let map_el = await makeMap("#add-location-page .recent-map");
	let map = map_el.data("map");

	setTimeout(()=>{setMapBounds(map,[]);},100);

	map.addListener("click",function(e){
		console.log("click",e.latLng.lat(),e.latLng.lng());
		console.log("center",map.getCenter().lat(),map.getCenter().lng());
		let m = new google.maps.Marker({
			position: {
				lat:e.latLng.lat(),
				lng:e.latLng.lng()
			},
			map: map
		});
	});
}