const evilbtn = document.getElementById('evilbtn')
const OFFSET = 100

evilbtn.addEventListener('click',()=>{
	alert("Nice Try")
	window.close()
})

document.addEventListener('mouseover',(e)=>{/*everytime the mouse moves run this function*/
	const x = e.pageX
	const y = e.pageY
	const btnbox = evilbtn.getBoundingClientRect()/* WE KNOW EXACTLY where this btn is*/
	const horizontalDistanceFrom = distanceFromCenter(btnbox.x,x,btnbox.width)
	const verticalDistanceFrom = distanceFromCenter(btnbox.y,y,btnbox.height)
	const horizontalOffset = btnbox.width / 2 + OFFSET/*if mouse comes near 100px of the btn the btn move*/
	const verticalOffset = btnbox.height / 2 + OFFSET
	if (Math.abs(horizontalDistanceFrom) <= horizontalOffset && Math.abs(verticalDistanceFrom) <= verticalOffset) {/*if hori distance is <= hori offset (if mouse position is between offset and dist from)*/
		setButtonPosition(
			btnbox.x + horizontalOffset / horizontalDistanceFrom * 10,/* the less num in denominator the higher the value * 10 (tenfold)*/
			btnbox.y + verticalOffset / verticalDistanceFrom * 10
			)
	}
})

function setButtonPosition(left,top) {/* changing the position of the button*/
	const windowBox = document.body.getBoundingClientRect()
	const btnbox = evilbtn.getBoundingClientRect()

	if (distanceFromCenter(left, windowBox.left, btnbox.width)<0) {/*if the button has passed the screen*/
		left = windowBox.right - btnbox.width - OFFSET
	}
	if (distanceFromCenter(left, windowBox.right, btnbox.width)>0) {
		left = windowBox.left + OFFSET
	}
	if (distanceFromCenter(top, windowBox.top, btnbox.height)<0) {
		top = windowBox.bottom - btnbox.height - OFFSET
	}
	if (distanceFromCenter(top, windowBox.bottom, btnbox.height)>0) {
		top = windowBox.top + OFFSET
	}
	evilbtn.style.left = `${left}px`
	evilbtn.style.top = `${top}px`
}

function distanceFromCenter(boxPosition, mousePosition, boxSize){/* we're passing btn position mouse position and width of the btn*/
	return boxPosition - mousePosition + boxSize / 2 /*bcoz we want 2 get 2 the center of the box instead of the edges*/
}

