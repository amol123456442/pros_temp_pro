<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndustrySpecific  extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Industry Specific';
        $this->load->view('solutions/industry_specific', $data);
    }
}
