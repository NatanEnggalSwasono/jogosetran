<?php

class Web_Profile extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Web Profile';
        $data['pendeta'] = $this->db->get('pendeta')->row_array();
        $data['tentang'] = $this->db->get('tentang')->row_array();
        $data['galeri'] = $this->db->get('galeri')->result_array();
        $data['jadwal'] = $this->db->get('jadwal')->result_array();
        $data['agenda'] = $this->db->get('agenda')->result_array();
        $data['informasi'] = $this->db->get('informasi')->result_array();
        $data['kontak'] = $this->db->get('kontak')->row_array();
        $data['renungan'] = $this->db->get('renungan')->result_array();
        $data['tema'] = $this->db->get('tema')->row_array();
        $data['social_media'] = $this->db->get('social_media')->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('web-profile/index', $data);
    }
}
