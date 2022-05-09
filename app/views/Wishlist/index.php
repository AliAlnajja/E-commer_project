<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="/app/styles/noReposition.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/general.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/linkbuttons.css">
	<link rel="stylesheet" type="text/css" href="/app/styles/items.css">
	
	<title><?= _("Wishlist") ?></title>
</head>

<body>
	<div class='container'>
		<?php $this->view('shared/header'); ?>
		
		<h1><?= _("Wishlist") ?></h1>
		<br>

		<?php 
			foreach ($data as $addedToCarts) {
				$items = new \app\models\Items();
				$item = $items->get($addedToCarts->item_id);
				echo "
					<div class='item'>
						<img src='/images/$item->image' align='left'/>
						<h3>$item->name</h3>
						<h5>" . _("Price: ") . "$item->price$&emsp;" . _("Category: ") . "$item->category</h5>
						<h5>" . _("Rating: ") . "$item->rating&emsp;" . _("Stock: ") . "$item->stock</h5>					
						<a href=/Items/addToCart?item_id=$item->item_id' addToCart class ='linkbutton' id ='buy'>" . _("Add to cart") . "</a>
						<a href='/Items/deleteFromWishList?item_id=$item->item_id'deleteFromWishlist class='linkbutton'>" . _("Delete from wishlist") . "</a>
					</div>";
				}
			?>
		
		<?php $this->view('shared/toTop'); ?>
	</div>
</body>

</html>