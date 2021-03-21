<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$this->load->view('welcome_message');
	}

	public function getpage()
    {
        $judul = htmlspecialchars($_POST['des']);

        $simpan = $this->db->query('
            UPDATE halaman SET
             deskripsi = "'.$judul.'" WHERE id = "'.generate_session('idr').'" '
        );

        echo "success";
    }


    public function buildload()
    {
        $ff = htmlspecialchars_decode($this->db->query("SELECT * FROM halaman WHERE id = '".generate_session('idr')."' ")->row()->deskripsi);
    
        $cc = [
            "gjs-html" => $ff   
        ];
        echo json_encode($cc);
    }


    public function buildsave()
    {
        $data = json_decode(file_get_contents("php://input"));

        var_dump($data);

    }
}
