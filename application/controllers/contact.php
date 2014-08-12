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
		$this->load->view('contact');
	}
	
	public function submit()
	{
	    if($this->form_validation->run()){
	        $this->load->library('email');
	        
	        error_reporting(E_ALL ^ E_NOTICE);
	        
	        $this->email->set_mailtype('html');

            $this->email->from($this->input->post('email'), $this->input->post('nombre'));
            $this->email->to('asociacion@vecinosdemontiboli.com'); 
            
            $this->email->subject('Nuevo contacto desde www.vecinosdemontiboli.com');
            $body = '<ul><li><b>Teléfono del contacto: </b>'.$this->input->post('telefono').'</li><br/>'.
                    '<li><b>Mensaje: </b>'.'<br/>'.$this->input->post('mensaje').'</li></ul>';
            $this->email->message($body);	
            
            $this->email->send();
            
	        redirect('home', 'refresh');
	    }
	    else{
	        $this->load->view('contact');
	    }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */