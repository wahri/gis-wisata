<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->data['active_menu'] = 'home';
        $this->data['wisata'] = $this->db->get('wisatas')->result_array();
        $this->data['nama'] ="wahyu";

        $this->load->view('home', $this->data);
    }
    public function map()
    {
        $this->data['active_menu'] = 'map';
        $this->data['wisata'] = $this->db->get('wisatas')->result_array();
        $this->data['nama'] ="wahyu";

        $this->load->view('map', $this->data);
    }

    public function detail($id)
    {
        $this->data['active_menu'] = 'detail';
        $this->data['wisata'] = $this->db->get_where('wisatas', ['id_wisata' => $id])->row_array();
        
        $this->db->limit(4);
        $this->data['wisata_lainnya'] = $this->db->get_where('wisatas', ['id_wisata !=' => $id])->result_array();
        $this->load->view('detail', $this->data);
    }
}
