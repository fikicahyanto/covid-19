<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Rest_server extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    
    // show data mahasiswa
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $covid = $this->db->get('indonesia')->result();
        } else {
            $this->db->where('id', $id);
            $covid = $this->db->get('indonesia')->result();
        }
        $this->response($covid, 200);
    }

    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'name'         => $this->post('name'),
                    'positif'      => $this->post('positif'),
                    'sembuh'       => $this->post('sembuh'),
                    'meninggal'    => $this->post('meninggal'));
        $insert = $this->db->insert('indonesia', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data mahasiswa
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'           => $this->put('id'),
                    'name'         => $this->put('name'),
                    'positif'      => $this->put('positif'),
                    'sembuh'       => $this->put('sembuh'),
                    'meninggal'    => $this->put('meninggal'));
        $this->db->where('id', $id);
        $update = $this->db->update('indonesia', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete mahasiswa
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('indonesia');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
