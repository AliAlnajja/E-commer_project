<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/app/styles/dark_mode.css">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Items</title>
	
	<script>
		function autoSubmit() {
			var formObject = document.forms['sorting'];
			formObject.submit();
		}
	</script>
</head>
<body>
	<div class='container'>
		
		<?php $this->view('shared/header'); ?>
		
		<br>
		<form method="post" action='/Items/search'>
		<input type="text" name="search" />
		<input type="submit" value="Search!" />
		</form>
		
		<table>
			<tr><th>All&emsp;</th> <th>&emsp;Price</th> <th>&emsp;Alphabetically</th> <th>&emsp;Reviews</th> <th>&emsp;Ratings</th></tr>
			<form name='sorting' method='post'>
				<td><label><input type="radio" name="sort" value="all" onChange="autoSubmit();"> All</label></td>
				
				<td>&emsp;<label><input type="radio" name="sort" value="lowPrice" onChange="autoSubmit();"> Lowest First</label> <br>
				<label>&emsp;<input type="radio" name="sort" value="highPrice" onChange="autoSubmit();"> Highest First</label></td>
				
				<td>&emsp;<label><input type="radio" name="sort" value="aToZ" onChange="autoSubmit();"> 0 - Z</label> <br>
				<label>&emsp;<input type="radio" name="sort" value="zToA" onChange="autoSubmit();"> Z - 0</label></td>
				
				<td><label>&emsp;<input type="radio" name="sort" value="fewReviews" onChange="autoSubmit();"> Lowest First</label> <br>
				<label>&emsp;<input type="radio" name="sort" value="lotReviews" onChange="autoSubmit();"> Highest First</label></td>
				
				<td><label>&emsp;<input type="radio" name="sort" value="lowRating" onChange="autoSubmit();"> Lowly Rated</label> <br>
				<label>&emsp;<input type="radio" name="sort" value="highRating" onChange="autoSubmit();"> Highly Rated</label></td>
			</form>
		</table> <br>
		
		<?php 
			$item = new \app\models\Items();
			$all = $item->getAll();
			$lowestPrice = $item->getLowestPrice();
			$highestPrice = $item->getHighestPrice();
			
			$select = $_POST['sort'];
			if ($select == 'all')
				$this->view('Items/viewItems', $all); 
			else if ($select == 'lowPrice')
				$this->view('Items/viewItems', $lowestPrice); 
			else if ($select == 'highPrice')
				$this->view('Items/viewItems', $highestPrice); 
			
		?>
		
		<?php $this->view('shared/toTop'); ?>
		
	</div>
</body>
</html>