<html>

<head>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">

	<style>
		#something.btn {
			background-color: yellow; /* Green */
  			border: none;
  			color: black;
  			padding: 6px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			
		}

		.btn {
			background-color: #03f0fc; /* Green */
  			border: none;
  			color: black;
  			padding: 6px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
		}
		.center {
  			display: block;
  			margin-left: auto;
  			margin-right: auto;
  			width: 200px;
  			height: 200px;
		}
	</style>
	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Order confirmation</title>

</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
	</div>
	<img src="\images\circleCheckout.png" class="center"  w>>
	<center><p>Your order has been placed !</p></center>

</body>
</html>