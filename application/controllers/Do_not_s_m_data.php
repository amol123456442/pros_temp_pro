<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Do_not_s_m_data extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Budget Analysis and Current Setup Audit';
        $this->load->view('footer/do_not_sell_my_data', $data);
    }
}
