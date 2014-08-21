<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->model('new_model');
	    
	    $last_news = $this->new_model->getNews();
	    
	    $data['news'] = $last_news;
	    
		$this->load->view('news', $data);
	}

	public function page($number){
		global $config;
		$this->load->library('pagination');
		$this->load->model('new_model');

		$page_size = $this->config->item('per_page');

		if($number > 0){
			$offset = ($number-1)*$page_size;

			$last_news = $this->new_model->getNews($offset, $page_size);
			$this->config->set_item('total_rows', $this->new_model->count());
			$data['news'] = $last_news;

			$this->pagination->initialize($config);
		
			$this->load->view('news', $data);
		}
		else{
			echo 'Número de página incorrecto';
		}
	}
}