<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('Promo_m');
    }

    public function index(){
        
    	$data['listpromo'] = $this->Promo_m->select_promo_in_frontend()->result();

    	foreach ($data['listpromo'] as $key => $value) {

			$map = directory_map('assets/upload/promo/'.folderENCRYPT($data['listpromo'][$key]->idPARTNER).'/'.folderENCRYPT($data['listpromo'][$key]->idPROMO), FALSE, TRUE);

			if (empty($map)) {
				$data['listpromo'][$key]->imagePROMO = base_url() . 'assets/upload/no_image_available.png';
			} else {
				$data['listpromo'][$key]->imagePROMO = base_url() . 'assets/upload/promo/'.folderENCRYPT($data['listpromo'][$key]->idPARTNER).'/'.folderENCRYPT($data['listpromo'][$key]->idPROMO).'/'.$map[0];
			}
		}
		
		if (!is_null($this->session->flashdata('message'))) {
        	$data['message'] = $this->session->flashdata('message');
        }

		$this->load->view($this->data['frontendDIR']. 'Promo',$data);
	}
}