<?php defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model
{
    private $_table = 'prestasi';

    public $id_user;
    public $jenis_p;
    public $tingkat_p;
    public $juara;
    public $tahun_p;
    public $penyelenggara;

    public function rules()
    {
        return [
            ['field' => 'id_user',
            'label' => 'id_user',
            'rules' => 'required'],

            ['field' => 'jenis_p',
            'label' => 'jenis_p',
            'rules' => 'required'],
            
            ['field' => 'tingkat_p',
            'label' => 'tingkat_p',
            'rules' => 'required'],

            ['field' => 'juara',
            'label' => 'juara',
            'rules' => 'required'],

            ['field' => 'tahun_p',
            'label' => 'tahun_p',
            'rules' => 'required'],
            
            ['field' => 'penyelenggara',
            'label' => 'penyelenggara',
            'rules' => 'required']
        ];
    }

    public function getByUser($id) {
        return $this->db->get_where('prestasi', ["id_user" => $id])->result();
        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["jenis_p" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->jenis_p = $post["jenis_p"];
        $this->tingkat_p = $post["tingkat_p"];
        $this->juara = $post["juara"];
        $this->tahun_p = $post["tahun_p"];
        $this->penyelenggara = $post["penyelenggara"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        
        $this->id_user = $post["id_user"];
        $this->jenis_p = $post["jenis_p"];
        $this->tingkat_p = $post["tingkat_p"];
        $this->juara = $post["juara"];
        $this->tahun_p = $post["tahun_p"];
        $this->penyelenggara = $post["penyelenggara"];
        return $this->db->update($this->_table, $this, array('jenis_p' => $post['jenis_p']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("jenis_p" => $id));
    }
}