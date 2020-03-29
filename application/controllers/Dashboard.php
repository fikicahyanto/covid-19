<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index(){
    $data = array(
        $url = 'https://api.kawalcorona.com/indonesia/',
        $data = file_get_contents($url), // put the contents of the file into a variable
        $opendata = json_decode($data),
        'indonesia' => $opendata,
    );
        
        $this->load->view('dashboard',$data);
    }
}
