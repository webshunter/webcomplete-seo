<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	private $table1 = 'page';

	public function __construct()
	{
		parent::__construct();
        Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/page/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","Judul","Slug","Type","Posisi","Content","Dibuat Pada","Diupdate Pada", "action"]);
        $this->Createtable->order_set('0, 8');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/page/view', $data);
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
                        'row' => ["judul","slug","type","position","content","created_at","updated_at"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["judul","slug","type","position","content","created_at","updated_at"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"judul", "2"=>"slug", "3"=>"type", "4"=>"position", "5"=>"content", "6"=>"created_at", "7"=>"updated_at"],
                    ],
                     'custome' => [
            "content" => [
                "key" => ['id'],
                "content" => "<a href='".site_url('admin/page/openbuild/')."{{id}}' class='btn btn-primary'>Open Build</a>"
            ]
    ],
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/page/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/page/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $judul = post("judul");
        $slug = post("slug");
        $type = post("type");
        $position = post("position");
        $tipe_doc = post("tipe_doc");

        $simpan = $this->db->query("
            INSERT INTO page            
            (judul,slug,type,position, tipe_doc) VALUES ('$judul','$slug','$type','$position','$tipe_doc')
        ");

        if($simpan){
            redirect('admin/page');
        }
    }

    public function update(){
        $judul = post("judul");
        $slug = post("slug");
        $type = post("type");
        $position = post("position");
        $key = post('id'); 
        $tipe_doc = post("tipe_doc");
        $simpan = $this->db->query("
            UPDATE page SET  judul = '$judul', slug = '$slug', type = '$type', position = '$position', tipe_doc = '$tipe_doc' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/page');
        }
    }


    public function buildload()
    {
        $ff = htmlspecialchars_decode($this->db->query("SELECT * FROM admin_tentang_kami WHERE id = '".generate_session('idr')."' ")->row()->deskripsi);
    
        $cc = [
            "gjs-html" => $ff   
        ];

        echo json_encode($cc);
    
    }

    public function savepages($id)
    {
        $data = file_get_contents("php://input");
        var_dump($data);
        $dir = "page/";
        $namefile = "allcomponent".$id.".tmp";
        cekdir($dir);
        ffwrite($dir.$namefile, $data);
    }

    public function laodpage($id)
    {
        $dir = "page/";
        $namefile = "allcomponent".$id.".tmp";
        if(file_exists($dir.$namefile)) {
            $ff = json_decode(ffread($dir.$namefile), true);
            $cc = $ff;
            echo json_encode($cc);
        }else{
            $namefile = "page".$id.".tmp";
            $ff = ffread($dir.$namefile);
            $cc = [
                'gjs-html' => $ff
            ];
            echo json_encode($cc);
        }
    }


    public function openbuild($id)
    {
        create_session('buildid', $id);
        $this->load->view('welcome_message');
    }

    public function savepage($idp)
    {
        $id = $idp;
        $html = $_POST['html'];
        $css = $_POST['css'];
        $js = $_POST['js'];
        $dir = "page/";
        // html
        $namefile = "page".$id.".tmp";
        $namefile2 = "pagecss".$id.".tmp";
        $namefile3 = "pagejs".$id.".tmp";
        cekdir($dir);
        ffwrite($dir.$namefile, $html);
        ffwrite($dir.$namefile2, $css);
        ffwrite($dir.$namefile3, $js);
        return redirect('admin/page');
    }




    
}
