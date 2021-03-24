<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihan_training extends CI_Controller {

	private $table1 = 'pilihan_training';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/pilihan_training/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","training","pjknk", "action"]);
        $this->Createtable->order_set('0, 3');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/pilihan_training/view', $data);
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
                        'row' => ["training","pjknk"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["training","pjknk"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"training", "2"=>"pjknk"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/pilihan_training/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/pilihan_training/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $training = post("training");
$pjknk = post("pjknk");

        

        $simpan = $this->db->query("
            INSERT INTO pilihan_training            
            (training,pjknk) VALUES ('$training','$pjknk')
        ");
    

        if($simpan){
            redirect('admin/pilihan_training');
        }
    }

    public function update(){
        $training = post("training");
$pjknk = post("pjknk");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE pilihan_training SET  training = '$training', pjknk = '$pjknk' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/pilihan_training');
        }
    }
    
}
