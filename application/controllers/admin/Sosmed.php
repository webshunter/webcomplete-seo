<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed extends CI_Controller {

	private $table1 = 'sosmed';

	public function __construct()
	{
		parent::__construct();
        Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/sosmed/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","judul","link","icon","Dibuat Pada","Diupdate Pada", "action"]);
        $this->Createtable->order_set('0, 6');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/sosmed/view', $data);
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
                        'row' => ["judul","link","icon","created_at","updated_at"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["judul","link","icon","created_at","updated_at"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"judul", "2"=>"link", "3"=>"icon", "4"=>"created_at", "5"=>"updated_at"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/sosmed/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/sosmed/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $judul = post("judul");
$link = post("link");
$icon = post("icon");

        

        $simpan = $this->db->query("
            INSERT INTO sosmed            
            (judul,link,icon) VALUES ('$judul','$link','$icon')
        ");
    

        if($simpan){
            redirect('admin/sosmed');
        }
    }

    public function update(){
        $judul = post("judul");
$link = post("link");
$icon = post("icon");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE sosmed SET  judul = '$judul', link = '$link', icon = '$icon' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/sosmed');
        }
    }
    
}
