<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan login</h1>
        </div><!-- /.col -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<br>

<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          
          <form action="<?= site_url('admin/login/simpan') ?>" method="post" enctype="multipart/form-data">
              
                <?= 
                    form::input([
                        "title" => "username",
                        "type" => "text",
                        "fc" => "username",
                        "placeholder" => "tambahkan username",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "password",
                        "type" => "text",
                        "fc" => "password",
                        "placeholder" => "tambahkan password",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "training",
                        "type" => "text",
                        "fc" => "training",
                        "placeholder" => "tambahkan training",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama_lengkap",
                        "type" => "text",
                        "fc" => "nama_lengkap",
                        "placeholder" => "tambahkan nama_lengkap",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jenis_kelamin",
                        "type" => "text",
                        "fc" => "jenis_kelamin",
                        "placeholder" => "tambahkan jenis_kelamin",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "status_hubungan",
                        "type" => "text",
                        "fc" => "status_hubungan",
                        "placeholder" => "tambahkan status_hubungan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tempat_lahir",
                        "type" => "text",
                        "fc" => "tempat_lahir",
                        "placeholder" => "tambahkan tempat_lahir",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tanggal",
                        "type" => "text",
                        "fc" => "tanggal",
                        "placeholder" => "tambahkan tanggal",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "bulan",
                        "type" => "text",
                        "fc" => "bulan",
                        "placeholder" => "tambahkan bulan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tahun",
                        "type" => "text",
                        "fc" => "tahun",
                        "placeholder" => "tambahkan tahun",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "no_ktp",
                        "type" => "text",
                        "fc" => "no_ktp",
                        "placeholder" => "tambahkan no_ktp",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "alamat",
                        "type" => "text",
                        "fc" => "alamat",
                        "placeholder" => "tambahkan alamat",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama_perusahaan",
                        "type" => "text",
                        "fc" => "nama_perusahaan",
                        "placeholder" => "tambahkan nama_perusahaan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "alamat_perusahaan",
                        "type" => "text",
                        "fc" => "alamat_perusahaan",
                        "placeholder" => "tambahkan alamat_perusahaan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "propinsi",
                        "type" => "text",
                        "fc" => "propinsi",
                        "placeholder" => "tambahkan propinsi",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "sektor_industri",
                        "type" => "text",
                        "fc" => "sektor_industri",
                        "placeholder" => "tambahkan sektor_industri",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jabatan",
                        "type" => "text",
                        "fc" => "jabatan",
                        "placeholder" => "tambahkan jabatan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "no_telepon",
                        "type" => "text",
                        "fc" => "no_telepon",
                        "placeholder" => "tambahkan no_telepon",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "no_fax",
                        "type" => "text",
                        "fc" => "no_fax",
                        "placeholder" => "tambahkan no_fax",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "no_hp",
                        "type" => "text",
                        "fc" => "no_hp",
                        "placeholder" => "tambahkan no_hp",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "email",
                        "type" => "text",
                        "fc" => "email",
                        "placeholder" => "tambahkan email",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "sma",
                        "type" => "text",
                        "fc" => "sma",
                        "placeholder" => "tambahkan sma",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama_sekolah_sma",
                        "type" => "text",
                        "fc" => "nama_sekolah_sma",
                        "placeholder" => "tambahkan nama_sekolah_sma",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jurusan_sma",
                        "type" => "text",
                        "fc" => "jurusan_sma",
                        "placeholder" => "tambahkan jurusan_sma",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tahun_lulus_sma",
                        "type" => "text",
                        "fc" => "tahun_lulus_sma",
                        "placeholder" => "tambahkan tahun_lulus_sma",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "keterangan_sma",
                        "type" => "text",
                        "fc" => "keterangan_sma",
                        "placeholder" => "tambahkan keterangan_sma",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "d3",
                        "type" => "text",
                        "fc" => "d3",
                        "placeholder" => "tambahkan d3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama_sekolah_d3",
                        "type" => "text",
                        "fc" => "nama_sekolah_d3",
                        "placeholder" => "tambahkan nama_sekolah_d3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jurusan_d3",
                        "type" => "text",
                        "fc" => "jurusan_d3",
                        "placeholder" => "tambahkan jurusan_d3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tahun_lulus_d3",
                        "type" => "text",
                        "fc" => "tahun_lulus_d3",
                        "placeholder" => "tambahkan tahun_lulus_d3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "keterangan_d3",
                        "type" => "text",
                        "fc" => "keterangan_d3",
                        "placeholder" => "tambahkan keterangan_d3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "s1",
                        "type" => "text",
                        "fc" => "s1",
                        "placeholder" => "tambahkan s1",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama_sekolah_s1",
                        "type" => "text",
                        "fc" => "nama_sekolah_s1",
                        "placeholder" => "tambahkan nama_sekolah_s1",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jurusan_s1",
                        "type" => "text",
                        "fc" => "jurusan_s1",
                        "placeholder" => "tambahkan jurusan_s1",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tahun_lulus_s1",
                        "type" => "text",
                        "fc" => "tahun_lulus_s1",
                        "placeholder" => "tambahkan tahun_lulus_s1",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "keterangan_s1",
                        "type" => "text",
                        "fc" => "keterangan_s1",
                        "placeholder" => "tambahkan keterangan_s1",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "s2",
                        "type" => "text",
                        "fc" => "s2",
                        "placeholder" => "tambahkan s2",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama_sekolah_s2",
                        "type" => "text",
                        "fc" => "nama_sekolah_s2",
                        "placeholder" => "tambahkan nama_sekolah_s2",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jurusan_s2",
                        "type" => "text",
                        "fc" => "jurusan_s2",
                        "placeholder" => "tambahkan jurusan_s2",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tahun_lulus_s2",
                        "type" => "text",
                        "fc" => "tahun_lulus_s2",
                        "placeholder" => "tambahkan tahun_lulus_s2",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "keterangan_s2",
                        "type" => "text",
                        "fc" => "keterangan_s2",
                        "placeholder" => "tambahkan keterangan_s2",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "s3",
                        "type" => "text",
                        "fc" => "s3",
                        "placeholder" => "tambahkan s3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "nama_sekolah_s3",
                        "type" => "text",
                        "fc" => "nama_sekolah_s3",
                        "placeholder" => "tambahkan nama_sekolah_s3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jurusan_s3",
                        "type" => "text",
                        "fc" => "jurusan_s3",
                        "placeholder" => "tambahkan jurusan_s3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "tahun_lulus_s3",
                        "type" => "text",
                        "fc" => "tahun_lulus_s3",
                        "placeholder" => "tambahkan tahun_lulus_s3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "keterangan_s3",
                        "type" => "text",
                        "fc" => "keterangan_s3",
                        "placeholder" => "tambahkan keterangan_s3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pas_foto",
                        "type" => "text",
                        "fc" => "pas_foto",
                        "placeholder" => "tambahkan pas_foto",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "foto_copy_ktp",
                        "type" => "text",
                        "fc" => "foto_copy_ktp",
                        "placeholder" => "tambahkan foto_copy_ktp",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "foto_copy_ijazah",
                        "type" => "text",
                        "fc" => "foto_copy_ijazah",
                        "placeholder" => "tambahkan foto_copy_ijazah",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "foto_copy_surat_ijin_perusahaan",
                        "type" => "text",
                        "fc" => "foto_copy_surat_ijin_perusahaan",
                        "placeholder" => "tambahkan foto_copy_surat_ijin_perusahaan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "surat_keterangan",
                        "type" => "text",
                        "fc" => "surat_keterangan",
                        "placeholder" => "tambahkan surat_keterangan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "sebagai",
                        "type" => "text",
                        "fc" => "sebagai",
                        "placeholder" => "tambahkan sebagai",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pjknk",
                        "type" => "text",
                        "fc" => "pjknk",
                        "placeholder" => "tambahkan pjknk",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/login'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>