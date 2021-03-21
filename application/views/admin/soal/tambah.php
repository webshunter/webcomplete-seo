<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan soal</h1>
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
          
          <form action="<?= site_url('admin/soal/simpan') ?>" method="post" enctype="multipart/form-data">
              
                <?= 
                    form::input([
                        "title" => "nama_soal",
                        "type" => "text",
                        "fc" => "nama_soal",
                        "placeholder" => "tambahkan nama_soal",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jenis_soal",
                        "type" => "text",
                        "fc" => "jenis_soal",
                        "placeholder" => "tambahkan jenis_soal",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "durasi",
                        "type" => "text",
                        "fc" => "durasi",
                        "placeholder" => "tambahkan durasi",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "durasi_halaman",
                        "type" => "text",
                        "fc" => "durasi_halaman",
                        "placeholder" => "tambahkan durasi_halaman",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kondisi",
                        "type" => "text",
                        "fc" => "kondisi",
                        "placeholder" => "tambahkan kondisi",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/soal'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>