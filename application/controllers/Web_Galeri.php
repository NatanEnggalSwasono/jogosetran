<?php

class Web_Galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelGaleri");
    }

    public function index()
    {
        $dataGaleri = $this->ModelGaleri->getAll();
        $data = array(
            "galeris" => $dataGaleri
        );

        $data['title'] = 'GBI Jogosetran - Galeri';
        $data['galeri'] = $this->db->get('galeri')->row_array();

        $this->load->view('web-profile/galeri', $data);
    }
}
