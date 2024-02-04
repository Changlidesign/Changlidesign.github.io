

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

	let map_el = await makeMap("#recent-page .recent-map");

	makeMarkers(
		map_el,
		d.result.map(o=>{
			o.icon = o.img;
			// o.icon = `img/icons/icon_${o.type}.svg`;
			return o;
		})
	);

	console.log(d);
}