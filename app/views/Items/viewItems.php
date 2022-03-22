<style>
.item {
}

.image {
	float: left;
	width: 	138px;
	height: 138px;
}


</style>
<?php 
	foreach ($data as $items) {
		echo "
			<div class='item'>
				<img src='/images/$items->image' class='image' align='left'>
				<h3>$items->name</h3>
				<h5>Price: $items->price$</h5>
				<h5>Rating: $items->rating</h5>
				<input type='submit' name='add-to-cart' value='add to cart'/>
				<a href='addToWishList?item_id=$items->item_id'addToWishlist class='btn btn-info'> Add to wishlist</a>
			</div> <br>";
	}
?>
