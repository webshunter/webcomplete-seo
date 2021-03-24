<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

	private $table1 = 'form';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/forms/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["No","Form","Judul","Code","Template","Dibuat Pada","Diupdate Pada", "action"]);
        $this->Createtable->order_set('0, 7');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/forms/view', $data);
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
                        'row' => ["form","judul","code","template","created_at","updated_at"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["form","judul","code","template","created_at","updated_at"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"form", "2"=>"judul", "3"=>"code", "4"=>"template", "5"=>"created_at", "6"=>"updated_at"],
                    ],
                    "custome" => [
                        "form" => [
                            "key" => ["id", "judul"],
                            "content" => "<a href='".site_url('admin/forms/createform/')."{{id}}' class=\"btn btn-primary\">form</a>"
                        ],
                        "template" => [
                            "key" => ["id", "judul"],
                            "content" => "<a href='{{id}}' class=\"btn btn-primary\">template</a>"
                        ],
                    ]
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/forms/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function createform($id)
    {

        create_session('formid', $id);
        $data['id'] = $id;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/forms/create', $data);
        $this->load->view('templateadmin/footer');
    }


    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/forms/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $judul = post("judul");
$code = post("code");

        

        $simpan = $this->db->query("
            INSERT INTO form            
            (judul,code) VALUES ('$judul','$code')
        ");
    

        if($simpan){
            redirect('admin/forms');
        }
    }

    public function update(){
        $judul = post("judul");
$code = post("code");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE form SET  judul = '$judul', code = '$code' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/forms');
        }
    }
    
}
