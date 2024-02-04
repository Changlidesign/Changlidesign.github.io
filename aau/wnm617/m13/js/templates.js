// templater (()=>{}) ([{},{}])

const makeAnimalList = templater(o=>`
	<li class="animallist-item">
	<a href="#animal-profile-page" class="display-flex animal-jump" data-id="${o.id}">
		<img src="${o.img}" class="hamsterone">
		<h1 class="title">${o.name}</h1>
	</a>

	</li>
`);



const makeUserProfile = templater(o=>`

<img src="${o.img}" class="hamsteroneprofile">
 <h1 class="username">${o.name}</h1>
 <ul class="userprofile-item">
 <li class="usernamedetail"><div><strong>Gender</strong> <span>${o.gender}</span></div></li>
 <li class="usernamedetail"><div><strong>Phone Number</strong> <span>${o.phone}</span></div></li>
 <li class="usernamedetail"><div><strong>Email</strong> <span>${o.email}</span></div></li>
 <li class="usernamedetail"><div><strong>Address</strong> <span>${o.address}</span></div></li>
 </ul>

 

`);


const makeAnimalProfile = templater(o=>`


<div class="display-flex profile-image">

<img src="${o.img}" class="one"></div>
<ul class="animalprofile-item">

<li class="hamstername">${o.name}<a href="#" class="js-deleteanimal" data-id="${o.id}"><img src="img/delete.png" style="width: 50px;margin-top: -10px;margin-left: -5px;"></a></li>
	<li class="namesecond" style="margin-top:-5px;"><div><strong>Type</strong> <span>${o.type}</span></div></li>
	<li class="namesecond"><div><strong>Color</strong> <span>${o.color}</span></div></li>
	

	</ul>
	


`);




const makeRecentWindow = templater(o=>`
<div class="display-flex recent-animal">
	<div class="flex-none recent-image">
	<a href="#animal-profile-page" class="animal-jump" data-id="${o.id}">
		<img src="${o.img}" alt=""></a>
	</div>
	<div class="flex-none">
		<h2>${o.name}</h2>
		<div class="namecard">
			<div><strong>Type</strong> <span>${o.type}</span></div>
			<div><strong>Color</strong> <span>${o.color}</span></div>
			
		</div>
		
	</div>
</div>
`);















const makeOptions = templater(o=>`<option value="${o.value}">${o.option}</option>`);








const makeEditUserForm = (o) => {
	return `
	<form id="edit-user-form">
		<div class="form-control">
			<label for="edit-user-name" class="user-label">User Name</label>
			<input class="user-input" type="text" placeholder="Type your Username" data-role="none" id="edit-user-name" value="${o.name}">
		</div>
		<div class="form-control">
			<label for="edit-user-email" class="user-label">Email</label>
			<input class="user-input" type="text" placeholder="Type your Email" data-role="none" id="edit-user-email" value="${o.email}">
		</div>
		<div class="form-control">
					<a href="#" data-rel="back" class="js-edituser">Done</a>
				</div>
	</form>
	`;
}


const makeEditTypeSelect = (type) => {
	let options = ["Grey Dwarf Hamster","Yellow Hamster","Teddy Bear Hamster","White Dwarf Hamster","Golden Hamster","Grey Dwarf Hamster"];
	return options.reduce((r,o)=>{
		return r+`<option value="${o}" ${type==o?"selected":""}>${o.toUpperCase()}</option>`;
	})
}

const makeEditAnimalForm = (o) => {
	return `
	<form id="edit-animal-form">
		<div class="form-control">
			<label for="edit-animal-name" class="user-label">Hamster Name</label>
			<input class="hamster-input" type="text" placeholder="Type your Hamster Name" data-role="none" id="edit-animal-name" value="${o.name}">
		</div>
		<div class="form-control">
			<label for="edit-animal-type" class="user-label">Hamster Type</label>
			<select id="edit-animal-type" class="hamster-input" data-role="none">
				${makeEditTypeSelect(o.type)}
			</select>
		</div>
		<div class="form-control">
			<label for="edit-animal-color" class="user-label">Hamster Color</label>
			<input class="hamster-input" type="text" placeholder="Type your Hamster Color" data-role="none" id="edit-animal-color" value="${o.color}">
		</div>
		<div class="form-control">
			<label for="edit-animal-description" class="user-label">Hamster Details</label>
			<textarea class="hamster-detail" placeholder="Type your Hamster Details" data-role="none" id="edit-animal-description">${o.description}</textarea>
		</div>
		<div class="form-control">
					<a href="#" data-rel="back" class="js-editanimal">Done</a>
				</div>
	</form>
	`;
}