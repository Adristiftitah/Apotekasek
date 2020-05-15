<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/Rest_Controller.php';
require APPPATH . 'libraries/Format.php';

class Obat extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_obat','obat');
    }

    public function index_get()
    {
        $id = $this->get('kode_obat');
        if($id === null){
            $obt = $this->obat->getObat();
        }else{
            $obt = $this->obat->getObat($id);
        }

        if($obt){
            $this->response([
                'status' => true,
                'data'   => $obt
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status'  => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('kode_obat');

        if($id===null){
            $this->response([
                'status'  => false,
                'message' => 'Provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->obat->deleteObat($id) > 0) {
                $this->response([
                    'status'    => true,
                    'kode_obat' => $id,
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
            'kode_obat'          => $this->post('kode_obat'),
            'merk_obat'          => $this->post('merk_obat'),
            'jenis_obat'         => $this->post('jenis_obat'),
            'harga'              => $this->post('harga'),
            'tanggal_kadaluarsa' => $this->post('tanggal_kadaluarsa'),
            'stok'               => $this->post('stok'),
        ];

        if($this->obat->createObat($data) > 0){
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
        $id = $this->put('kode_obat');
        $data = [
            'kode_obat'          => $this->put('kode_obat'),
            'merk_obat'          => $this->put('merk_obat'),
            'jenis_obat'         => $this->put('jenis_obat'),
            'harga'              => $this->put('harga'),
            'tanggal_kadaluarsa' => $this->put('tanggal_kadaluarsa'),
            'stok'               => $this->put('stok'),
        ];

        if($this->obat->updateObat($data, $id) > 0){
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