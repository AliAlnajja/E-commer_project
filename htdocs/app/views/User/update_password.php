<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Account</title>
</head>
<body>
	<div class='container'>
		<?php
			$this->view('shared/header');
		?>

	<h1>Update password</h1>
		<form method='post' action=''>
			<label class='form-label'>Old password:<input type='password' name='oldPassword' required='required' class='form-control' /></label> <br>
			<label class='form-label'>New password:<input type='password' name='newPassword' required='required' class='form-control' /></label> <br>
			<label class='form-label'>Confirm new password:<input type='password' name='confirm' required='required' class='form-control' /></label> <br>
			<input type="submit" name='action' value='Update' class='form-control' />
		</form>
	</div>
</body>
</html>