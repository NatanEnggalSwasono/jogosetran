<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
        $data['logo'] = $this->db->get('logo')->row_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();

        $this->load->view('template/w_header', $data);
        $this->load->view('template/w_topbar', $data);
        $this->load->view('web-profile/renungan', $data);
        $this->load->view('template/w_footer', $data);
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
        $data['logo'] = $this->db->get('logo')->row_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();

        $this->load->view('template/w_header', $data);
        $this->load->view('template/w_topbar', $data);
        $this->load->view('web-profile/v_renungan', $data);
        $this->load->view('template/w_footer', $data);
    }
}
