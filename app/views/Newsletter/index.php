<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/noReposition.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/newsletter.css">
	
	<title><?= _("Newsletter") ?></title>
</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
		
		<h1><?= _("Subscribe To Our Newsletter") ?></h1>

		<div class="form-cont">
			<?php if(isset($_GET['err'])) { ?>
				<p class="text-danger"><?php echo $_GET['err']; ?></p>
			<?php } else if(isset($_GET['msg'])) { ?>
				<p class="text-success"><?php echo $_GET['msg']; ?></p>
			<?php } ?>
			
			<form method="post" action='/Newsletter/create'>
				<label><?= _("First Name") ?> <input type="text" name="first_name" required class="form-control mt-2"></label>
				<label><?= _("Last Name ") ?><input type="text" name="last_name" required class="form-control mt-2"></label>
				<label><?= _("Email") ?><input type="email" name="email" required class="form-control mt-2"></label>
				<label><?= _("Phone") ?><input type="text" name="phone" class="form-control mt-2"></label>
				<br>

				<input type="submit" name="action" value="Subscribe" class="btn btn-info mt-2 btn-block">
				
				<?php 
					foreach ($data as $subscribers) {
						echo "<tr><td><a href='/Newsletter/delete/$subscribers->newsletter_id'delete class= 'btn btn-info mt-2 btn block'>" . _("Unsubscribe") . "</a></td><tr>";
					}
				?>
			</form>		
		</div>
	</div>
</body>

</html>
