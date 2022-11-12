<?php

class Social_Media extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model("ModelSocialMedia");
    }

    public function index()
    {
        $dataSocialMedia = $this->ModelSocialMedia->getAll();
        $data = array(
            "socialMedias" => $dataSocialMedia
        );

        $data['title'] = 'Data Media Sosial';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('social_media/v_list_sc', $data);
        $this->load->view('template/footer');
    }

    // untuk me-load tampilan form tambah barang
    public function tambah()
    {
        $data['title'] = 'Form Tambah Media Sosial';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('social_media/v_add_sc', $data);
        $this->load->view('template/footer');
    }

    public function insert()
    {
        $data = array(
            "instagram" => $this->input->post("instagram"),
            "facebook" => $this->input->post("facebook"),
            "twitter" => $this->input->post("twitter"),
            "website" => $this->input->post("website")
        );
        $id = $this->ModelSocialMedia->insertGetId($data);
        redirect('social_media');
    }

    public function ubah($id)
    {
        $social_media = $this->ModelSocialMedia->getByPrimaryKey($id);
        $data = array(
            "social_media" => $social_media,
        );
        $data['title'] = 'Form Update Media Sosial';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('social_media/v_update_sc', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_sc');
        $data = array(
            "instagram" => $this->input->post("instagram"),
            "facebook" => $this->input->post("facebook"),
            "twitter" => $this->input->post("twitter"),
            "website" => $this->input->post("website")
        );
        echo var_dump($data);
        echo var_dump($id);
        $this->ModelSocialMedia->update($id, $data);
        redirect('social_media');
    }

    public function delete()
    {
        $id = $this->input->post('id_sc');
        $this->ModelSocialMedia->delete($id);
        redirect('social_media');
    }
}
