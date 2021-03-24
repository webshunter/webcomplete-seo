<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pilihan_soal extends CI_Controller {

	private $table1 = 'data_pilihan_soal';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/data_pilihan_soal/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","pilihan soal", "action"]);
        $this->Createtable->order_set('0, 2');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/data_pilihan_soal/view', $data);
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
                        'row' => ["pilihan_soal"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["pilihan_soal"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"pilihan_soal"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/data_pilihan_soal/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/data_pilihan_soal/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $pilihan_soal = post("pilihan_soal");

        

        $simpan = $this->db->query("
            INSERT INTO data_pilihan_soal            
            (pilihan_soal) VALUES ('$pilihan_soal')
        ");
    

        if($simpan){
            redirect('admin/data_pilihan_soal');
        }
    }

    public function update(){
        $pilihan_soal = post("pilihan_soal");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE data_pilihan_soal SET  pilihan_soal = '$pilihan_soal' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/data_pilihan_soal');
        }
    }
    
}
