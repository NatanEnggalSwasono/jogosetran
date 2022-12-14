<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tema extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model("ModelTema");
    }

    public function index()
    {
        $dataTema = $this->ModelTema->getAll();
        $data = array(
            "temas" => $dataTema
        );

        $data['title'] = 'Data Tema';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('tema/v_list_tema', $data);
        $this->load->view('template/footer');
    }

    // untuk me-load tampilan form tambah barang
    public function tambah()
    {
        $data['title'] = 'Form Tambah Tema';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('tema/v_add_tema', $data);
        $this->load->view('template/footer');
    }

    public function insert()
    {
        $config['upload_path']          = './assets/img/tema/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Dikirim";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $judul = $this->input->post('judul');
            $tema = $this->input->post('tema');

            $data = array(
                "judul" => $judul,
                "tema" => $tema,
                "gambar" => $gambar
            );
            $id = $this->ModelTema->insertGetId($data);
            redirect('tema');
        }
    }

    public function ubah($id)
    {
        $tema = $this->ModelTema->getByPrimaryKey($id);
        $data = array(
            "tema" => $tema,
        );
        $data['title'] = 'Form Ubah Tema';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('tema/v_update_tema', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $config['upload_path']          = './assets/img/tema/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;

        $this->load->library('upload', $config);

        $judul = $this->input->post('judul',);
        $tema = $this->input->post('tema');
        $id = $this->input->post('id_tema');
        $data = array(
            "judul" => $judul,
            "tema" => $tema
        );

        if ($this->upload->do_upload('userfile')) {
            $old_image = $data['tema']['gambar'];
            if ($old_image != 'default.png') {
                unlink(FCPATH . 'assests/img/tema/' . $old_image);
            }

            $new_image = $this->upload->data('file_name');
            $this->db->set('gambar', $new_image);
        } else {
            echo $this->upload->display_errors();
        }

        $id = $this->ModelTema->update($id, $data);
        redirect('tema');
    }

    public function delete()
    {
        $id = $this->input->post('id_tema');
        $this->ModelTema->delete($id);
        redirect('tema');
    }
}
