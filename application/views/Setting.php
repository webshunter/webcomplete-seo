<br>
<div class="notika-email-post-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="email-statis-inner notika-shadow">
                    <h1 class="m-0 text-dark">Setting</h1>
                    <p>Pengaturan dan setting website anda.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <br>
<div class="notika-email-post-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="email-statis-inner notika-shadow">
                    <form action="<?= site_url('admin/setting/simpan')?>"  method="post" enctype="multipart/form-data">
                        <h4>
                            informasi seputar perusahaan
                        </h4>
                        <?= 
                            form::input([
                                "title" => "nama perusahaan",
                                "type" => "text",
                                "fc" => "nama_perusahaan",
                                "placeholder" => "Nama perusahaan anda",
                                "value" => json_decode(ffread('assets/setting.json'))->nama_perusahaan
                            ])
                        ?>
                        <img src="<?= base_url('assets/logo.png?v='.date('ymdhis'))?>" width="150px" alt="">
                        <?= 
                            form::input([
                                "title" => "logo perusahaan",
                                "type" => "file",
                                "fc" => "logo",
                                "placeholder" => "Nama perusahaan anda",
                            ])
                        ?>
                        <?= 
                            form::input([
                                "title" => "Username",
                                "type" => "text",
                                "fc" => "username",
                                "placeholder" => "inputkan username",
                                "value" => json_decode(ffread('assets/setting.json'))->username
                            ])
                        ?>
                        <?= 
                            form::input([
                                "title" => "Password",
                                "type" => "password",
                                "fc" => "password",
                                "placeholder" => "inputkan password",
                                "value" => json_decode(ffread('assets/setting.json'))->password
                            ])
                        ?>
                        <?= 
                            form::editor([
                                "title" => "Biodata perusahaan",
                                "type" => "text",
                                "fc" => "biodata",
                                "placeholder" => "biodata perusahaan",
                                "value" => json_decode(ffread('assets/setting.json'))->biodata
                            ])
                        ?>
                        <h4>
                            Setting tema
                        </h4>
                        <?= 
                            form::input([
                                "title" => "Warna Navbar",
                                "type" => "text",
                                "fc" => "navbarbg",
                                "placeholder" => "biodata perusahaan",
                                "value" => json_decode(ffread('assets/setting.json'))->navbarbg
                            ])
                        ?>
                        <?= 
                            form::input([
                                "title" => "Warna footer",
                                "type" => "text",
                                "fc" => "footerbg",
                                "placeholder" => "biodata perusahaan",
                                "value" => json_decode(ffread('assets/setting.json'))->footerbg
                            ])
                        ?>
                        <h4>
                            Seo Setting
                        </h4>
                        <h4>
                            Copyright
                        </h4>
                        <?= 
                            form::editor([
                                "title" => "Copyright",
                                "type" => "text",
                                "fc" => "copyright",
                                "placeholder" => "copyright",
                                "value" => json_decode(ffread('assets/setting.json'))->copyright
                            ])
                        ?>

                        <button type="submit" >simpan</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>