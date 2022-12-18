<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH. 'libraries/Format.php';
require APPPATH. 'libraries/RestController.php';
use chriskacerguis\RestServer\RestController;



class ApiUserController extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index_get()
    {

        $users = new UserModel;
        $result = $users->get_users();
        $this->response($result,200);

    }

    public function storeUser_post()
    {
        $users = new UserModel;
        $data = [
            'name' => $this->input->post('username'),
            'email' => $this->input->post('useremail'),

        ];

        $result = $users->insertUser($data);
        if($result>0){
            $this->response([
                'status'=>true,
                'message'=>"User add successfully"
            ],RestController::HTTP_OK);
        }
        else{
            $this->response([
                'status'=>false,
                'message'=>"Failed to create new user!!"
            ],RestController::HTTP_BAD_REQUEST);

        }
        //$this->response($data,200);

    }

    /**
     * Search User
     */
    public function findUser_get($id)
    {
        $users = new UserModel;
        $result = $users->searchUser($id);
        $this->response($result,200);
    }

    /*
        Update user details
    */

    public function updateUser_put($id)
    {
        $users = new UserModel;
        $data = [
            'name' => $this->put('name'),
            'email' => $this->put('email'),

        ];

        $result = $users->update_User($id, $data);
        if($result>0){
            $this->response([
                'status'=>true,
                'message'=>"User updated successfully"
            ],RestController::HTTP_OK);
        }
        else{
            $this->response([
                'status'=>false,
                'message'=>"Failed to update user!!"
            ],RestController::HTTP_BAD_REQUEST);

        }
    }

        /**
         * Function for delete user details
         */
    public function deleteUser_delete($id)
    {
        $user = new UserModel;
        $result = $user->delete_user($id);

        if($result>0){
            $this->response([
                'status'=>true,
                'message'=>"User deleted successfully"
            ],RestController::HTTP_OK);
        }
        else{
            $this->response([
                'status'=>false,
                'message'=>"Failed to delete user!!"
            ],RestController::HTTP_BAD_REQUEST);

        }


    }
}

?>