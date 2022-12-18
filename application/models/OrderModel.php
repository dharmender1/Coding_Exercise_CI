<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderModel extends CI_Model
{
    /*
    **************
    # get_orders function for retrieve all orders 
    ***************
    */

    public function get_orders()
    {

        $query = $this->db->get('orders');
        return $query->result();
    }

    /*
    **************
    # insertUser function for insert orders record in DB 
    ***************
    */
    
    public function insertOrder($data)
    {
        return $this->db->insert('orders',$data);

    }

    public function searchOrder($id)
    {
         $this->db->where('order_id',$id);
         $query = $this->db->get('orders');
         return $query->row();

    }

    public function update_order($id, $data)
    {
        $this->db->where('order_id',$id);
        return $this->db->update('orders', $data);

    }

    public function delete_order($id)
    {
        return $this->db->delete('orders',['order_id' => $id]);
    }

}
?>