<?php

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

        $this->load->view('web-profile/jadwal', $data);
    }
}
