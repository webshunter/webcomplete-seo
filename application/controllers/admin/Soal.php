<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	private $table1 = 'soal';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/soal/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","nama soal","jenis soal","durasi","durasi halaman","kondisi", "action"]);
        $this->Createtable->order_set('0, 6');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/soal/view', $data);
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
                        'row' => ["nama_soal","jenis_soal","durasi","durasi_halaman","kondisi"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["nama_soal","jenis_soal","durasi","durasi_halaman","kondisi"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"nama_soal", "2"=>"jenis_soal", "3"=>"durasi", "4"=>"durasi_halaman", "5"=>"kondisi"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/soal/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/soal/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $nama_soal = post("nama_soal");
$jenis_soal = post("jenis_soal");
$durasi = post("durasi");
$durasi_halaman = post("durasi_halaman");
$kondisi = post("kondisi");

        

        $simpan = $this->db->query("
            INSERT INTO soal            
            (nama_soal,jenis_soal,durasi,durasi_halaman,kondisi) VALUES ('$nama_soal','$jenis_soal','$durasi','$durasi_halaman','$kondisi')
        ");
    

        if($simpan){
            redirect('admin/soal');
        }
    }

    public function update(){
        $nama_soal = post("nama_soal");
$jenis_soal = post("jenis_soal");
$durasi = post("durasi");
$durasi_halaman = post("durasi_halaman");
$kondisi = post("kondisi");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE soal SET  nama_soal = '$nama_soal', jenis_soal = '$jenis_soal', durasi = '$durasi', durasi_halaman = '$durasi_halaman', kondisi = '$kondisi' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/soal');
        }
    }
    
}
