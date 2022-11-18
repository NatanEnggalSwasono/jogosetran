<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_Agenda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelAgenda");
    }

    public function index()
    {
        $dataAgenda = $this->ModelAgenda->getAll();
        $data = array(
            "barangs" => $dataAgenda
        );

        $data['title'] = 'GBI Jogosetran - Agenda';
        $data['agenda'] = $this->db->get('agenda')->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();

        $this->load->view('template/w_header', $data);
        $this->load->view('template/w_topbar', $data);
        $this->load->view('web-profile/agenda', $data);
        $this->load->view('template/w_footer', $data);
    }

    public function view($id)
    {
        $agenda = $this->ModelAgenda->getByPrimaryKey($id);
        $data = array(
            "agenda" => $agenda,
        );
        $data['title'] = 'GBI Jogosetran - View Agenda';
        $this->db->where('kode_warta', $id);
        $data['agenda'] = $this->db->get('agenda')->row();
        $data['logo'] = $this->db->get('logo')->row_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();

        $this->load->view('template/w_header', $data);
        $this->load->view('template/w_topbar', $data);
        $this->load->view('web-profile/v_agenda', $data);
        $this->load->view('template/w_footer', $data);
    }
}
