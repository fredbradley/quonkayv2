<?php
function fetch_user($username) {
	global $db;
	
//	$user = $talentcow->getUser($username);
$user = "hello mum";	
	return $user;
	}

function smarty_function_user($params, &$smarty) {
	$user = fetch_user($params['username']);
	$smarty->assing($params['assign'], $user);
	}
?>