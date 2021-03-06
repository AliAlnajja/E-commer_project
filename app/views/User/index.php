<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/noReposition.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	
	<title><?= _("Account") ?></title>
</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
		
		<h1><?= _("Account") ?></h1>
		
		<table>
			<tr><th><?= _("Username") ?>&emsp;</th> <th><?= _("Email") ?></th> <th>&emsp;<?= _("Address") ?></th></tr>
			<?php 
				echo "<td>$data->username</td> <td>$data->email</td> <td>&emsp;$data->address</td>";
			?>
		</table>
		
		<br>
		
		<?php 
			echo "<a href='/User/update_details'>" . _("Update details") . "</a>&emsp;";
			echo "<a href='/User/update_password'>" . _("Update password") . "</a>&emsp;";
			echo "<a href='/User/remove_address'>" . _("Remove address") . "</a>&emsp;";
		?>

		<?php $this->view('shared/toTop'); ?>
	</div>
</body>

</html>