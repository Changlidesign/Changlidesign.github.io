

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
	let d = await query({
		type:'animal_by_id',
		params:[sessionStorage.animalId]
	});

	console.log(d);

	$("#animal-profile-page .scrollable-Jony")
		.html(makeAnimalProfile(d.result));
}