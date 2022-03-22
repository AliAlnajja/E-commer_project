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

	.b/*utton2 {
		font: bold 11px Arial;
		text-decoration: none;
		background-color: #EEEEEE;
		color: #333333;
		padding: 2px 6px 2px 6px;
		border-top: 1px solid #CCCCCC;
		border-right: 1px solid #333333;
		border-bottom: 1px solid #333333;
		border-left: 1px solid #CCCCCC;
	}*/

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
			<?php if(isset($_GET['err'])) {?>
				<p class="text-danger"><?php echo $_GET['err']; ?></p>
			<?php } else if(isset($_GET['msg'])) {?>
				<p class="text-success"><?php echo $_GET['msg']; ?></p>
			<?php }?>
			<form method="post" action='/Newsletter/create'>
				<label>First Name <input type="text" name="first_name" required class="form-control mt-2"></label>
				<label>Last Name <input type="text" name="last_name" required class="form-control mt-2"></label>
				<label>Email<input type="email" name="email" required class="form-control mt-2"></label>
				<label>Phone<input type="text" name="phone" class="form-control mt-2"></label>
				<br>
				<input type="submit" name="action" value="Subscribe" class="btn btn-info mt-2 btn-block">
				<?php 
				//$data is the local name for the data passed into the view
				foreach ($data as $subscribers) {
					echo "<tr>
						<td>
							<a href='/Newsletter/delete/$subscribers->newsletter_id'delete class= 'btn btn-info mt-2 btn block'>Unsubscribe</a>
						</td>
					<tr>";
					}
				?>
			</form>		
		</div>
	</div>
</body>
</html>