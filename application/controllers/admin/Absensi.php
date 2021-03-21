<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	private $table1 = 'absensi';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/absensi/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","pelatihan","user","user id","foto","jam", "action"]);
        $this->Createtable->order_set('0, 6');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/absensi/view', $data);
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
                        'row' => ["pelatihan","user","user_id","foto","jam"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["pelatihan","user","user_id","foto","jam"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"pelatihan", "2"=>"user", "3"=>"user_id", "4"=>"foto", "5"=>"jam"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/absensi/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/absensi/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $pelatihan = post("pelatihan");
$user = post("user");
$user_id = post("user_id");
$foto = post("foto");
$jam = post("jam");

        

        $simpan = $this->db->query("
            INSERT INTO absensi            
            (pelatihan,user,user_id,foto,jam) VALUES ('$pelatihan','$user','$user_id','$foto','$jam')
        ");
    

        if($simpan){
            redirect('admin/absensi');
        }
    }

    public function update(){
        $pelatihan = post("pelatihan");
$user = post("user");
$user_id = post("user_id");
$foto = post("foto");
$jam = post("jam");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE absensi SET  pelatihan = '$pelatihan', user = '$user', user_id = '$user_id', foto = '$foto', jam = '$jam' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/absensi');
        }
    }
    
}
