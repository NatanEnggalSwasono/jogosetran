<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model("ModelLogo");
    }

    public function index()
    {
        $dataLogo = $this->ModelLogo->getAll();
        $data = array(
            "logos" => $dataLogo
        );

        $data['title'] = 'Logo';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('logo/v_list_logo', $data);
        $this->load->view('template/footer');
    }

    // untuk me-load tampilan form tambah barang
    public function tambah()
    {
        $data['title'] = 'Form Add Logo';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('logo/v_add_logo', $data);
        $this->load->view('template/footer');
    }

    public function insert()
    {
        $config['upload_path']          = './assets/img/logo/';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Dikirim";
        } else {
            $logo = $this->upload->data();
            $logo = $logo['file_name'];
            $nama_gereja = $this->input->post('nama_gereja');

            $data = array(
                "nama_gereja" => $nama_gereja,
                'logo' => $logo

            );
            $id = $this->ModelLogo->insertGetId($data);
            redirect('logo');
        }
    }

    public function ubah($id)
    {
        $logo = $this->ModelLogo->getByPrimaryKey($id);
        $data = array(
            "logo" => $logo,
        );
        $data['title'] = 'Form Update logo';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('logo/v_update_logo', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $config['upload_path']          = './assets/img/logo/';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Dikirim";
        } else {
            $logo = $this->upload->data();
            $logo = $logo['file_name'];
            $nama_gereja = $this->input->post('nama_gereja');
            $id = $this->input->post('id');
            $data = array(
                "nama_gereja" => $nama_gereja,
                "logo" => $logo
            );
            $id = $this->ModelLogo->update($id, $data);
            redirect('logo');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->ModelLogo->delete($id);
        redirect('logo');
    }
}
