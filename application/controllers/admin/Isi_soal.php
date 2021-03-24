<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isi_soal extends CI_Controller {

	private $table1 = 'isi_soal';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/isi_soal/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","no","soal id","soal","a","b","c","d","jawaban", "action"]);
        $this->Createtable->order_set('0, 9');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/isi_soal/view', $data);
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
                        'row' => ["no","soal_id","soal","a","b","c","d","jawaban"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["no","soal_id","soal","a","b","c","d","jawaban"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"no", "2"=>"soal_id", "3"=>"soal", "4"=>"a", "5"=>"b", "6"=>"c", "7"=>"d", "8"=>"jawaban"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/isi_soal/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/isi_soal/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $no = post("no");
$soal_id = post("soal_id");
$soal = post("soal");
$a = post("a");
$b = post("b");
$c = post("c");
$d = post("d");
$jawaban = post("jawaban");

        

        $simpan = $this->db->query("
            INSERT INTO isi_soal            
            (no,soal_id,soal,a,b,c,d,jawaban) VALUES ('$no','$soal_id','$soal','$a','$b','$c','$d','$jawaban')
        ");
    

        if($simpan){
            redirect('admin/isi_soal');
        }
    }

    public function update(){
        $no = post("no");
$soal_id = post("soal_id");
$soal = post("soal");
$a = post("a");
$b = post("b");
$c = post("c");
$d = post("d");
$jawaban = post("jawaban");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE isi_soal SET  no = '$no', soal_id = '$soal_id', soal = '$soal', a = '$a', b = '$b', c = '$c', d = '$d', jawaban = '$jawaban' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/isi_soal');
        }
    }
    
}
