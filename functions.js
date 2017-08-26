function swapText(newId)
{
var newElem = document.getElementById(newId);
var oldElem = document.getElementsByClassName("visible");
oldElem[0].classList.add('invisible');
oldElem[0].classList.remove('visible');

newElem.classList.remove('invisible');
newElem.classList.add('visible');
}

//function to hide the element with the mentioned ID
function hideElement(clickable,elemId)
{
	clickable.onclick = function() {showElement(this, elemId);};
	var selectedElem = document.getElementById(elemId);
	selectedElem.classList.remove('visible');
	selectedElem.classList.add('invisible');
	clickable.innerHTML = '<i class="fa fa-plus-circle" aria-hidden="true"></i>';
}


//function to show the element with the mentioned ID
function showElement(clickable,elemId)
{
	clickable.onclick = function() {hideElement(this, elemId);};
	var selectedElem = document.getElementById(elemId);
	selectedElem.classList.remove('invisible');
	selectedElem.classList.add('visible');
	clickable.innerHTML = '<i class="fa fa-minus-circle" aria-hidden="true"></i>';
}


//show the two menu items to select the info for the tutoring
function showLanguages(clickable, nlId, enId)
{
	clickable.innerHTML = '<i class="fa fa-minus-circle" aria-hidden="true"></i>';	
	clickable.onclick = function() {hideLanguages(this, nlId, enId);};
	var dutch = document.getElementById(nlId);
	var english = document.getElementById(enId);
	dutch.classList.remove('invisible');
	dutch.classList.add('visible');
	english.classList.remove('invisible');
	english.classList.add('visible');
}

//hide the two menu items
function hideLanguages(clickable, nlId, enId)
{
	clickable.innerHTML = '<i class="fa fa-plus-circle" aria-hidden="true"></i>';
	clickable.onclick = function() {showLanguages(this, nlId, enId);};
	var dutch = document.getElementById(nlId);
	var english = document.getElementById(enId);
	dutch.classList.remove('visible');
	dutch.classList.add('invisible');
	english.classList.remove('visible');
	english.classList.add('invisible');
	
	
	var text_nl = document.getElementById('textNl');
	var text_en = document.getElementById('textEn');
	
	if(text_nl.classList.contains('visible')) {
		text_nl.classList.remove('visible');
		text_nl.classList.add('invisible');
	}

	if(text_en.classList.contains('visible')) {
		text_en.classList.remove('visible');
		text_en.classList.add('invisible');
	}

	 

}

//display the 
function showSelectedLang(nlId, enId, newId)
{
	var dutch = document.getElementById(nlId);
	var english = document.getElementById(enId);
	var text = document.getElementById(newId);
	dutch.classList.remove('visible');
	dutch.classList.add('invisible');
	english.classList.remove('visible');
	english.classList.add('invisible');
	text.classList.remove('invisible');
	text.classList.add('visible');
}

function showTeamInfo(elemId) 
{
	var overlay = document.getElementById('overlay');
	overlay.classList.remove('invisible');
	overlay.classList.add('visible');
	var team = document.getElementById(elemId);
	team.classList.remove('invisible');
	team.classList.add('visible');

}


function hideTeamInfo() 
{
	var overlay = document.getElementById('overlay');
	overlay.classList.add('invisible');
	overlay.classList.remove('visible');
}

function expandMenu(caller,Id)
{
    var elem = document.getElementById(Id);
    caller.onclick = function() {collapseMenu(this,Id);};
    elem.classList.remove('invisible');
    elem.classList.add('visible');
}

function collapseMenu(caller,Id)
{
    var elem = document.getElementById(Id);
    caller.onclick = function() {expandMenu(this,Id);};
    elem.classList.remove('visible');
    elem.classList.add('invisible');
}
