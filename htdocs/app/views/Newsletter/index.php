<html>
<head>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">

<style>
	.form-cont {
		width: 300px;
		height: auto;
		margin: 30px auto;
		padding: 12px;
		box-shadow: 0px 0px 20px #FFFFFF;
		font-family: Poppins;
	}
</style>

	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Subscribe To Our Newsletter</title>
</head>
<body>
	<div class='container'>
		
		<?php $this->view('shared/header'); ?>
		
		<br>
		<div class="form-cont">
			<form method="post" action='/Newsletter/create'>
				<label>First Name <input type="text" name="first_name" required class="form-control mt-2"></label>
				<label>Last Name <input type="text" name="last_name" required class="form-control mt-2"></label>
				<label>Email<input type="email" name="email" required class="form-control mt-2"></label>
				<label>Phone<input type="text" name="phone" class="form-control mt-2"></label>
				<br>
				<input type="submit" name="action" value="submit" class="btn btn-info mt-2 btn-block">
			</form>
		</div>
	</div>
</body>
</html>