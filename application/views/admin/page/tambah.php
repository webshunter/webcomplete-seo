<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan Page</h1>
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
          
          <form action="<?= site_url('admin/page/simpan') ?>" method="post" enctype="multipart/form-data">
              
                <?= 
                    form::input([
                        "title" => "Judul",
                        "type" => "text",
                        "fc" => "judul",
                        "placeholder" => "tambahkan judul",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "Slug",
                        "type" => "text",
                        "fc" => "slug",
                        "placeholder" => "tambahkan slug",
                    ])
                ?>
            
                <?= 
                    form::select_db([
                        "title" => "Type",
                        "type" => "password",
                        "fc" => "type",
                        "placeholder" => "tambahkan type",
                        "db" => "type",
                        "data" => "id",
                        "name" => "name",
                    ])
                ?>
            
                <?= 
                    form::select_db([
                        "title" => "Posisi",
                        "type" => "number",
                        "fc" => "position",
                        "placeholder" => "tambahkan position",
                        "db" => "page",
                        "data" => "id",
                        "name" => "judul",
                        "condition" => [
                          "type" => "1"
                        ],
                    ])
                ?>
                <?= 
                    form::select_db([
                        "title" => "tipe document",
                        "type" => "number",
                        "fc" => "tipe_doc",
                        "placeholder" => "tambahkan tipe document",
                        "db" => "artikels",
                        "data" => "id",
                        "name" => "judul"
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/page'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>