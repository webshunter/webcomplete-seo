<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends CI_Controller {

	private $table1 = 'kuisioner';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/kuisioner/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","user id","user","pemateri","poin1","poin2","poin3","poin4","poin5","poin6","poin7","poin8","poin9","poin10","poin11","poin12","poin13","poin14","poin15","poin16","poin17","saran", "action"]);
        $this->Createtable->order_set('0, 22');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/kuisioner/view', $data);
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
                        'row' => ["user_id","user","pemateri","poin1","poin2","poin3","poin4","poin5","poin6","poin7","poin8","poin9","poin10","poin11","poin12","poin13","poin14","poin15","poin16","poin17","saran"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["user_id","user","pemateri","poin1","poin2","poin3","poin4","poin5","poin6","poin7","poin8","poin9","poin10","poin11","poin12","poin13","poin14","poin15","poin16","poin17","saran"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"user_id", "2"=>"user", "3"=>"pemateri", "4"=>"poin1", "5"=>"poin2", "6"=>"poin3", "7"=>"poin4", "8"=>"poin5", "9"=>"poin6", "10"=>"poin7", "11"=>"poin8", "12"=>"poin9", "13"=>"poin10", "14"=>"poin11", "15"=>"poin12", "16"=>"poin13", "17"=>"poin14", "18"=>"poin15", "19"=>"poin16", "20"=>"poin17", "21"=>"saran"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/kuisioner/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/kuisioner/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $user_id = post("user_id");
$user = post("user");
$pemateri = post("pemateri");
$poin1 = post("poin1");
$poin2 = post("poin2");
$poin3 = post("poin3");
$poin4 = post("poin4");
$poin5 = post("poin5");
$poin6 = post("poin6");
$poin7 = post("poin7");
$poin8 = post("poin8");
$poin9 = post("poin9");
$poin10 = post("poin10");
$poin11 = post("poin11");
$poin12 = post("poin12");
$poin13 = post("poin13");
$poin14 = post("poin14");
$poin15 = post("poin15");
$poin16 = post("poin16");
$poin17 = post("poin17");
$saran = post("saran");

        

        $simpan = $this->db->query("
            INSERT INTO kuisioner            
            (user_id,user,pemateri,poin1,poin2,poin3,poin4,poin5,poin6,poin7,poin8,poin9,poin10,poin11,poin12,poin13,poin14,poin15,poin16,poin17,saran) VALUES ('$user_id','$user','$pemateri','$poin1','$poin2','$poin3','$poin4','$poin5','$poin6','$poin7','$poin8','$poin9','$poin10','$poin11','$poin12','$poin13','$poin14','$poin15','$poin16','$poin17','$saran')
        ");
    

        if($simpan){
            redirect('admin/kuisioner');
        }
    }

    public function update(){
        $user_id = post("user_id");
$user = post("user");
$pemateri = post("pemateri");
$poin1 = post("poin1");
$poin2 = post("poin2");
$poin3 = post("poin3");
$poin4 = post("poin4");
$poin5 = post("poin5");
$poin6 = post("poin6");
$poin7 = post("poin7");
$poin8 = post("poin8");
$poin9 = post("poin9");
$poin10 = post("poin10");
$poin11 = post("poin11");
$poin12 = post("poin12");
$poin13 = post("poin13");
$poin14 = post("poin14");
$poin15 = post("poin15");
$poin16 = post("poin16");
$poin17 = post("poin17");
$saran = post("saran");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE kuisioner SET  user_id = '$user_id', user = '$user', pemateri = '$pemateri', poin1 = '$poin1', poin2 = '$poin2', poin3 = '$poin3', poin4 = '$poin4', poin5 = '$poin5', poin6 = '$poin6', poin7 = '$poin7', poin8 = '$poin8', poin9 = '$poin9', poin10 = '$poin10', poin11 = '$poin11', poin12 = '$poin12', poin13 = '$poin13', poin14 = '$poin14', poin15 = '$poin15', poin16 = '$poin16', poin17 = '$poin17', saran = '$saran' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/kuisioner');
        }
    }
    
}
