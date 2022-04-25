<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/noReposition.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	
	<title>Login</title>
</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
		
		<h1>Login</h1>
		
		<form method='post' action=''>
			<label class='form-label'>Username:<input type='text' name='username' class='form-control' /></label><br>
			<label class='form-label'>Password:<input type='password' name='password' class='form-control' /></label><br>
			<input type="submit" name='action' value='Login' class='form-control' />
		</form>
		
		<p>No account? <a href="/User/register">Register here.</a></p>
		
		<?php $this->view('shared/toTop'); ?>
	</div>
	
</body>

</html>
