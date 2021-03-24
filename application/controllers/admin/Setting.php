<?php 

class Setting extends CI_Controller{

public function __construct()
	{
		parent::__construct();
        Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->load->view('templateadmin/head');
        $this->load->view('Setting');
        $this->load->view('templateadmin/footer');
	}

	public function simpan()
	{
		$data = $_POST;

		ffwrite('assets/setting.json', json_encode($data));


		$file = $_FILES;


		$path = "assets/";

		$format = ".png";


		foreach (array_keys($file) as $key => $value) {
			if (file_exists($path.$value.$format) && $file[$value]['tmp_name'] != "") {
				unlink($path.$value.$format);
			}
			if ($file[$value]['tmp_name'] != "") {
				move_uploaded_file($file[$value]['tmp_name'], $path.$value.$format);
			}
			# code...
		}

		return redirect('admin/setting');
	
	}

}