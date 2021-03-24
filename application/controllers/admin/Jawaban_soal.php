<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jawaban_soal extends CI_Controller {

	private $table1 = 'jawaban_soal';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/jawaban_soal/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","user id","user","soal id","data soal id","soal","jawaban", "action"]);
        $this->Createtable->order_set('0, 7');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/jawaban_soal/view', $data);
        $this->load->view('templateadmin/footer');
	}

	public function table_show($action = 'show', $keyword = '')
	{
		if ($action == "show") {
        
            if (isset($_POST['order'])): $setorder = $_POST['order']; else: $setorder = ''; endif;

            $this->Datatable_gugus->datatable(
                [
                    "table" => $this->table1,
                    "select" => [
						"*"
					],
                    'limit' => [
                        'start' => post('start'),
                        'end' => post('length')
                    ],
                    'search' => [
                        'value' => $this->Datatable_gugus->search(),
                        'row' => ["user_id","user","soal_id","data_soal_id","soal","jawaban"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["user_id","user","soal_id","data_soal_id","soal","jawaban"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"user_id", "2"=>"user", "3"=>"soal_id", "4"=>"data_soal_id", "5"=>"soal", "6"=>"jawaban"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/jawaban_soal/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/jawaban_soal/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $user_id = post("user_id");
$user = post("user");
$soal_id = post("soal_id");
$data_soal_id = post("data_soal_id");
$soal = post("soal");
$jawaban = post("jawaban");

        

        $simpan = $this->db->query("
            INSERT INTO jawaban_soal            
            (user_id,user,soal_id,data_soal_id,soal,jawaban) VALUES ('$user_id','$user','$soal_id','$data_soal_id','$soal','$jawaban')
        ");
    

        if($simpan){
            redirect('admin/jawaban_soal');
        }
    }

    public function update(){
        $user_id = post("user_id");
$user = post("user");
$soal_id = post("soal_id");
$data_soal_id = post("data_soal_id");
$soal = post("soal");
$jawaban = post("jawaban");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE jawaban_soal SET  user_id = '$user_id', user = '$user', soal_id = '$soal_id', data_soal_id = '$data_soal_id', soal = '$soal', jawaban = '$jawaban' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/jawaban_soal');
        }
    }
    
}
