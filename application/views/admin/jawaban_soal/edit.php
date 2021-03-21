<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Ubah jawaban_soal</h1>
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

          <form action="<?= site_url('admin/jawaban_soal/update') ?>" method="post" enctype="multipart/form-data">
              
        <?= 
            form::input([
                "type" => "hidden",
                "fc" => "id",
                "value" => $form_data->id,
            ])
        ?>
    
                <?= 
                    form::input([
                        "title" => "user_id",
                        "type" => "text",
                        "fc" => "user_id",
                        "placeholder" => "tambahkan user_id",
                        "value" => $form_data->user_id,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "user",
                        "type" => "text",
                        "fc" => "user",
                        "placeholder" => "tambahkan user",
                        "value" => $form_data->user,
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
                        "title" => "data_soal_id",
                        "type" => "text",
                        "fc" => "data_soal_id",
                        "placeholder" => "tambahkan data_soal_id",
                        "value" => $form_data->data_soal_id,
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
                        "title" => "jawaban",
                        "type" => "text",
                        "fc" => "jawaban",
                        "placeholder" => "tambahkan jawaban",
                        "value" => $form_data->jawaban,
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/jawaban_soal'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>