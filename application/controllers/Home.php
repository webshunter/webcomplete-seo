<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $datas = $this->db->query("SELECT * FROM page")->row();
        if (isset($datas->id)) {
            $id = $datas->id;
            $data['id'] = $id;
            $data['judul'] = '';
            $this->load->view('home', $data);
        }else{
            $data['judul'] = '';
            $this->load->view('home', $data);
        }
    }

    public function id($id)
    {
        $data['id'] = $id;
        $data['judul'] = '';
        $this->load->view('home', $data);
    }

}
