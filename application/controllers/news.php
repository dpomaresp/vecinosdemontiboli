<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->model('new_model');
	    
	    $last_news = $this->new_model->getNews();
	    
	    $data['news'] = $last_news;
	    
		$this->load->view('news', $data);
	}

	public function page($number = 1){
		global $config;

		$from_date = $this->input->post('starting_date');
		$to_date = $this->input->post('ending_date');

		$this->load->library('pagination');
		$this->load->model('new_model');

		$page_size = $this->config->item('per_page');

		if($number > 0){
			$offset = ($number-1)*$page_size;

			if(!empty($from_date) && !empty($to_date)){
				$last_news = $this->new_model->getNews($offset, $page_size, $from_date, $to_date);

				$data['from_date'] = $from_date;
				$data['to_date'] = $to_date;
			}
			else{
				$last_news = $this->new_model->getNews($offset, $page_size);
				$data['from_date'] = NULL;
				$data['to_date'] = NULL;
			}
			
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