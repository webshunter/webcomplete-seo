<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends CI_Controller {

	private $table1 = 'type';

	public function __construct()
	{
		parent::__construct();
        Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/type/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","Nama Tipe","Dibuat Pada","Diupdate Pada", "action"]);
        $this->Createtable->order_set('0, 4');
		$show = $this->Createtable->create();
		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/type/view', $data);
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
                        'row' => ["name","created_at","updated_at"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["name","created_at","updated_at"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"name", "2"=>"created_at", "3"=>"updated_at"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/type/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/type/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $name = post("name");

        

        $simpan = $this->db->query("
            INSERT INTO type            
            (name) VALUES ('$name')
        ");
    

        if($simpan){
            redirect('admin/type');
        }
    }

    public function update(){
        $name = post("name");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE type SET  name = '$name' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/type');
        }
    }
    
}
