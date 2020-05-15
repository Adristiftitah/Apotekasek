<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/Rest_Controller.php';
require APPPATH . 'libraries/Format.php';

class Beli extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_beli','beli');
    }

    public function index_get()
    {
        $id = $this->get('kode_beli');
        if($id === null){
            $bli = $this->beli->getBeli();
        }else{
            $bli = $this->beli->getBeli($id);
        }

        if($bli){
            $this->response([
                'status' => true,
                'data'   => $bli
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status'  => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('kode_beli');

        if($id===null){
            $this->response([
                'status'  => false,
                'message' => 'Provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->beli->deleteBeli($id) > 0) {
                $this->response([
                    'status'    => true,
                    'kode_beli' => $id,
                    'message'   => 'deleted'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response([
                    'status'  => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            'kode_beli'           => $this->post('kode_beli'),
            'kode_pelanggan'      => $this->post('kode_pelanggan'),
            'kode_obat'           => $this->post('kode_obat'),
            'jenis_obat'          => $this->post('jenis_obat'),
            'banyak_beli'         => $this->post('banyak_beli'),
            'harga'               => $this->post('harga'),
            'tanggal_beli'        => $this->post('tanggal_beli'),
        ];

        if($this->beli->createBeli($data) > 0){
            $this->response([
                'status'  => true,
                'message' => 'new obat has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status'  => false,
                'message' => 'failed to create new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('kode_beli');
        $data = [
            'kode_beli'           => $this->put('kode_beli'),
            'kode_pelanggan'      => $this->put('kode_pelanggan'),
            'kode_obat'           => $this->put('kode_obat'),
            'jenis_obat'          => $this->put('jenis_obat'),
            'banyak_beli'         => $this->put('banyak_beli'),
            'harga'               => $this->put('harga'),
            'tanggal_beli'        => $this->put('tanggal_beli'),
        ];

        if($this->beli->updateBeli($data, $id) > 0){
            $this->response([
                'status'  => true,
                'message' => 'data obat has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status'  => false,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}




?>