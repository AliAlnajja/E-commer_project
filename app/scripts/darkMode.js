const input = document.querySelector(".slider");
const currentTheme = localStorage.getItem("theme");
	
if (currentTheme == "dark") {
  	document.body.classList.add("dark-theme");
}

input.addEventListener("click", function () {
	document.body.classList.toggle("dark-theme");
	
	let theme = "light";
	if (document.body.classList.contains("dark-theme")) {
		theme = "dark";
	}

	localStorage.setItem("theme", theme);
});