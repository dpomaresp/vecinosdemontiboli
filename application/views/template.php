<?php
	$data_header = array($header_title, $stylesheets, $current_page);
    $this->load->view('includes/header', $data_header);
    
    $footer = $this->load->view('includes/footer', NULL, TRUE);

    $data = array(	
    				'footer' => $footer);
    $this->load->view($content, $data);
?>