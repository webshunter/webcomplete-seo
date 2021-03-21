<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
		$this->load->view('login');
	}


	public function up()
	{
		$cek = json_decode(ffread('assets/setting.json'));
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($cek->password == $password && $cek->username == $username) {
			create_session('login', 'true');
			return redirect('admin/page');
		}else{
			return redirect('login');
		}

	}

	public function out()
	{
		destroy_session('login');
		return redirect('/');
	}


}
