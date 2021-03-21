<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan batas_pengerjaan</h1>
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
          
          <form action="<?= site_url('admin/batas_pengerjaan/simpan') ?>" method="post" enctype="multipart/form-data">
              
                <?= 
                    form::input([
                        "title" => "soal_id",
                        "type" => "text",
                        "fc" => "soal_id",
                        "placeholder" => "tambahkan soal_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "user",
                        "type" => "text",
                        "fc" => "user",
                        "placeholder" => "tambahkan user",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "mulai",
                        "type" => "text",
                        "fc" => "mulai",
                        "placeholder" => "tambahkan mulai",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "berakhir",
                        "type" => "text",
                        "fc" => "berakhir",
                        "placeholder" => "tambahkan berakhir",
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