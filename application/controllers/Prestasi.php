<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_user");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user_id = $this->session->userdata('username');
        $data["prestasi"] = $this->model_user->getByUser($user_id);
        $this->load->view("user/prestasi/list", $data);
    }

    public function add()
    {
        $prestasi = $this->model_user;
        $validation = $this->form_validation;
        $validation->set_rules($prestasi->rules());

        if ($validation->run()) {
            $prestasi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("user/prestasi/new");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('prestasi');
       
        $prestasi = $this->model_user;
        $validation = $this->form_validation;
        $validation->set_rules($prestasi->rules());

        if ($validation->run()) {
            $prestasi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["prestasi"] = $prestasi->getById($id);
        if (!$data["prestasi"]) show_404();
        
        $this->load->view("user/prestasi/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->model_user->delete($id)) {
            redirect(site_url('prestasi'));
        }
    }
}