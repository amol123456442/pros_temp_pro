<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerStories  extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Custore stories';
        $this->load->view('solutions/customer_stories', $data);
    }
}
