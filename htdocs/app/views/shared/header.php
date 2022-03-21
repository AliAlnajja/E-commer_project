<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
<style>
.header {
	overflow: hidden;
	background-color: #f1f1f1;
	padding: 10px;
}

.left > a {
	float: left;
	font-size: 10px
	padding: 2px;
	margin-left: 10px;
}

.right > a, .right > p {
	float: right;
	font-size: 10px
	padding: 2px;
	margin-right: 10px;
}

div.button {
	align-items: center;
}


#toggle {
	position: relative;
	float: right;
	display: block;
	width: 64px;
	height: 32px;
	border-radius: 140px;
	background: #222;
	transition: 0.5s;
	box-shadow: inset 0 8px 60px rgba(0, 0, 0, 0.1),
				inset 0 8px 8px rgba(0, 0, 0, 0.1),
				inset 0 -4px 4px rgba(0, 0, 0, 0.1);
}

#toggle .btn-toggle {
	position: relative;
	cursor: pointer;
	float: right;
	top: 0;
	left: 0;
	width: 32px;
	height: 32px;
	background: linear-gradient(to bottom, #444, #222);
	border-radius: 50%;
	transform: scale(0.9);
	box-shadow: 0 8px 40px rgba(0, 0, 0, 0.5),
				inset 0 4px 4px rgba(255, 255, 255, 0.2),
				inset 0 -4px 4px rgba(255, 255, 255, 0.2);
    transition: 0.5s;
}

body {
	transition: 0.5s;
}

body.active {
	background: #f8f8f8;
}




</style>
</body>
	<div class="header">
		<div class="left">
			<a href='/Main/index'>Home</a>
			<a href='/Items/index'>Browse Products</a>
			<a href='/Recommendations/index'>Browse Recommended Products</a>
			<a href='/Newsletter/index'>Newsletter</a>
			<a href='/Contact/index'>Contact Us</a>
			<div id="toggle"> 
					<button class="btn-toggle"></button>
			</div>

		</div>

		<div class="right">
			<?php if (!isset($_SESSION['user_id'])) { ?>
				<a href='/User/register'>Register</a>
				<a href='/User/login'>Log in</a>
				
			<?php } else { ?>
				<a href='/User/logout'>Log out</a>
				<?php $user_id = $_SESSION['user_id']; ?> 
				<a href='/User/index'>Account</a>
				<p>Hello, <?php echo $_SESSION['username'];?>.</p>
				<?php } ?>	
		</div>
	</div> 
</body>

<script type="text/javascript"></script>

<script>
	const btn = document.querySelector(".btn-toggle");
	const currentTheme = localStorage.getItem("theme");
	const body = document.querySelector('body');
	if (currentTheme == "dark") {
  		document.body.classList.add("dark-theme");
	}
	// btn.onclick = function() {
	// 	btn.classList.toggle('active');
	// 	body.classList.toggle('active');
	// }

	btn.addEventListener("click", function () {
  	document.body.classList.toggle("dark-theme");
  	btn.classList.toggle('active');
  	body.classList.toggle('active');

  	let theme = "light";
  	if (document.body.classList.contains("dark-theme")) {
    	theme = "dark";
  	}
  		localStorage.setItem("theme", theme);
	});
</script>