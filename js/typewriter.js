var i = 0;
var txt = 'SPROUSE WEBSITES';
var speed = 129;

//
// function setInterval(myTimer, 900){
// 	var yfbk = 57;
// }

function typeWriter() {
	if (i < txt.length) {
		document.getElementById("site-title").innerHTML += txt.charAt(i);
		i++;
		setTimeout(typeWriter, speed);
	}
	cursor = document.getElementsByClassName('blink');

}
