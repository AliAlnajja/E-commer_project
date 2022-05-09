<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/noReposition.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/items.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/linkbuttons.css">
	
	<title>Recommendations</title>	
</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
		
		<h1>Recommendations</h1>	

		<form method="post" action='/Recommendations/search'>
		<input type="text" name="search" />
		<input type="submit" value="Search!" />
		</form>
		
		<?php 
			foreach ($data as $recommended) {
				echo "<div class='item'>
						<img src='/images/$recommended->image' align='left'>
						<h3>$recommended->name</h3>
						<h5>Price: $recommended->price$&emsp; Category: $recommended->category</h5>
						<h5>Rating: $recommended->rating&emsp;Stock: $recommended->stock</h5>
						<a href=/Items/addToCart?item_id=$recommended->item_id&price=$recommended->price' addToCart class='linkbutton' id ='buy'>Add to cart</a>
						<a href='addToWishList?item_id=$recommended->item_id'addToWishlist class='linkbutton'>Add to wishlist</a>
					</div> <br>";
			}
		?>
		
		<?php $this->view('shared/toTop'); ?>
	</div>
</body>

</html>
