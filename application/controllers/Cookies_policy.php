<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cookies_policy extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Budget Analysis and Current Setup Audit';
        $this->load->view('footer/cookie_policy', $data);
    }
}
