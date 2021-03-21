<br>
<div class="notika-email-post-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="email-statis-inner notika-shadow">
                    <h1 class="m-0 text-dark">slider</h1>
                    <p>Untuk menggunakan slider anda harus menambahkan text <b>{{slider}}</b> pada template</p>
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
                  <?php
                    link_button([
                      "link" => "admin/slider/tambah_data",
                      "class" => "btn btn-success",
                      "text" => "Tambah Data",
                    ]);
                  ?>
                  <hr>
                      <?= $datatable ?>
                  </div>
              </div>
          </div>
      </div>
  </div>