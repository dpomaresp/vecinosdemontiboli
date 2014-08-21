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
    
    function insert($title, $description, $date)
    {
        $data = array (
            'new_title' => $title,
            'new_description' => $description,
            'new_creation_date' => $date
        );

        $this->db->insert('News', $data);
        
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('new_id', $id);
        $this->db->delete('News');
        
        return $this->db->affected_rows();
    }
    
    function update($id, $title, $description, $date)
    {
        $data = array (
            'new_title' => $title,
            'new_description' => $description,
            'new_creation_date' => $date
        );

        $this->db->where('new_id', $id);
        $this->db->update('News', $data); 
        
        return $this->db->affected_rows();
    }

}

?>