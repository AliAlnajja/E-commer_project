<style>
#topButton {
	display: none;
	position: fixed;
	bottom: 64px;
	right: 50px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #808080;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 8px;
	font-size: 24px;
}

#topButton:hover {
  background-color: #FF0000; /* Add a dark-grey background on hover */
}
</style>

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