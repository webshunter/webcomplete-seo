<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batas_pengerjaan extends CI_Controller {

	private $table1 = 'batas_pengerjaan';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/batas_pengerjaan/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","soal id","user","mulai","berakhir", "action"]);
        $this->Createtable->order_set('0, 5');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/batas_pengerjaan/view', $data);
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
                        'row' => ["soal_id","user","mulai","berakhir"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["soal_id","user","mulai","berakhir"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"soal_id", "2"=>"user", "3"=>"mulai", "4"=>"berakhir"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/batas_pengerjaan/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/batas_pengerjaan/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $soal_id = post("soal_id");
$user = post("user");
$mulai = post("mulai");
$berakhir = post("berakhir");

        

        $simpan = $this->db->query("
            INSERT INTO batas_pengerjaan            
            (soal_id,user,mulai,berakhir) VALUES ('$soal_id','$user','$mulai','$berakhir')
        ");
    

        if($simpan){
            redirect('admin/batas_pengerjaan');
        }
    }

    public function update(){
        $soal_id = post("soal_id");
$user = post("user");
$mulai = post("mulai");
$berakhir = post("berakhir");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE batas_pengerjaan SET  soal_id = '$soal_id', user = '$user', mulai = '$mulai', berakhir = '$berakhir' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/batas_pengerjaan');
        }
    }
    
}
