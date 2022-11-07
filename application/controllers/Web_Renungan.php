<?php

class Web_Renungan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelRenungan");
    }

    public function index()
    {
        $dataRenungan = $this->ModelRenungan->getAll();
        $data = array(
            "renungans" => $dataRenungan
        );

        $data['title'] = 'GBI Jogosetran - Renungan';
        $data['renungan'] = $this->db->get('renungan')->row_array();

        $this->load->view('web-profile/renungan', $data);
    }

    public function view($id)
    {
        $renungan = $this->ModelRenungan->getByPrimaryKey($id);
        $data = array(
            "renungan" => $renungan,
        );
        $data['title'] = 'GBI Jogosetran - View Renungan';
        $this->db->where('id_renungan', $id);
        $data['renungan'] = $this->db->get('renungan')->row();

        $this->load->view('web-profile/v_renungan', $data);
    }
}
