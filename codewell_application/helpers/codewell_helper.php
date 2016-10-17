<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function encode($string){
	$CI =& get_instance();
	$id = $CI->encrypt->encode($string);
	$id = str_replace(['+','/'], ['==11==','==12=='], $id);
	return $id;
}

function decode($string){
	$CI =& get_instance();
	$id = str_replace(['==11==','==12=='], ['+','/'], $string);
	$id = $CI->encrypt->decode($id);
	return $id;
}

function txt($string){
	return addslashes($string);
}

function dF($date, $format){
	return date($format, strtotime($date));
}

function folderENCRYPT($id,$type=0){
    return base64_encode($id);
}

function img_view($link){
	$dir = 'assets/upload/'.$link;
	$map = directory_map($dir, FALSE, TRUE);
    if(!empty($map[0])){
    	$img = base_url().$dir.'/'.$map[0];
    }else{
		$img = base_url().'assets/frontend/images/ava.png';
    }

    return $img;
}