<?php
class Contact_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getContacts($limit = NULL, $offset = NULL)
    {
        $query = '';
        
        if(!empty($limit) && !empty($offset)){
            $this->db->order_by('contact_creation_date', 'desc'); 
            $query = $this->db->get('Contacts', $offset, $limit);    
        }
        else{
            $query = $this->db->get('Contacts');
        }
        
        return $query->result();
    }
    
    function getContact($id)
    {
        $query = '';
        
        $this->db->where('contact_id', $id);
        $query = $this->db->get('Contacts');
        
        return $query->result();
    }    
    
    function insert($name, $email, $phone, $comment, $date)
    {
        $data = array (
            'contact_name' => $name,
            'contact_email' => $email,
            'contact_phone_number' => $phone,
            'contact_comment' => $comment,
            'contact_creation_date' => $date
        );

        $this->db->insert('Contacts', $data);
        
        return $this->db->affected_rows();
    }

    function delete($id)
    {
        $this->db->where('contact_id', $id);
        $this->db->delete('Contacts');
        
        return $this->db->affected_rows();
    }
    
    function update($name, $email, $phone, $comment, $date)
    {
        $data = array (
            'contact_name' => $name,
            'contact_email' => $email,
            'contact_phone_number' => $phone,
            'contact_comment' => $comment,
            'new_creation_date' => $date
        );

        $this->db->where('contact_id', $id);
        $this->db->update('Contacts', $data); 
        
        return $this->db->affected_rows();
    }

}

?>