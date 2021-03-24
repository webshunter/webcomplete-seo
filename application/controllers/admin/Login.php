<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $table1 = 'login';

	public function __construct()
	{
		parent::__construct();
        //Cek_login::ceklogin();
		$this->load->model('Createtable');
		$this->load->model('Datatable_gugus');
	}

	public function index()
	{
        $this->Createtable->location('admin/login/table_show');
        $this->Createtable->table_name('tableku');
        $this->Createtable->create_row(["no","username","password","training","nama lengkap","jenis kelamin","status hubungan","tempat lahir","tanggal","bulan","tahun","no ktp","alamat","nama perusahaan","alamat perusahaan","propinsi","sektor industri","jabatan","no telepon","no fax","no hp","email","sma","nama sekolah sma","jurusan sma","tahun lulus sma","keterangan sma","d3","nama sekolah d3","jurusan d3","tahun lulus d3","keterangan d3","s1","nama sekolah s1","jurusan s1","tahun lulus s1","keterangan s1","s2","nama sekolah s2","jurusan s2","tahun lulus s2","keterangan s2","s3","nama sekolah s3","jurusan s3","tahun lulus s3","keterangan s3","pas foto","foto copy ktp","foto copy ijazah","foto copy surat ijin perusahaan","surat keterangan","sebagai","pjknk", "action"]);
        $this->Createtable->order_set('0, 54');
		$show = $this->Createtable->create();

		$data['datatable'] = $show;
        $this->load->view('templateadmin/head');
        $this->load->view('admin/login/view', $data);
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
                        'row' => ["username","password","training","nama_lengkap","jenis_kelamin","status_hubungan","tempat_lahir","tanggal","bulan","tahun","no_ktp","alamat","nama_perusahaan","alamat_perusahaan","propinsi","sektor_industri","jabatan","no_telepon","no_fax","no_hp","email","sma","nama_sekolah_sma","jurusan_sma","tahun_lulus_sma","keterangan_sma","d3","nama_sekolah_d3","jurusan_d3","tahun_lulus_d3","keterangan_d3","s1","nama_sekolah_s1","jurusan_s1","tahun_lulus_s1","keterangan_s1","s2","nama_sekolah_s2","jurusan_s2","tahun_lulus_s2","keterangan_s2","s3","nama_sekolah_s3","jurusan_s3","tahun_lulus_s3","keterangan_s3","pas_foto","foto_copy_ktp","foto_copy_ijazah","foto_copy_surat_ijin_perusahaan","surat_keterangan","sebagai","pjknk"]
                    ],
                    'table-draw' => post('draw'),
                    'table-show' => [
                        'key' => 'id',
                        'data' => ["username","password","training","nama_lengkap","jenis_kelamin","status_hubungan","tempat_lahir","tanggal","bulan","tahun","no_ktp","alamat","nama_perusahaan","alamat_perusahaan","propinsi","sektor_industri","jabatan","no_telepon","no_fax","no_hp","email","sma","nama_sekolah_sma","jurusan_sma","tahun_lulus_sma","keterangan_sma","d3","nama_sekolah_d3","jurusan_d3","tahun_lulus_d3","keterangan_d3","s1","nama_sekolah_s1","jurusan_s1","tahun_lulus_s1","keterangan_s1","s2","nama_sekolah_s2","jurusan_s2","tahun_lulus_s2","keterangan_s2","s3","nama_sekolah_s3","jurusan_s3","tahun_lulus_s3","keterangan_s3","pas_foto","foto_copy_ktp","foto_copy_ijazah","foto_copy_surat_ijin_perusahaan","surat_keterangan","sebagai","pjknk"]
                    ],
                    "action" => "standart",
                    'order' => [
                        'order-default' => ['id', 'ASC'],
                        'order-data' => $setorder,
                        'order-option' => [ "1"=>"username", "2"=>"password", "3"=>"training", "4"=>"nama_lengkap", "5"=>"jenis_kelamin", "6"=>"status_hubungan", "7"=>"tempat_lahir", "8"=>"tanggal", "9"=>"bulan", "10"=>"tahun", "11"=>"no_ktp", "12"=>"alamat", "13"=>"nama_perusahaan", "14"=>"alamat_perusahaan", "15"=>"propinsi", "16"=>"sektor_industri", "17"=>"jabatan", "18"=>"no_telepon", "19"=>"no_fax", "20"=>"no_hp", "21"=>"email", "22"=>"sma", "23"=>"nama_sekolah_sma", "24"=>"jurusan_sma", "25"=>"tahun_lulus_sma", "26"=>"keterangan_sma", "27"=>"d3", "28"=>"nama_sekolah_d3", "29"=>"jurusan_d3", "30"=>"tahun_lulus_d3", "31"=>"keterangan_d3", "32"=>"s1", "33"=>"nama_sekolah_s1", "34"=>"jurusan_s1", "35"=>"tahun_lulus_s1", "36"=>"keterangan_s1", "37"=>"s2", "38"=>"nama_sekolah_s2", "39"=>"jurusan_s2", "40"=>"tahun_lulus_s2", "41"=>"keterangan_s2", "42"=>"s3", "43"=>"nama_sekolah_s3", "44"=>"jurusan_s3", "45"=>"tahun_lulus_s3", "46"=>"keterangan_s3", "47"=>"pas_foto", "48"=>"foto_copy_ktp", "49"=>"foto_copy_ijazah", "50"=>"foto_copy_surat_ijin_perusahaan", "51"=>"surat_keterangan", "52"=>"sebagai", "53"=>"pjknk"],
                    ],
                    
                ]
            );
            $this->Datatable_gugus->table_show();
        }elseif ($action == "update") {
            $data_row = $this->db->query("SELECT * FROM ".$this->table1." WHERE id = '".$keyword."'")->row();
            $data['form_data'] = $data_row;
            $this->load->view('templateadmin/head');
            $this->load->view('admin/login/edit', $data);
            $this->load->view('templateadmin/footer');
        }elseif ($action == "delete") {
            $hapus_data = $this->db->query("DELETE FROM ".$this->table1." WHERE id = '".post("id")."'");
        }
    }

    public function tambah_data()
    {
        $this->load->view('templateadmin/head');
        $this->load->view('admin/login/tambah');
        $this->load->view('templateadmin/footer');
    }


    public function simpan(){
        $username = post("username");
$password = post("password");
$training = post("training");
$nama_lengkap = post("nama_lengkap");
$jenis_kelamin = post("jenis_kelamin");
$status_hubungan = post("status_hubungan");
$tempat_lahir = post("tempat_lahir");
$tanggal = post("tanggal");
$bulan = post("bulan");
$tahun = post("tahun");
$no_ktp = post("no_ktp");
$alamat = post("alamat");
$nama_perusahaan = post("nama_perusahaan");
$alamat_perusahaan = post("alamat_perusahaan");
$propinsi = post("propinsi");
$sektor_industri = post("sektor_industri");
$jabatan = post("jabatan");
$no_telepon = post("no_telepon");
$no_fax = post("no_fax");
$no_hp = post("no_hp");
$email = post("email");
$sma = post("sma");
$nama_sekolah_sma = post("nama_sekolah_sma");
$jurusan_sma = post("jurusan_sma");
$tahun_lulus_sma = post("tahun_lulus_sma");
$keterangan_sma = post("keterangan_sma");
$d3 = post("d3");
$nama_sekolah_d3 = post("nama_sekolah_d3");
$jurusan_d3 = post("jurusan_d3");
$tahun_lulus_d3 = post("tahun_lulus_d3");
$keterangan_d3 = post("keterangan_d3");
$s1 = post("s1");
$nama_sekolah_s1 = post("nama_sekolah_s1");
$jurusan_s1 = post("jurusan_s1");
$tahun_lulus_s1 = post("tahun_lulus_s1");
$keterangan_s1 = post("keterangan_s1");
$s2 = post("s2");
$nama_sekolah_s2 = post("nama_sekolah_s2");
$jurusan_s2 = post("jurusan_s2");
$tahun_lulus_s2 = post("tahun_lulus_s2");
$keterangan_s2 = post("keterangan_s2");
$s3 = post("s3");
$nama_sekolah_s3 = post("nama_sekolah_s3");
$jurusan_s3 = post("jurusan_s3");
$tahun_lulus_s3 = post("tahun_lulus_s3");
$keterangan_s3 = post("keterangan_s3");
$pas_foto = post("pas_foto");
$foto_copy_ktp = post("foto_copy_ktp");
$foto_copy_ijazah = post("foto_copy_ijazah");
$foto_copy_surat_ijin_perusahaan = post("foto_copy_surat_ijin_perusahaan");
$surat_keterangan = post("surat_keterangan");
$sebagai = post("sebagai");
$pjknk = post("pjknk");

        

        $simpan = $this->db->query("
            INSERT INTO login            
            (username,password,training,nama_lengkap,jenis_kelamin,status_hubungan,tempat_lahir,tanggal,bulan,tahun,no_ktp,alamat,nama_perusahaan,alamat_perusahaan,propinsi,sektor_industri,jabatan,no_telepon,no_fax,no_hp,email,sma,nama_sekolah_sma,jurusan_sma,tahun_lulus_sma,keterangan_sma,d3,nama_sekolah_d3,jurusan_d3,tahun_lulus_d3,keterangan_d3,s1,nama_sekolah_s1,jurusan_s1,tahun_lulus_s1,keterangan_s1,s2,nama_sekolah_s2,jurusan_s2,tahun_lulus_s2,keterangan_s2,s3,nama_sekolah_s3,jurusan_s3,tahun_lulus_s3,keterangan_s3,pas_foto,foto_copy_ktp,foto_copy_ijazah,foto_copy_surat_ijin_perusahaan,surat_keterangan,sebagai,pjknk) VALUES ('$username','$password','$training','$nama_lengkap','$jenis_kelamin','$status_hubungan','$tempat_lahir','$tanggal','$bulan','$tahun','$no_ktp','$alamat','$nama_perusahaan','$alamat_perusahaan','$propinsi','$sektor_industri','$jabatan','$no_telepon','$no_fax','$no_hp','$email','$sma','$nama_sekolah_sma','$jurusan_sma','$tahun_lulus_sma','$keterangan_sma','$d3','$nama_sekolah_d3','$jurusan_d3','$tahun_lulus_d3','$keterangan_d3','$s1','$nama_sekolah_s1','$jurusan_s1','$tahun_lulus_s1','$keterangan_s1','$s2','$nama_sekolah_s2','$jurusan_s2','$tahun_lulus_s2','$keterangan_s2','$s3','$nama_sekolah_s3','$jurusan_s3','$tahun_lulus_s3','$keterangan_s3','$pas_foto','$foto_copy_ktp','$foto_copy_ijazah','$foto_copy_surat_ijin_perusahaan','$surat_keterangan','$sebagai','$pjknk')
        ");
    

        if($simpan){
            redirect('admin/login');
        }
    }

    public function update(){
        $username = post("username");
$password = post("password");
$training = post("training");
$nama_lengkap = post("nama_lengkap");
$jenis_kelamin = post("jenis_kelamin");
$status_hubungan = post("status_hubungan");
$tempat_lahir = post("tempat_lahir");
$tanggal = post("tanggal");
$bulan = post("bulan");
$tahun = post("tahun");
$no_ktp = post("no_ktp");
$alamat = post("alamat");
$nama_perusahaan = post("nama_perusahaan");
$alamat_perusahaan = post("alamat_perusahaan");
$propinsi = post("propinsi");
$sektor_industri = post("sektor_industri");
$jabatan = post("jabatan");
$no_telepon = post("no_telepon");
$no_fax = post("no_fax");
$no_hp = post("no_hp");
$email = post("email");
$sma = post("sma");
$nama_sekolah_sma = post("nama_sekolah_sma");
$jurusan_sma = post("jurusan_sma");
$tahun_lulus_sma = post("tahun_lulus_sma");
$keterangan_sma = post("keterangan_sma");
$d3 = post("d3");
$nama_sekolah_d3 = post("nama_sekolah_d3");
$jurusan_d3 = post("jurusan_d3");
$tahun_lulus_d3 = post("tahun_lulus_d3");
$keterangan_d3 = post("keterangan_d3");
$s1 = post("s1");
$nama_sekolah_s1 = post("nama_sekolah_s1");
$jurusan_s1 = post("jurusan_s1");
$tahun_lulus_s1 = post("tahun_lulus_s1");
$keterangan_s1 = post("keterangan_s1");
$s2 = post("s2");
$nama_sekolah_s2 = post("nama_sekolah_s2");
$jurusan_s2 = post("jurusan_s2");
$tahun_lulus_s2 = post("tahun_lulus_s2");
$keterangan_s2 = post("keterangan_s2");
$s3 = post("s3");
$nama_sekolah_s3 = post("nama_sekolah_s3");
$jurusan_s3 = post("jurusan_s3");
$tahun_lulus_s3 = post("tahun_lulus_s3");
$keterangan_s3 = post("keterangan_s3");
$pas_foto = post("pas_foto");
$foto_copy_ktp = post("foto_copy_ktp");
$foto_copy_ijazah = post("foto_copy_ijazah");
$foto_copy_surat_ijin_perusahaan = post("foto_copy_surat_ijin_perusahaan");
$surat_keterangan = post("surat_keterangan");
$sebagai = post("sebagai");
$pjknk = post("pjknk");
  $key = post('id'); 
        $simpan = $this->db->query("
            UPDATE login SET  username = '$username', password = '$password', training = '$training', nama_lengkap = '$nama_lengkap', jenis_kelamin = '$jenis_kelamin', status_hubungan = '$status_hubungan', tempat_lahir = '$tempat_lahir', tanggal = '$tanggal', bulan = '$bulan', tahun = '$tahun', no_ktp = '$no_ktp', alamat = '$alamat', nama_perusahaan = '$nama_perusahaan', alamat_perusahaan = '$alamat_perusahaan', propinsi = '$propinsi', sektor_industri = '$sektor_industri', jabatan = '$jabatan', no_telepon = '$no_telepon', no_fax = '$no_fax', no_hp = '$no_hp', email = '$email', sma = '$sma', nama_sekolah_sma = '$nama_sekolah_sma', jurusan_sma = '$jurusan_sma', tahun_lulus_sma = '$tahun_lulus_sma', keterangan_sma = '$keterangan_sma', d3 = '$d3', nama_sekolah_d3 = '$nama_sekolah_d3', jurusan_d3 = '$jurusan_d3', tahun_lulus_d3 = '$tahun_lulus_d3', keterangan_d3 = '$keterangan_d3', s1 = '$s1', nama_sekolah_s1 = '$nama_sekolah_s1', jurusan_s1 = '$jurusan_s1', tahun_lulus_s1 = '$tahun_lulus_s1', keterangan_s1 = '$keterangan_s1', s2 = '$s2', nama_sekolah_s2 = '$nama_sekolah_s2', jurusan_s2 = '$jurusan_s2', tahun_lulus_s2 = '$tahun_lulus_s2', keterangan_s2 = '$keterangan_s2', s3 = '$s3', nama_sekolah_s3 = '$nama_sekolah_s3', jurusan_s3 = '$jurusan_s3', tahun_lulus_s3 = '$tahun_lulus_s3', keterangan_s3 = '$keterangan_s3', pas_foto = '$pas_foto', foto_copy_ktp = '$foto_copy_ktp', foto_copy_ijazah = '$foto_copy_ijazah', foto_copy_surat_ijin_perusahaan = '$foto_copy_surat_ijin_perusahaan', surat_keterangan = '$surat_keterangan', sebagai = '$sebagai', pjknk = '$pjknk' WHERE id = '$key'
            ");
    

        if($simpan){
            redirect('admin/login');
        }
    }
    
}
