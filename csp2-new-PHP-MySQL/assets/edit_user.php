<?php

require '../connect.php';

session_start();

$id = $_GET['id'];

$sql = "select * from users where id = '$id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
extract($user);

// echo $id;

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);

// echo $users[$id]['username'] . '<br>' . $users[$id]['password'] . '<br>' . $users[$id]['email'] . '<br>' . $users[$id]['role'];

echo '
<div class="form-group">
	<label>Username:</label> <input name="username" class="form-control" type="text" value="'.$username.'"> <br>';

	if ($_SESSION['role'] != 'admin'){
	}

	echo '
		<label>Password:</label> <input name="password" class="form-control" type="password" value="'.$password.'"> <br>';
	
	echo '
	<label>Email:</label> <input name="email" class="form-control" type="email" value="'.$email.'"> <br>';

	if ($_SESSION['role'] == 'admin') {
	echo '<label>Role:</label>
	<select name="role" class="form-control">';

	$roles = ['admin', 'staff', 'customer'];
	
	foreach($roles as $role) {
		if($role == $role_id) {
			echo '<option selected>'.$role.'</option>';
		} else {
			echo "<option>$role</option>";
		}

	}

	echo '
	</select>
	</div>';
	} else {
		echo '<label>Image:</label>
		<input name="image" class="form-control" type="file" value"'.$users[$id]['image'].'">';
	}

mysqli_close($conn);
