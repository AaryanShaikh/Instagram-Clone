var alog = document.getElementById("alog");
var text = document.getElementById("text");
function analyze() {
	removeAllChildNodes(alog);
	text = document.getElementById("text").value;
	if (text === '') {
		alert("Enter some text to analyze!!");
	}else{
		countVowels(text);
		countChars(text);
		countWords(text);
		countUniqueWords(text);
		countLines(text);
	}	
}
function countVowels (text) {
	var text = text.replaceAll("/[.,'\"]/","").toLowerCase();
	var vowels = ["a","e","i","o","u"]
	var vcount = 0,ccount = 0
	for (var i = 0; i < text.length; i++) {
		if (vowels.includes(text[i])) {
			vcount++;
		}else{
			ccount++;
		}
	}
	var vsp = document.createElement("span");
  	vsp.innerHTML = `There are <span class="pulse">${vcount}</span> vowels.<br>`;
  	alog.appendChild(vsp);
  	var csp = document.createElement("span");
  	csp.innerHTML = `There are <span class="pulse">${ccount}</span> consonants.<br>`;
  	alog.appendChild(csp);
}
function randText () {
	var rtext = ["A purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt.",
	"He kept telling himself that one day it would all somehow make sense.",
	"Her hair was windswept as she rode in the black convertible.",
	"We have a lot of rain in June.",
	"This made him feel like an old-style rootbeer float smells.",
	"I’m working on a sweet potato farm.",
	"Grape jelly was leaking out the hole in the roof.",
	"He created a pig burger out of beef.",
	"He had a vague sense that trees gave birth to dinosaurs.",
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum."];
	var rand = Math.floor(Math.random() * rtext.length);
	document.getElementById("text").value = rtext[rand];
}
function countChars (text) {
	var chars = text.length;
	var chsp = document.createElement("span");
	chsp.innerHTML = `There are <span class="pulse">${chars}</span> characters.<br>`;
	alog.appendChild(chsp);
}
function removeAllChildNodes(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }
}
function countWords (text) {
	var words = text.split(" ");
	var wsp = document.createElement("span")
	wsp.innerHTML = `There are <span class="pulse">${words.length}</span> words.<br>`;
	alog.appendChild(wsp);
}
function countUniqueWords (text) {
	var uni = []
	var words = text.replaceAll("/[.,'\"]/","").toLowerCase().split(" "); 
	uni.push(words[0]);
	for (var i = 1; i < words.length; i++) {
		if (!uni.includes(words[i])) {
			uni.push(words[i]);
		}
	}
	var uwsp = document.createElement("span");
	uwsp.innerHTML = `There are <span class="pulse">${uni.length}</span> unique words.<br>`;
	alog.appendChild(uwsp);
}
function countLines (text) {
	var lines = text.split(/\r\n|\r|\n/).length
	var lsp = document.createElement("span");
	lsp.innerHTML = `There are <span class="pulse">${lines}</span> lines.<br>`;
	alog.appendChild(lsp);
}