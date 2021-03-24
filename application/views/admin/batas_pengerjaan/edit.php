<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Ubah batas_pengerjaan</h1>
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

          <form action="<?= site_url('admin/batas_pengerjaan/update') ?>" method="post" enctype="multipart/form-data">
              
        <?= 
            form::input([
                "type" => "hidden",
                "fc" => "id",
                "value" => $form_data->id,
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
                        "title" => "user",
                        "type" => "text",
                        "fc" => "user",
                        "placeholder" => "tambahkan user",
                        "value" => $form_data->user,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "mulai",
                        "type" => "text",
                        "fc" => "mulai",
                        "placeholder" => "tambahkan mulai",
                        "value" => $form_data->mulai,
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "berakhir",
                        "type" => "text",
                        "fc" => "berakhir",
                        "placeholder" => "tambahkan berakhir",
                        "value" => $form_data->berakhir,
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/batas_pengerjaan'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>