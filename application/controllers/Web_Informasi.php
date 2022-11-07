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

        $this->load->view('web-profile/informasi', $data);
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

        $this->load->view('web-profile/v_informasi', $data);
    }
}
