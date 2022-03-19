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
		<?php $this->view('shared/header'); ?>
		<h1>Account</h1> <br>
		<table>
			<tr><th>Username&emsp;</th> <th>Email</th> <th>&emsp;Address</th></tr>
			<?php 
				echo "<td>$data->username</td> <td>$data->email</td> <td>&emsp;$data->address</td>";
			?>
		</table> <br>
		<?php 
			echo "<a href='/User/update_details/$data->user_id'>Update details</a>&emsp;";
			echo "<a href='/User/update_password/$data->user_id'>Update password</a> &emsp;";
			echo "<a href='/User/remove_address/$data->user_id'>Remove address</a> &emsp;";
		?>
		
	</div>
</body>
</html>