<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
    
    function Contact() {
        parent::__construct();
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|required');
        
    }

	public function index()
	{
	    $data['header_title'] = 'Asociación Vecinos de Montíboli - Contacto';
	    $data['stylesheets'] = array('reset', 'grid_12', 'style');
	    $data['current_page'] = 'Contact';
	    $data['data_content'] = array(
	    						'nombre' => NULL,
	    						'email' => NULL,
	    						'telefono' => NULL,
	    						'mensaje' => NULL
	    						);

	    $this->load->view('template', $data);
	}
	
	public function submit()
	{
	    if($this->form_validation->run()) {
	        $this->load->library('email');
	        $this->load->model('contact_model');
	        
	        error_reporting(E_ALL ^ E_NOTICE);
	        
	        // $this->email->set_mailtype('html');

         //    $this->email->from($this->input->post('email'), $this->input->post('nombre'));
         //    $this->email->to('asociacion@vecinosdemontiboli.com');
            
         //    $this->email->subject('Nuevo contacto desde www.vecinosdemontiboli.com');
         //    $body = '<ul><li><b>Teléfono del contacto: </b>'.$this->input->post('telefono').'</li><br/>'.
         //            '<li><b>Mensaje: </b>'.'<br/>'.$this->input->post('mensaje').'</li></ul>';
         //    $this->email->message($body);	
            
         //    $this->email->send();

            $this->contact_model->insert($this->input->post('nombre'), $this->input->post('email'), $this->input->post('telefono'),
            	$this->input->post('mensaje'), date('Y-m-d H:i:s'));
            
	        redirect('home', 'refresh');
	    }
	    else{
	    	$data['header_title'] = 'Asociación Vecinos de Montíboli - Contacto';
		    $data['stylesheets'] = array('reset', 'grid_12', 'style');
		    $data['current_page'] = 'Contact';
		    
		    $data['data_content'] = array(
		    						'nombre' => $this->input->post('nombre'),
		    						'email' => $this->input->post('email'),
		    						'telefono' => $this->input->post('telefono'),
		    						'mensaje' => $this->input->post('mensaje')
		    						);

	        $this->load->view('template', $data);
	    }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */