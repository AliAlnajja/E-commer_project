<link rel="stylesheet" type="text/css" href="/app/styles/toTop.css">

<button onclick="toTop()" id="topButton" title="Go to top">Top</button>

<script>
button = document.getElementById("topButton");
window.onscroll = function() { scroll() };

function scroll() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		button.style.display = "block";
	} else {
		button.style.display = "none";
	}
}

function toTop() {
	document.body.scrollTop = 0; 				// safari
	document.documentElement.scrollTop = 0; 	// everything else (I think)
}
</script>