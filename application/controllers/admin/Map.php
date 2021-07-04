<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Map extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->data['nav_active'] = 'map';
    }

    public function index()
    {
        $this->data['wisata'] = $this->db->get('wisatas')->result_array();
        $this->data['title'] = 'List Data';
        $this->load->view('admin/listdata', $this->data);
    }
    public function tambahData()
    {
        if ($this->input->post('submit')){
            $config['upload_path'] = './assets/img/wisata/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '100000';
            $config['file_name'] = date('YmdHis');

            $this->load->library('upload', $config, 'berkas');
            $this->berkas->initialize($config);

            if ($this->berkas->do_upload('gambar')) {
                $berkas = $this->berkas->data('file_name');
                // $data['status'] = 1;

            } else {
                $error = $this->berkas->display_errors();
                $this->session->set_flashdata('message_error', 'Gagal upload gambar :' . $error);
                redirect('admin/map/tambahdata');
            }

            

            $this->session->set_flashdata('message', 'Berhasil menambah data');
            redirect('admin/map');
        }else{
            $this->data['title'] = 'Tambah Data';
        $this->load->view('admin/tambahdata', $this->data);
        }
    }
}
