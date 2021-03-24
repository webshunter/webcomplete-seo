<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource extends CI_Controller {

	private $table1 = 'resource';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/resource/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["id","judul","deskripsi", "action"]);
        $this->Createtable->order_set('0, 3');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/resource/view', $data);
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
                        'row' => ["judul","deskripsi"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["judul","deskripsi"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"judul", "2"=>"deskripsi"],
                    ]
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/resource/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/resource/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $judul = post("judul");
$deskripsi = post("deskripsi");

        

        $simpan = $this->db->query("
            INSERT INTO resource            
            (judul,deskripsi) VALUES ('$judul','$deskripsi')
        ");
    

        if($simpan){
            redirect('admin/resource');
        }
    }

    public function update(){
        $judul = post("judul");
$deskripsi = post("deskripsi");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE resource SET  judul = '$judul', deskripsi = '$deskripsi' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/resource');
        }
    }
    
}
