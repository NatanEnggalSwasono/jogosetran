<?php

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

        $this->load->view('web-profile/agenda', $data);
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

        $this->load->view('web-profile/v_agenda', $data);
    }
}
