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

</style>

<div class="header">
	<div class="left">
		<a href='/Main/index'>Home</a>
		<a href='/Items/index'>Browse products</a>
		<a href='/Recommendations/index'>Browse recommended products</a>

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