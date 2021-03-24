<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Ubah soal</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">

          <form action="<?= site_url('admin/soal/update') ?>" method="post" enctype="multipart/form-data">
              
        <?= 
            form::input([
                "type" => "hidden",
                "fc" => "id",
                "value" => $form_data->id,
            ])
        ?>
    
                <?= 
                    form::input([
                        "title" => "nama_soal",
                        "type" => "text",
                        "fc" => "nama_soal",
                        "placeholder" => "tambahkan nama_soal",
                        "value" => $form_data->nama_soal,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jenis_soal",
                        "type" => "text",
                        "fc" => "jenis_soal",
                        "placeholder" => "tambahkan jenis_soal",
                        "value" => $form_data->jenis_soal,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "durasi",
                        "type" => "text",
                        "fc" => "durasi",
                        "placeholder" => "tambahkan durasi",
                        "value" => $form_data->durasi,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "durasi_halaman",
                        "type" => "text",
                        "fc" => "durasi_halaman",
                        "placeholder" => "tambahkan durasi_halaman",
                        "value" => $form_data->durasi_halaman,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "kondisi",
                        "type" => "text",
                        "fc" => "kondisi",
                        "placeholder" => "tambahkan kondisi",
                        "value" => $form_data->kondisi,
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