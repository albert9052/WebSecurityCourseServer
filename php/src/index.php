<?php

$host = 'db';

$user = 'fluffypony';

$pass = '12345';

$myDatabase = 'MyDatabase';

$conn = new mysqli($host, $user, $pass, $myDatabase);
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
} else {
	echo "Connected to MySQL server successfully!";
}   

$sql = 'SELECT * FROM users';
//$result = $conn->query($sql);
//echo $result;

if ($result = $conn->query($sql)) {
	$counter = 0;
	while ($data = $result->fetch_object()) {
		$users[$counter] = $data;
		$counter++;
	}
}

foreach ($users as $user) {
	echo "<br />";
	echo $user->username . " " . $user->password;
	echo "<br />";
}
?>
