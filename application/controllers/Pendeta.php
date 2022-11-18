<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendeta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model("ModelPendeta");
    }

    public function index()
    {
        $dataPendeta = $this->ModelPendeta->getAll();
        $data = array(
            "pendetas" => $dataPendeta
        );

        $data['title'] = 'Data Pendeta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pendeta/v_list_pendeta', $data);
        $this->load->view('template/footer');
    }

    // untuk me-load tampilan form tambah barang
    public function tambah()
    {
        $data['title'] = 'Form Tambah Pendeta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pendeta/v_add_pendeta', $data);
        $this->load->view('template/footer');
    }

    public function insert()
    {
        $config['upload_path']          = './gambar/pendeta/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Dikirim";
        } else {
            $foto_pendeta = $this->upload->data();
            $foto_pendeta = $foto_pendeta['file_name'];
            $nama_pendeta = $this->input->post('nama_pendeta');
            $background_pendeta = $this->input->post('background_pendeta');

            $data = array(
                "nama_pendeta" => $nama_pendeta,
                "background_pendeta" => $background_pendeta,
                "foto_pendeta" => $foto_pendeta
            );
            $id = $this->ModelPendeta->insertGetId($data);
            redirect('pendeta');
        }
    }

    public function ubah($id)
    {
        $pendeta = $this->ModelPendeta->getByPrimaryKey($id);
        $data = array(
            "pendeta" => $pendeta,
        );
        $data['title'] = 'Form Ubah Data Pendeta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['logo'] = $this->db->get('logo')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('pendeta/v_update_pendeta', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $config['upload_path']          = './gambar/pendeta/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        $nama_pendeta = $this->input->post('nama_pendeta');
        $background_pendeta = $this->input->post('background_pendeta');
        $id = $this->input->post('id_pendeta');
        $data = array(
            "nama_pendeta" => $nama_pendeta,
            "background_pendeta" => $background_pendeta
        );

        if ($this->upload->do_upload('userfile')) {
            $old_image = $data['pendeta']['foto_pendeta'];
            if ($old_image != 'default.png') {
                unlink(FCPATH . 'gambar/pendeta/' . $old_image);
            }

            $new_image = $this->upload->data('file_name');
            $this->db->set('foto_pendeta', $new_image);
        } else {
            echo $this->upload->display_errors();
        }

        $id = $this->ModelPendeta->update($id, $data);
        redirect('pendeta');
    }

    public function delete()
    {
        $id = $this->input->post('id_pendeta');
        $this->ModelPendeta->delete($id);
        redirect('pendeta');
    }
}
