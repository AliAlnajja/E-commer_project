<style>
.item {
}

.image {
	float: left;
	width: 	138px;
	height: 138px;
}

#something.btn {
			background-color: yellow; /* Green */
  			border: none;
  			color: black;
  			padding: 6px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			
		}

		.btn {
			background-color: #03f0fc; /* Green */
  			border: none;
  			color: black;
  			padding: 6px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
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
				<a href=/Items/addToCart?item_id=$items->item_id' addToCart class ='btn' id ='something'>Add to cart</a>
				<a href='addToWishList?item_id=$items->item_id'addToWishlist class='btn btn-info'> Add to wishlist</a>
			</div> <br>";
	}
?>

