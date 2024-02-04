let options = 
	["cat.svg","dog.svg","bone.svg"];
let computerchoice;
let result, buttons;
let occur = new Set();

// FUNCTIONS AFTER VARIABLES
function makeComputerChoice(){
	console.log("Computer was",computerchoice);
	return computerchoice = my_random();   
}

function my_random() {
	if (occur.size == options.length) {
		occur.clear();
	}

	var computerchoice;
	while (true) {
		computerchoice = Math.floor( Math.random() * options.length );
		if (!occur.has(computerchoice)) {
			break;
		}
	}
	occur.add(computerchoice);
	return computerchoice;
}
/* Dont need this part, just to see what computer is doing
function showComputerChoice(){
	document.write(options[computerchoice])
}
makeComputerChoice ();
showComputerChoice ();
===== END of testing======*/
function makeUserChoice(choice){
	makeComputerChoice();// makeComputerChoice when user made a choice
	//  show the options in console
	console.log(
		options[computerchoice]
	);
	//  show the options on the document
	result.innerHTML =
		"<img src='"+
			options[computerchoice]+"' width='260' height='260' margin-top='1'>";

	makeGameResult();
}
function makeGameResult(){
	let resultstring = "";
	 if(
		(computerchoice == 0)
		) {
		console.log("Wow! You got a cat!");
		resultstring="<div id='cat'>Wow! You got a cat!</div>";
	}
	else if(
		(computerchoice == 1)
		) {
		console.log("Wow! You got a dog!");
		resultstring="<div id='dog'>Wow! You got a dog!</div>";
	}
	else if( 
		(computerchoice == 2)
        
		) {
		console.log("Sorry! You got a bone!");
		resultstring="<div id='bone'>Sorry! You got a bone!</div>";
	}
	

	result.innerHTML += 
		resultstring+
		"<div id='again'><button id='again' onclick='showOptions()'>Want To Choose Again?</button></div>";
	showResults();
}
//Show and hide the 3 buttons. When showing results, show play agian button; Click play button, show three options.
function showOptions(){
	buttons.style.display = "block";
	result.style.display = "none";
}
function showResults(){
	buttons.style.display = "none";
	result.style.display = "block";
}


// model view controller MVC

// Everything is set up ready to go. Let the browser display your buttons. By default, showOptions() will display buttons and hide the result.
// Since we put our js on top, we need to add onload 
window.onload = function(){
	result = document.querySelector("#rps_result");
	buttons = document.querySelector("#rps_buttons");
    document.querySelector(".btn_gift1").addEventListener("click", function(){makeUserChoice(0);}, false)
    document.querySelector(".btn_gift2").addEventListener("click", function(){makeUserChoice(1);}, false)
    document.querySelector(".btn_gift3").addEventListener("click", function(){makeUserChoice(2);}, false)
}