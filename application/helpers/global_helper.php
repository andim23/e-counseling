<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function printrdata($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
function printrdatax($data){
	printrdata($data);
	exit();
}
function vardumpdata($data){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}
function vardumpdatax($data){
	vardumpdata($data);
	exit();
}
