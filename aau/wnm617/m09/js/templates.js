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
 <h1 class="hamstername">${o.name}</h1>
 <ul>
 <li class="namesecond"><div><strong>Gender</strong> <span>${o.gender}</span></div></li>
 <li class="namesecond"><div><strong>Phone Number</strong> <span>${o.phone}</span></div></li>
 <li class="namesecond"><div><strong>Email</strong> <span>${o.email}</span></div></li>
 <li class="namesecond"><div><strong>Address</strong> <span>${o.address}</span></div></li>
 <li class="namesecond"><div><strong>About</strong> <span>${o.about}</span></div></li>
 <li class="namesecond"><div><strong>Create Time</strong> <span>${o.date_create}</span></div></li></ul>

`);


const makeAnimalProfile = templater(o=>`




<img src="${o.img}" class="one">
	<h1 class="hamstername">${o.name}</h1>
	<ul class="animalprofile-item">
	<li class="namesecond"><div><strong>Age</strong> <span>${o.age}</span></div></li>
	<li class="namesecond"><div><strong>Gender</strong> <span>${o.gender}</span></div></li>
	<li class="namesecond"><div><strong>Type</strong> <span>${o.type}</span></div></li>
	<li class="namesecond"><div><strong>Color</strong> <span>${o.color}</span></div></li></ul>
	
	<ul class="animalprofile-item">
	<li class="namesecond"><div><strong>More Details</strong> <span>${o.description}</span></div></li>
	</ul>


`);


















const makeEditAnimalForm = templater(o=>`
<form>
	<select>
		${makeOptions([
			{value:'cat',option:'Cat'},
			{value:'dog',option:'Dog'},
			{value:'horse',option:'Horse'}
		])}
	</select>
</form>
`);


const makeOptions = templater(o=>`<option value="${o.value}">${o.option}</option>`);