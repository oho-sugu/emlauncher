<?php
switch($package->getPlatform()){
case 'Android':
	$icon = 'fa-android';
	$name = ' Android';
	break;
case 'iOS':
	$icon = 'fa-apple';
	$name = ' iOS';
	break;
case 'UWP':
	$icon = 'fa-windows';
	$name = ' UWP';
	break;
default:
	$icon = 'fa-desktop';
	$name = ' unknown';
	break;
}
if(!isset($with_name)||!$with_name){
	$name = '';
}

?>
<i class="fa <?=$icon?>"></i><?=$name?>
