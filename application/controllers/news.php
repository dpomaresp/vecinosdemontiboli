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
		$this->load->model('new_model');

		$page_size = $this->config->item('pagination_size');
		$max_pages = floor($this->new_model->count()/$page_size);

		if($this->new_model->count()%$page_size > 0){
			$max_pages++;
		}

		if($number > 0 && $number <= $max_pages){
			$offset = ($number-1)*$page_size;

			$last_news = $this->new_model->getNews($offset, $page_size);
			$data['news'] = $last_news;
			$data['page'] = $number;
		
			$this->load->view('news', $data);
		}
		else{
			echo 'Número de página incorrecto';
		}
	}
}