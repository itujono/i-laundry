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

function count_notif(){
	$CI =& get_instance();
    $CI->db->select('isreadORDER, idPARTNER');
	$CI->db->from('orders');
    $partner = $CI->session->userdata('idUSER');

    if($CI->session->userdata('roleUSER') == 26){
        $CI->db->where('idPARTNER',$partner);
         $CI->db->where('isreadORDER',0);
    } elseif ($CI->session->userdata('roleUSER') == 22) {
        $CI->db->where('orders.isreadadminORDER', 0);
    }

	$data = $CI->db->get()->num_rows();
	return $data;
}

function selectunreadorders(){
	$CI =& get_instance();
	$CI->db->select('orders.idORDER, orders.idCUSTOMER, kodeORDER, pickuptimeORDER, pickupADDRESSORDERKOTOR, createdateORDER');
	$CI->db->select('customers.nameCUSTOMER');
	$CI->db->from('orders');
	$CI->db->join('customers','customers.idCUSTOMER = orders.idCUSTOMER');
    $partner = $CI->session->userdata('idUSER');
    
    if($CI->session->userdata('roleUSER') == 26){
        $CI->db->where('orders.idPARTNER',$partner);
        $CI->db->where('orders.isreadORDER', 0);
    } elseif ($CI->session->userdata('roleUSER') == 22) {
        $CI->db->where('orders.isreadadminORDER', 0);
    }
	
	$CI->db->order_by('createdateORDER', 'DESC');
	$data = $CI->db->get()->result();
	return $data;
}

function timeAgo($timestamp){

    $time = time() - $timestamp;

    if ($time < 60)
    return ( $time > 1 ) ? $time . ' detik yang lalu' : 'satu detik';

    elseif ($time < 3600) {
    $tmp = floor($time / 60);
    return ($tmp > 1) ? $tmp . ' menit yang lalu' : ' satu menit yang lalu';
    }

    elseif ($time < 86400) {
    $tmp = floor($time / 3600);
    return ($tmp > 1) ? $tmp . ' jam yang lalu' : ' satu jam yang lalu';
    }

    elseif ($time < 2592000) {
    $tmp = floor($time / 86400);
    return ($tmp > 1) ? $tmp . ' hari lalu' : ' satu hari lalu';
    }

    elseif ($time < 946080000) {
    $tmp = floor($time / 2592000);
    return ($tmp > 1) ? $tmp . ' bulan lalu' : ' satu bulan lalu';
    }

    else {
    $tmp = floor($time / 946080000);
    return ($tmp > 1) ? $tmp . ' years' : ' a year';
    }
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

function replacesymbol($string){
    return str_replace([' ','&',',','.','(',')','!','?'], ['','','','','','','',''], $string);
}