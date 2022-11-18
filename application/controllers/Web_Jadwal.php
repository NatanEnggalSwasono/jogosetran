<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelJadwal");
    }

    public function index()
    {
        $dataJadwal = $this->ModelJadwal->getAll();
        $data = array(
            "jadwals" => $dataJadwal
        );

        $data['title'] = 'GBI Jogosetran - Jadwal';
        $data['jadwal'] = $this->db->get('jadwal')->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();

        $this->load->view('template/w_header', $data);
        $this->load->view('template/w_topbar', $data);
        $this->load->view('web-profile/jadwal', $data);
        $this->load->view('template/w_footer', $data);
    }
}
