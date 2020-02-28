<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kajian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['title']  = "Jadwal Kajian";
        $data['basic'] = $this->db->get('tb_pengurus')->row_array();
        $data['ustadz'] = $this->db->get('tb_ustadz')->result_array();

        $this->load->view('layouts/admin/header', $data);
        $this->load->view('layouts/admin/sidebar');
        $this->load->view('layouts/admin/topbar');
        $this->load->view('admin/kajian');
        $this->load->view('layouts/admin/footer');
    }
}