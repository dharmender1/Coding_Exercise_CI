<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH. 'libraries/Format.php';
require APPPATH. 'libraries/RestController.php';
use chriskacerguis\RestServer\RestController;


class ApiOrderController extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OrderModel');
    }

    /**
     * For retrieve all orders
     */
    public function index_get()
    {

        $orders = new OrderModel;
        $result = $orders->get_orders();
        $this->response($result,200);

    }

    /**
     * For Save order in orders table
     */
    public function storeOrder_post()
    {
        $orders = new OrderModel;
        $data = [
            'customer_id' => $this->input->post('customerID'),
            'product_name' => $this->input->post('productName'),
            'quantity' => $this->input->post('quantity'),
            'order_date' => date('Y-m-d H:i:s'),


        ];

        $result = $orders->insertOrder($data);
        if($result>0){
            $this->response([
                'status'=>true,
                'message'=>"Order place successfully"
            ],RestController::HTTP_OK);
        }
        else{
            $this->response([
                'status'=>false,
                'message'=>"Failed to place order!!"
            ],RestController::HTTP_BAD_REQUEST);

        }

    }

    /**
     * Search any perticular Order
     */
    public function editUser_get($id)
    {
        $order = new OrderModel;
        $result = $order->searchOrder($id);
        $this->response($result,200);
    }

    /*
        Update user details
    */

    public function updateOrder_put($id)
    {
        $order = new OrderModel;
        $data = [
            'customer_id' => $this->put('customerID'),
            'product_name' => $this->put('productName'),
            'quantity' => $this->put('quantity'),
            'order_date' => date('Y-m-d H:i:s'),

        ];

        $result = $order->update_order($id, $data);
        if($result>0){
            $this->response([
                'status'=>true,
                'message'=>"Order updated successfully"
            ],RestController::HTTP_OK);
        }
        else{
            $this->response([
                'status'=>false,
                'message'=>"Failed to update order!!"
            ],RestController::HTTP_BAD_REQUEST);

        }
    }

        /**
         * Function for delete user details
         */
    public function deleteOrder_delete($id)
    {
        $user = new OrderModel;
        $result = $user->delete_order($id);

        if($result>0){
            $this->response([
                'status'=>true,
                'message'=>"Order deleted successfully"
            ],RestController::HTTP_OK);
        }
        else{
            $this->response([
                'status'=>false,
                'message'=>"Failed to delete order!!"
            ],RestController::HTTP_BAD_REQUEST);

        }

    }
}

?>