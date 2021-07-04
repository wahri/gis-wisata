<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
}

class Admin_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['user_login'] = $this->db->get_where('admin', ['id_admin' => $this->session->userdata('id')])->row_array();

        if ($this->session->userdata('status') != "lgn") {
            redirect('login');
        }
    }
}
