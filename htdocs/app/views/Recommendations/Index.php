<html>
<head>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/styles/darkmode.css">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Recommendations</title>
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
		foreach ($data as $recommendedItems) {
			$items = new \app\models\Items();
			$item = $items->get($recommendedItems->item_id);
			echo "
				<div>
					<img src='/images/$item->image' width='128' height='128'/>
	  			<div>

	    		<p style='font-size:150%;' >$item->name</p>
	    		<p>Price: $item->price$</p>
	    		<p>Stock: $item->stock</p>
	    		<p>Category: $item->category</p>
	    		<p>Rating : $item->rating</p>
	    		<input type='submit' name='add-to-cart' value='add to cart'/>
	    		<input type='submit' name='add-to-wishlist' value='add to wishlist'/>
	  			</div>
				</div>";
				}
		
		?>
	</div>
</body>
</html>