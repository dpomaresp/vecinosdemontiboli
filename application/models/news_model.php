<?php
class News_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getNews($offset = NULL, $limit = NULL)
    {
        $query = '';
        
        if(!empty($limit) && $offset >= 0){
            $this->db->limit($limit, $offset); 
            $this->db->order_by('new_creation_date', 'desc');
            $query = $this->db->get('News');    
        }
        else{
            $this->db->order_by('new_creation_date', 'desc');
            $query = $this->db->get('News');
        }
        
        return $query->result();
    }
    
    function getNew($id)
    {
        $query = '';
        
        $this->db->where('new_id', $id);
        $query = $this->db->get('News');
        
        return $query->result();
    }    
}

?>