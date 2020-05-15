<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/Rest_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pelanggan extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pelanggan','pelanggan');
    }

    public function index_get()
    {
        $id = $this->get('kode_pelanggan');
        if($id === null){
            $plgn = $this->pelanggan->getPelanggan();
        }else{
            $plgn = $this->pelanggan->getPelanggan($id);
        }

        if($plgn){
            $this->response([
                'status' => true,
                'data' => $plgn
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('kode_pelanggan');

        if($id===null){
            $this->response([
                'status' => false,
                'message' => 'Provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->pelanggan->deletePelanggan($id) > 0) {
                $this->response([
                    'status' => true,
                    'kode_pelanggan' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            'kode_pelanggan' => $this->post('kode_pelanggan'),
            'nama_pelanggan' => $this->post('nama_pelanggan'),
            'alamat' => $this->post('alamat'),
        ];

        if($this->pelanggan->createPelanggan($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new Pelanggan has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('kode_pelanggan');
        $data = [
            'kode_pelanggan' => $this->put('kode_pelanggan'),
            'nama_pelanggan' => $this->put('nama_pelanggan'),
            'alamat' => $this->put('alamat'),
        ];

        if($this->pelanggan->updatePelanggan($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data pelanggan has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}
?>