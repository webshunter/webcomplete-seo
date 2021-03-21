<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanya_jawab extends CI_Controller {

	private $table1 = 'tanya_jawab';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/tanya_jawab/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","tanggal","pertanyaan","jawaban","user id","user", "action"]);
        $this->Createtable->order_set('0, 6');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/tanya_jawab/view', $data);
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
                        'row' => ["tanggal","pertanyaan","jawaban","user_id","user"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["tanggal","pertanyaan","jawaban","user_id","user"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"tanggal", "2"=>"pertanyaan", "3"=>"jawaban", "4"=>"user_id", "5"=>"user"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/tanya_jawab/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/tanya_jawab/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $tanggal = post("tanggal");
$pertanyaan = post("pertanyaan");
$jawaban = post("jawaban");
$user_id = post("user_id");
$user = post("user");

        

        $simpan = $this->db->query("
            INSERT INTO tanya_jawab            
            (tanggal,pertanyaan,jawaban,user_id,user) VALUES ('$tanggal','$pertanyaan','$jawaban','$user_id','$user')
        ");
    

        if($simpan){
            redirect('admin/tanya_jawab');
        }
    }

    public function update(){
        $tanggal = post("tanggal");
$pertanyaan = post("pertanyaan");
$jawaban = post("jawaban");
$user_id = post("user_id");
$user = post("user");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE tanya_jawab SET  tanggal = '$tanggal', pertanyaan = '$pertanyaan', jawaban = '$jawaban', user_id = '$user_id', user = '$user' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/tanya_jawab');
        }
    }
    
}
