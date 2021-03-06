<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan pertanyaan</h1>
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
          
          <form action="<?= site_url('admin/pertanyaan/simpan') ?>" method="post" enctype="multipart/form-data">
              
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
                        "title" => "user_id",
                        "type" => "text",
                        "fc" => "user_id",
                        "placeholder" => "tambahkan user_id",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pertanyaan",
                        "type" => "text",
                        "fc" => "pertanyaan",
                        "placeholder" => "tambahkan pertanyaan",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "jawaban",
                        "type" => "text",
                        "fc" => "jawaban",
                        "placeholder" => "tambahkan jawaban",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/pertanyaan'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>