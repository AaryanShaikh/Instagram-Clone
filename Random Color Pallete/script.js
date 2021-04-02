for (var i = 0; i < 100; i++) {
	const box = document.createElement('div');
	box.classList.add('box');
	document.querySelector('.container').appendChild(box);
}
const randClr = document.querySelectorAll('.box');

function randHexClr() {
	var chars = "1234567890abcdef";
	var color = "";
	for (var i = 0; i < 6; i++) {
		var rand = Math.floor(Math.random() * chars.length);
		color += chars.substring(rand,rand+1);
	}
	return "#"+color;
}

function addColor () {
	 randClr.forEach(e => {
	 	var newClr = randHexClr();
	 	e.style.backgroundColor = newClr;
	 	e.innerHTML = newClr;
	 })
}