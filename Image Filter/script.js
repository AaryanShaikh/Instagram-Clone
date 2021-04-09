var r = document.querySelector(':root');
function blurf (value) {
	r.style.setProperty('--blur', value+'px');
}
function brightnessf (value) {
	r.style.setProperty('--brightness', value);	
}
function contrastf (value) {
	r.style.setProperty('--contrast', value+'%');	
}
function grayscalef (value) {
	r.style.setProperty('--grayscale', value+'%');
}
function hueRotatef (value) {
	r.style.setProperty('--hue-rotate', value+'deg');
}
function invertf (value) {
	r.style.setProperty('--invert', value+'%');
}
function opacityf (value) {
	r.style.setProperty('--opacity', value+'%');
}
function saturatef (value) {
	r.style.setProperty('--saturate', value+'%');
}
function sepiaf (value) {
	r.style.setProperty('--sepia', value+'%');
}
function filter1 () {
	r.style.setProperty('--blur', '0px');
	r.style.setProperty('--brightness', '110%');
	r.style.setProperty('--contrast', '90%');
	r.style.setProperty('--grayscale', '0%');
	r.style.setProperty('--hue-rotate', '280deg');
	r.style.setProperty('--invert', '0%');
	r.style.setProperty('--opacity', '100%');
	r.style.setProperty('--saturate', '150%');
	r.style.setProperty('--sepia', '0%');
	document.getElementById('blur').value = 0;
	document.getElementById('brightness').value = 1.1;
	document.getElementById('contrast').value = 90;
	document.getElementById('grayscale').value = 0;
	document.getElementById('hueRotate').value = 280;
	document.getElementById('invert').value = 0;
	document.getElementById('opacity').value = 100;
	document.getElementById('saturate').value = 15;
	document.getElementById('sepia').value = 0;
}
function filter2 () {
	r.style.setProperty('--blur', '0px');
	r.style.setProperty('--brightness', '110%');
	r.style.setProperty('--contrast', '110%');
	r.style.setProperty('--grayscale', '100%');
	r.style.setProperty('--hue-rotate', '0deg');
	r.style.setProperty('--invert', '0%');
	r.style.setProperty('--opacity', '100%');
	r.style.setProperty('--saturate', '1');
	r.style.setProperty('--sepia', '30%');
	document.getElementById('blur').value = 0;
	document.getElementById('brightness').value = 1.1;
	document.getElementById('contrast').value = 110;
	document.getElementById('grayscale').value = 100;
	document.getElementById('hueRotate').value = 0;
	document.getElementById('invert').value = 0;
	document.getElementById('opacity').value = 100;
	document.getElementById('saturate').value = 1;
	document.getElementById('sepia').value = 30;
}
function filter3 () {
	r.style.setProperty('--blur', '0px');
	r.style.setProperty('--brightness', '100%');
	r.style.setProperty('--contrast', '140%');
	r.style.setProperty('--grayscale', '0%');
	r.style.setProperty('--hue-rotate', '0deg');
	r.style.setProperty('--invert', '0%');
	r.style.setProperty('--opacity', '100%');
	r.style.setProperty('--saturate', '1');
	r.style.setProperty('--sepia', '100%');
	document.getElementById('blur').value = 0;
	document.getElementById('brightness').value = 1;
	document.getElementById('contrast').value = 140;
	document.getElementById('grayscale').value = 0;
	document.getElementById('hueRotate').value = 0;
	document.getElementById('invert').value = 0;
	document.getElementById('opacity').value = 100;
	document.getElementById('saturate').value = 1;
	document.getElementById('sepia').value = 100;
}