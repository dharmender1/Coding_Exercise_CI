<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    /*
    **************
    # get_users function for retrieve all users 
    ***************
    */

    public function get_users()
    {

        $query = $this->db->get('users');
        return $query->result();
    }

    /*
    **************
    # insertUser function for insert user record in DB 
    ***************
    */
    
    public function insertUser($data)
    {
        return $this->db->insert('users',$data);

    }

    public function searchUser($id)
    {
         $this->db->where('id',$id);
         $query = $this->db->get('users');
         return $query->row();

    }

    public function update_User($id, $data)
    {
        $this->db->where('id',$id);
        return $this->db->update('users', $data);

    }

    public function delete_user($id)
    {
        return $this->db->delete('users',['id' => $id]);
    }

}
?>