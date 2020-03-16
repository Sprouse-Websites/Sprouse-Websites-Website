document.head || (document.head = document.getElementsByTagName('head')[0]);
function changeFavicon(src) {
	var link = document.createElement('link'),
	oldLink = document.getElementById('dynamic-favicon');
	link.id = 'dynamic-favicon';
	link.rel = 'shortcut icon';
	link.href = 'http://media.giphy.com/media/lqYIicTuQb7bD4DE32/200w_d.gif';
	if (oldLink) {
		document.head.removeChild(oldLink);
	}
	document.head.appendChild(link);
}
