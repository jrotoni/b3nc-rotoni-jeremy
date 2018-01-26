<?php

$id = $_GET['id'];

// echo $id;

$file = file_get_contents('users.json');
$users = json_decode($file, true);

// echo $users[$id]['username'] . '<br>' . $users[$id]['password'] . '<br>' . $users[$id]['email'] . '<br>' . $users[$id]['role'];

echo '
<div class="form-group">
	<label>Username:</label> <input name="username" class="form-control" type="text" value="'.$users[$id]['username'].'"> <br>
	<label>Password:</label> <input name="password" class="form-control" type="password"> <br>
	<label>Email:</label> <input name="email" class="form-control" type="email" value="'.$users[$id]['email'].'"> <br>
	<label>Role:</label>
	<select name="role" class="form-control">';
	
/*	if ($users[$id]['role'] == 'admin') {
		echo '<option selected>admin</option>
		<option>user</option>';
	} else {
		echo '<option>admin</option>
		<option selected>user</option>';
	}*/

	$roles = ['admin', 'user'];
	
	foreach($roles as $role) {
		if($role == $users[$id]['role']) {
			echo '<option selected>'.$role.'</option>';
		} else {
			echo "<option>$role</option>";
		}

	}

	echo '
	</select>
</div>';