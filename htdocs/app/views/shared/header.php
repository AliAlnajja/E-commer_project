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
.switch {
  position: relative;
  float: right;
  display: inline-block;
  width: 57px;
  height: 27px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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

			<!-- <div class="toggle"> 
					<button class="btn-toggle"></button>
			</div> -->
				<label class="switch">
  					<input type="checkbox">
  					<span class="slider round"></span>
				</label>
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

<script>
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
</script>