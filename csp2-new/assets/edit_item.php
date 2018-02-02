<?php

$id = $_GET['id'];

// echo $id;

$file = file_get_contents('items.json');
$items = json_decode($file, true);

foreach ($items as $key => $item) {
	if ($items[$key]['id']==$id) {
		$id = $key;
		break;
	}
}

//echo $items[$id]['name'] . '<br>' . $items[$id]['description'] . '<br>' . $items[$id]['image'] . '<br>' . $items[$id]['price'] . '<br>' . $items[$id]['category'];

echo '
<div class="form-group">
	<label>Name:</label> <input name="name" class="form-control" type="text" value="'.$items[$id]['name'].'"> <br>
	<label>Description:</label> <input name="description" class="form-control" type="text" value="'.$items[$id]['description'].'"> <br>
	<label>Image:</label> <input name="image" class="form-control" type="file" value="'.$items[$id]['image'].'"> <br>
	<label>Price:</label> <input name="price" class="form-control" type="number" value="'.$items[$id]['price'].'" step="any"> <br>
	<label>Category:</label>
	<select name="category" class="form-control">';

	$categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5', 'Category 6'];
	
	foreach($categories as $category) {
		if($category == $items[$id]['category']) {
			echo '<option selected>'.$category.'</option>';
		} else {
			echo "<option>$category</option>";
		}

	}

	echo '
	</select>
</div>';

// echo '
// <div class="form-group">
// 	<label>Name:</label> <input name="name" class="form-control" type="text" value="'.$items[$id]['name'].'"> <br>
// 	</div>';