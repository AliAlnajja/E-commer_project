<html>
<head>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">

	<style>
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
	

	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Wishlist</title>
</head>
<body>
	<div class='container'>
		
		<?php $this->view('shared/header'); ?>
		
		<br>
		<form method="post" action='/Items/search'>
		<input type="text" name="search" />
		<input type="submit" value="Search!" />
		</form>
		<?php 
		foreach ($data as $addedToCarts) {
			$items = new \app\models\Items();
			$item = $items->get($addedToCarts->item_id);
			echo "
				<div>
					<img src='/images/$item->image' width='128' height='128'/>
	  			<div>

	    		<p style='font-size:150%;' >$item->name</p>
	    		<p>Price: $item->price$</p>
	    		<p>Stock: $item->stock</p>
	    		<p>Category: $item->category</p>
	    		<p>Rating : $item->rating</p>
	    		<a href=/Items/addToCart?item_id=$item->item_id' addToCart class ='btn' id ='something'>Add to cart</a>
	    		<a href='/Items/deleteFromWishList?item_id=$item->item_id'deleteFromWishlist class='btn'> Delete from wishlist</a>
	  			</div>
				</div>";
				}
		
		?>
		
		<?php $this->view('shared/toTop'); ?>
		
	</div>
</body>
</html>