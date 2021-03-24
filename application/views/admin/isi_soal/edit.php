<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Ubah isi_soal</h1>
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

          <form action="<?= site_url('admin/isi_soal/update') ?>" method="post" enctype="multipart/form-data">
              
        <?= 
            form::input([
                "type" => "hidden",
                "fc" => "id",
                "value" => $form_data->id,
            ])
        ?>
    
                <?= 
                    form::input([
                        "title" => "no",
                        "type" => "text",
                        "fc" => "no",
                        "placeholder" => "tambahkan no",
                        "value" => $form_data->no,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "soal_id",
                        "type" => "text",
                        "fc" => "soal_id",
                        "placeholder" => "tambahkan soal_id",
                        "value" => $form_data->soal_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "soal",
                        "type" => "text",
                        "fc" => "soal",
                        "placeholder" => "tambahkan soal",
                        "value" => $form_data->soal,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "a",
                        "type" => "text",
                        "fc" => "a",
                        "placeholder" => "tambahkan a",
                        "value" => $form_data->a,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "b",
                        "type" => "text",
                        "fc" => "b",
                        "placeholder" => "tambahkan b",
                        "value" => $form_data->b,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "c",
                        "type" => "text",
                        "fc" => "c",
                        "placeholder" => "tambahkan c",
                        "value" => $form_data->c,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "d",
                        "type" => "text",
                        "fc" => "d",
                        "placeholder" => "tambahkan d",
                        "value" => $form_data->d,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jawaban",
                        "type" => "text",
                        "fc" => "jawaban",
                        "placeholder" => "tambahkan jawaban",
                        "value" => $form_data->jawaban,
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/isi_soal'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>