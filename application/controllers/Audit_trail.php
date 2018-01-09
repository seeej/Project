<?php
/**
 * Created by PhpStorm.
 * User: Seeeeej
 * Date: 12/19/2017
 * Time: 1:11 PM
 */

class Audit_trail extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->library('session');
        if (!$this->session->has_userdata('isloggedin')) {
            redirect('/login');
        }
    }

    public function index() {
        $this->page();
    }

    public function page() { # to be changed to page()
        $data = array(
            'title' => 'Audit Trail Management',
            'heading' => 'Audit Trail'
        );
        $this->load->view("paper/includes/header", $data);
        $this->load->view("paper/includes/footer");
    }
}