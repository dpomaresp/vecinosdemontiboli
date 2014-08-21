<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->model('new_model');
	    
	    $last_news = $this->new_model->getNews();
	    
	    $data['news'] = $last_news;
	    
		$this->load->view('news', $data);
	}
}