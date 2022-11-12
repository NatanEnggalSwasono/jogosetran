<?php

class Web_Informasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelInformasi");
    }

    public function index()
    {
        $dataInformasi = $this->ModelInformasi->getAll();
        $data = array(
            "informasis" => $dataInformasi
        );

        $data['title'] = 'GBI Jogosetran - Informasi';
        $data['informasi'] = $this->db->get('informasi')->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();

        $this->load->view('template/w_header', $data);
        $this->load->view('template/w_topbar', $data);
        $this->load->view('web-profile/informasi', $data);
        $this->load->view('template/w_footer', $data);
    }

    public function view($id)
    {
        $informasi = $this->ModelInformasi->getByPrimaryKey($id);
        $data = array(
            "informasi" => $informasi,
        );

        $data['title'] = 'GBI Jogosetran - View Informasi';
        $this->db->where('id_informasi', $id);
        $data['informasi'] = $this->db->get('informasi')->row();
        $data['logo'] = $this->db->get('logo')->row_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();

        $this->load->view('template/w_header', $data);
        $this->load->view('template/w_topbar', $data);
        $this->load->view('web-profile/v_informasi', $data);
        $this->load->view('template/w_footer', $data);
    }
}
