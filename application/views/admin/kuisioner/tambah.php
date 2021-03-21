<br>
<div class="form-element-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">
          <h1 class="m-0 text-dark">Tambahkan kuisioner</h1>
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
          
          <form action="<?= site_url('admin/kuisioner/simpan') ?>" method="post" enctype="multipart/form-data">
              
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
                        "title" => "user",
                        "type" => "text",
                        "fc" => "user",
                        "placeholder" => "tambahkan user",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "pemateri",
                        "type" => "text",
                        "fc" => "pemateri",
                        "placeholder" => "tambahkan pemateri",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin1",
                        "type" => "text",
                        "fc" => "poin1",
                        "placeholder" => "tambahkan poin1",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin2",
                        "type" => "text",
                        "fc" => "poin2",
                        "placeholder" => "tambahkan poin2",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin3",
                        "type" => "text",
                        "fc" => "poin3",
                        "placeholder" => "tambahkan poin3",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin4",
                        "type" => "text",
                        "fc" => "poin4",
                        "placeholder" => "tambahkan poin4",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin5",
                        "type" => "text",
                        "fc" => "poin5",
                        "placeholder" => "tambahkan poin5",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin6",
                        "type" => "text",
                        "fc" => "poin6",
                        "placeholder" => "tambahkan poin6",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin7",
                        "type" => "text",
                        "fc" => "poin7",
                        "placeholder" => "tambahkan poin7",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin8",
                        "type" => "text",
                        "fc" => "poin8",
                        "placeholder" => "tambahkan poin8",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin9",
                        "type" => "text",
                        "fc" => "poin9",
                        "placeholder" => "tambahkan poin9",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin10",
                        "type" => "text",
                        "fc" => "poin10",
                        "placeholder" => "tambahkan poin10",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin11",
                        "type" => "text",
                        "fc" => "poin11",
                        "placeholder" => "tambahkan poin11",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin12",
                        "type" => "text",
                        "fc" => "poin12",
                        "placeholder" => "tambahkan poin12",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin13",
                        "type" => "text",
                        "fc" => "poin13",
                        "placeholder" => "tambahkan poin13",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin14",
                        "type" => "text",
                        "fc" => "poin14",
                        "placeholder" => "tambahkan poin14",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin15",
                        "type" => "text",
                        "fc" => "poin15",
                        "placeholder" => "tambahkan poin15",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin16",
                        "type" => "text",
                        "fc" => "poin16",
                        "placeholder" => "tambahkan poin16",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "poin17",
                        "type" => "text",
                        "fc" => "poin17",
                        "placeholder" => "tambahkan poin17",
                    ])
                ?>
            
                <?= 
                    form::input([
                        "title" => "saran",
                        "type" => "text",
                        "fc" => "saran",
                        "placeholder" => "tambahkan saran",
                    ])
                ?>
            
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-default" href="<?= site_url('admin/kuisioner'); ?>">Back</a>
              </div>
          </form>

				</div>
			</div>
		</div>
	</div>
</div>
</section>