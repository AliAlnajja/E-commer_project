<html>
<head>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">

<style>

div.elem-group {
	margin: 40px 0;
}	

label {
	display: block;
	font-family: 'Aleo';
	padding-bottom: 4px;
	font-size: 1.25em;
}

input, select, textarea {
	border-radius: 2px;
	border: 1px solid #ccc;
	box-sizing: border-box;
	font-size: 1.25em;
	font-family: 'Aleo';
	width: 500px;
	padding: 8px;
}

textarea {
	height: 250px;
}

button {
	height: 50px;
	background: green;
	color: white;
	border: 2px solid darkgreen;
	font-size: 1.25em;
	font-family: 'Aleo';
	border-radius: 4px;
	cursor: pointer;
}

button:hover {
	border: 2px solid black;
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
			<form action="/Contact/takingEmail" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="department-selection">Choose Concerned Department</label>
    <select id="department-selection" name="concerned_department" required>
        <option value="">Select a Department</option>
        <option value="billing">Billing</option>
        <option value="marketing">Marketing</option>
        <option value="technical support">Technical Support</option>
    </select>
  </div>
  <div class="elem-group">
    <label for="title">Reason For Contacting Us</label>
    <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="elem-group">
    <label for="message">Write your message</label>
    <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
  </div>
  <button type="submit">Send Message</button>
</form>

		</div>
	</div>
</body>
</html>