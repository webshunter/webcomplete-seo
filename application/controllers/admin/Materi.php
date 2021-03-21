<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	private $table1 = 'materi';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/materi/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","judul","materi","file","kondisi", "action"]);
        $this->Createtable->order_set('0, 5');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/materi/view', $data);
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
                        'row' => ["judul","materi","file","kondisi"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["judul","materi","file","kondisi"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"judul", "2"=>"materi", "3"=>"file", "4"=>"kondisi"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/materi/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/materi/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $judul = post("judul");
$materi = post("materi");
$file = post("file");
$kondisi = post("kondisi");

        

        $simpan = $this->db->query("
            INSERT INTO materi            
            (judul,materi,file,kondisi) VALUES ('$judul','$materi','$file','$kondisi')
        ");
    

        if($simpan){
            redirect('admin/materi');
        }
    }

    public function update(){
        $judul = post("judul");
$materi = post("materi");
$file = post("file");
$kondisi = post("kondisi");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE materi SET  judul = '$judul', materi = '$materi', file = '$file', kondisi = '$kondisi' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/materi');
        }
    }
    
}
