<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/noReposition.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/items.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/buttons.css">
	
	<title>Browse</title>
</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
		
		<h1>Browse</h1>
		
		<form method="post" action='/Items/search'>
		<input type="text" name="search" />
		<input type="submit" value="Search!" />
		</form>
		
		<table>
			<tr><th>All</th> <th>&emsp;Price</th> <th>&emsp;Alphabetically</th> <th>&emsp;Reviews</th> <th>&emsp;Ratings</th> <th>&emsp;Categories</th></tr>
			<td><label><a href='/Items/all'>All</a></label></td>
				
			<td>&emsp;<label><a href='/Items/lowPrice'>Lowest First</label><br>
			<label>&emsp;<a href='/Items/highPrice'>Highest First</label></td>
				
			<td>&emsp;<label><a href='/Items/ascending'>0 - Z</label><br>
			<label>&emsp;<a href='/Items/descending'>Z - 0</label></td>
				
			<td><label>&emsp;<a href='/Items/lowReview'>Lowest First</label><br>
			<label>&emsp;<a href='/Items/highReview'>Highest First</label></td>
				
			<td><label>&emsp;<a href='/Items/lowRating'>Lowly Rated</label><br>
			<label>&emsp;<a href='/Items/highRating'>Highly Rated</label></td>
				
			<td><label>&emsp;<a href='/Items/cateMeat'>Meats</label><br>
			<label>&emsp;<a href='/Items/cateVege'>Vegetables</label></td>
				
			<td><label><a href='/Items/index'>Future</label><br>
			<label><a href='/Items/index'>Future</label></td>
		</table><br>
		
		<?php 

		foreach ($data as $items) {
			echo "
				<div class='item'>
					<img src='/images/$items->image' class='image' align='left'>
					<h3>$items->name</h3>
					<h5>Price: $items->price$</h5>
					<h5>Rating: $items->rating</h5>
					<a href=/Items/addToCart?item_id=$items->item_id&price=$items->price' addToCart class ='btn' id ='something'>Add to cart</a>
					<a href='addToWishList?item_id=$items->item_id'addToWishlist class='btn btn-info'> Add to wishlist</a>
				</div> <br>";
		}
		?>

		<?php $this->view('shared/toTop'); ?>
		
		</div>
		<br>
		
</body>

</html>
