<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/noReposition.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/items.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/linkbuttons.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/filters.css">
	
	<title><?= _("Browse") ?></title>
</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
		
		<h1><?= _("Browse") ?></h1>
		
		<form method="post" action='/Items/search'>
		<input type="text" name="search" />
		<input type="submit" value="Search" />
		</form>
		
		<table>
			<tr><th><?= _("All") ?></th> <th>&emsp;<?= _("Price") ?></th> <th>&emsp;<?= _("Alphabetically") ?></th> <th>&emsp;<?= _("Reviews") ?></th> <th>&emsp;<?= _("Ratings") ?></th> <th>&emsp;<?= _("Categories") ?></th></tr>
			<td><label><a href='/Items/all' class='filter'><?= _("All") ?></a></label></td>
				
			<td>&emsp;<label><a href='/Items/lowPrice' class='filter'><?= _("Lowest First") ?></label><br>
			<label>&emsp;<a href='/Items/highPrice' class='filter'><?= _("Highest First") ?></label></td>
				
			<td>&emsp;<label><a href='/Items/ascending' class='filter'><?= _("0 - Z") ?></label><br>
			<label>&emsp;<a href='/Items/descending' class='filter'><?= _("Z - 0") ?></label></td>
				
			<td><label>&emsp;<a href='/Items/lowReview' class='filter'><?= _("Lowest First") ?></label><br>
			<label>&emsp;<a href='/Items/highReview' class='filter'><?= _("Highest First") ?></label></td>
				
			<td><label>&emsp;<a href='/Items/lowRating' class='filter'><?= _("Lowly Rated") ?></label><br>
			<label>&emsp;<a href='/Items/highRating' class='filter'><?= _("Highly Rated") ?></label></td>
				
			<td><label>&emsp;<a href='/Items/cateMeat' class='filter'><?= _("Meats") ?></label><br>
			<label>&emsp;<a href='/Items/cateVegetable' class='filter'><?= _("Vegetables") ?></label></td>
			
			<td><label>&emsp;<a href='/Items/cateBaked' class='filter'><?= _("Baked") ?></label><br>
			<label>&emsp;<a href='/Items/cateUseless' class='filter'><?= _("Useless") ?></label></td>
			
			<td><label>&emsp;<a href='/Items/index' class='filter'><?= _("Future") ?></label><br>
			<label>&emsp;<a href='/Items/index' class='filter'><?= _("Future") ?></label></td>
		</table><br>
		
		<?php 
			foreach ($data as $items) {
				echo "
					<div class='item'>
						<img src='/images/$items->image' align='left'>
						<h3>$items->name</h3>
						<h5>" . _("Price: ") . "$items->price$&emsp;" . _("Category: ") . "$items->category</h5>
						<h5>" . _("Rating: ") . "$items->rating&emsp;" . _("Stock: ") . "$items->stock</h5>
						<a href=/Items/addToCart?item_id=$items->item_id&price=$items->price'addToCart class='linkbutton' id='buy'>" . _("Add to cart") . "</a>
						<a href='addToWishList?item_id=$items->item_id'addToWishlist class='linkbutton'>" . _("Add to wishlist") . "</a>
					</div> <br>";
			}
		?>

		<?php $this->view('shared/toTop'); ?>	
	</div>
</body>

</html>
