<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->load->model('new_model');
	    
	    $last_three_news = $this->new_model->getNews(0, 3);
	    
	    $data_header['header_title'] = 'Asociación Vecinos de Montíboli - Home';
	    $data_header['stylesheets'] = array('reset', 'grid_12', 'style', 'magnific-popup', 'slider');
	    $data_header['current_page'] = 'Home';
	    
	    $this->load->view('includes/header', $data_header);
	    
	    $data['news'] = $last_three_news;
	    
	    $data['footer'] = $this->load->view('includes/footer', NULL, TRUE);

	    $this->load->view('home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */