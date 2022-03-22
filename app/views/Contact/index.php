<html>
<head>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">

<style>
	input[type=text], select, textarea {
	 	width: 100%; /* Full width */
	  	padding: 12px; /* Some padding */ 
	  	border: 1px solid #ccc; /* Gray border */
	  	border-radius: 4px; /* Rounded borders */
	  	box-sizing: border-box; /* Make sure that padding and width stays in place */
	  	margin-top: 6px; /* Add a top margin */
	  	margin-bottom: 16px; /* Bottom margin */
	  	resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
	}

	/* Style the submit button with a specific background color etc */
	input[type=submit] {
		background-color: #04AA6D;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}	

	/* When moving the mouse over the submit button, add a darker green color */
	input[type=submit]:hover {
	  	background-color: #45a049;
	}

	/* Add a background color and some padding around the form */
	.form {
		border-radius: 5px;
		padding: 20px;
	}
</style>

	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Subscribe To Our Newsletter</title>
</head>
<body>



	<div class="container">
		<?php $this->view('shared/header'); ?>
		<br>
		<div class="form">
			<form action="action_page.php">
		    	<label for="fname">First Name</label>
			    <input type="text" id="fname" name="firstname" placeholder="Your name..">
			    <label for="lname">Last Name</label>
			    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
				<label for="country">Country</label>

			    <select id="country" name="country">
			    	<option value=""></option>
			      	<option value="canada">Canada</option>
			      	<option value="usa">USA</option>
			    </select>

			    <label for="subject">Subject</label>
			    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
			    <input type="submit" value="Submit">
  			</form>
		</div>
	</div>
</body>
</html>