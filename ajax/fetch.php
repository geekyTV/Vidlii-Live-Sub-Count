<?php

$output = file_get_contents("https://www.vidlii.com/api?ty=user&ta=".$_GET['username']);

$user_info = json_decode($output, true);

if ($user_info['r'] == "not_found") {
	echo "not_found";
} else {
echo $user_info['subscribers']."|".$user_info['avatar']."|".$user_info['displayname'];
}

?>
