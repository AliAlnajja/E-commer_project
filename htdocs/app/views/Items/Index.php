<html>
<head>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Items</title>
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
		foreach ($data as $items) {
			echo "
				<div>
					<img src='/images/$items->image' width='128' height='128'/>
	  			<div>

	    		<p style='font-size:150%;' >$items->name</p>
	    		<p>Price: $items->price$</p>
	    		<p>Stock: $items->stock</p>
	    		<p>Category: $items->category</p>
	    		<p>Rating : $items->rating</p>
	    		<input type='submit' name='add-to-cart' value='add to cart'/>
	  			</div>
				</div>";
				}
		
		?>
	</div>
</body>
</html>