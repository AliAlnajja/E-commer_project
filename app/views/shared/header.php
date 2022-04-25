<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
<link rel="stylesheet" type="text/css" href="/app/styles/header.css">

<div class="header">
	<div class="left">
		<a class="link" href='/Main/index'>Home</a>
		<a class="link" href='/Items/index'>Browse</a>
		<a class="link" href='/Recommendations/index'>Recommendations</a>
		<a class="link" href='/Newsletter/index'>Newsletter</a>
		<a class="link" href='/Contact/index'>Contact Us</a>
		
		<label class="switch">
			<input type="checkbox">
			<span class="slider round"></span>
		</label>
	</div>

	<div class="right">
		<?php if (!isset($_SESSION['user_id'])) { ?>
			<a class="link" href='/User/register'>Register</a>
			<a class="link" href='/User/login'>Log in</a>

		<?php } else { ?>
			<a class="link" href='/User/logout'>Log out</a>
			<?php $user_id = $_SESSION['user_id']; ?> 
			<a class="account" href='/User/index'>
				<?php 
					$user = new \app\models\User();
					$username = $user->getFromUserId($_SESSION['user_id'])->username;
					echo $username;
				?>
			</a>
			<a class="link" href='/Wishlist/index'>Wishlist</a>	
			<a class="link" href='/Sales_Details/index'>Cart</a>
			<?php } ?>	
	</div>
</div> 

<script src="/app/scripts/darkMode.js"></script>
