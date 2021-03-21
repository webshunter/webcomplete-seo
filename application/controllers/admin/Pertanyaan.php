<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

	private $table1 = 'pertanyaan';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/pertanyaan/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","user","user id","pertanyaan","jawaban", "action"]);
        $this->Createtable->order_set('0, 5');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/pertanyaan/view', $data);
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
                        'row' => ["user","user_id","pertanyaan","jawaban"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["user","user_id","pertanyaan","jawaban"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"user", "2"=>"user_id", "3"=>"pertanyaan", "4"=>"jawaban"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/pertanyaan/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/pertanyaan/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $user = post("user");
$user_id = post("user_id");
$pertanyaan = post("pertanyaan");
$jawaban = post("jawaban");

        

        $simpan = $this->db->query("
            INSERT INTO pertanyaan            
            (user,user_id,pertanyaan,jawaban) VALUES ('$user','$user_id','$pertanyaan','$jawaban')
        ");
    

        if($simpan){
            redirect('admin/pertanyaan');
        }
    }

    public function update(){
        $user = post("user");
$user_id = post("user_id");
$pertanyaan = post("pertanyaan");
$jawaban = post("jawaban");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE pertanyaan SET  user = '$user', user_id = '$user_id', pertanyaan = '$pertanyaan', jawaban = '$jawaban' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/pertanyaan');
        }
    }
    
}
