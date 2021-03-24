<?php


class Form extends CI_Model
{

    public function mydbr($a){
        return $this->db->query($a)->result();
    }
  
    public function mydbrow($a){
        return $this->db->query($a)->row();
    }
  
    public function updateqr($table, $condition, $data)
    {
      $cc = array_keys($condition);
      foreach($cc as $cc){
          $this->db->where($cc, $condition[$cc]);
      }
      return $this->db->update($table, $data);
    }
  
    public function qrsave($table, $data)
    {
      return $this->db->insert($table, $data);
    }
  
    public static function save($a, $b = []){
      return (new self)->qrsave($a, $b);
    }
  
    public static function update($a, $b = [], $c=[]){
      return (new self)->updateqr($a, $b, $c);
    }




    public static function slider()
    {
        $html = "
        <div id='myCarousel' class='carousel slide' data-ride='carousel'>
          <!-- Indicators -->
          <ol class='carousel-indicators'>";
        foreach((new self)->mydbr("SELECT * FROM slider") as $key => $slide){
            if($key == 0){
            $html .= "
              <li data-target='#myCarousel' data-slide-to='$key' class='active'></li>
              ";
            }else{
                $html .= "
                <li data-target='#myCarousel' data-slide-to='$key'></li>
                ";
            }
        }



            $html .= "</ol>";
            $html .= "      
          <!-- Wrapper for slides -->
          <div class='carousel-inner'>
          ";
          foreach((new self)->mydbr("SELECT * FROM slider") as $key => $slide){
            if($key == 0){
                $html .= "
                    <div class='item active'>
                    <img src='".base_url('slider-image/'.$slide->gambar)."' alt='$slide->gambar' style='width:100%;'>
                    </div>
                ";
            }else{
                $html .= "
                    <div class='item'>
                    <img src='".base_url('slider-image/'.$slide->gambar)."' alt='$slide->gambar' style='width:100%;'>
                    </div>
                ";
                }
            }
            $html .= "
          </div>
      
          <!-- Left and right controls -->
          <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
            <span class='glyphicon glyphicon-chevron-left'></span>
            <span class='sr-only'>Previous</span>
          </a>
          <a class='right carousel-control' href='#myCarousel' data-slide='next'>
            <span class='glyphicon glyphicon-chevron-right'></span>
            <span class='sr-only'>Next</span>
          </a>
        </div>
        ";

        return $html;

    }



    public static function select_db_material($data = "")
      {
  
          $dataNama = $data['data'];
          $name = $data['name'];
  
          $getData = (new self)->mydbr("SELECT DISTINCT(".$name.") as ".$name.", ".$dataNama." FROM ".$data['db']);
  
          $createOption = '<option selected value="">--pilih data--</option>';
          
          foreach ($getData as $key => $value) {
              if (isset($data['selected'])) {
                  if ($data['selected'] == $value->$dataNama) {
                      $createOption .= '<option selected value="'.$value->$dataNama.'">'.$value->$name.'</option>';
                  }else{
                      $createOption .= '<option value="'.$value->$dataNama.'">'.$value->$name.'</option>';
                  }
              }else{
                  $createOption .= '<option value="'.$value->$dataNama.'">'.$value->$name.'</option>';
              }
          }
  
          $html = "
          <div class='input-field col s12'>
              <select id='".$data['fc']."' name='".$data['fc']."'>
              $createOption
              </select>
              <label for='".$data['fc']."'>".$data['title']."</label>
          </div> 
          <script>
              $(document).ready(function(){
                  $('select').formSelect();
              });
          </script>
          <div style='clear: both;'></div>
          ";
          return $html;
      }
  
    public static function select_db($data = "")
      {
  
          $dataNama = $data['data'];
          $name = $data['name'];

          $condition = [];

          if (isset($data['condition'])) {
              $condition = $data['condition'];
          }

          $cc = array_keys($condition);

          $ccr = "";

          if (count($cc) > 0) {
              $ccr = " WHERE ";
          }

          foreach ($cc as $key => $elm) {
            if ($key == 0) {
                $ss = $condition[$elm];
                $ccr .= " $elm = '$ss' ";
            }else{
                $ss = $condition[$elm];
                $ccr .= " AND $elm = '$ss' ";
            } 
          }

  
          $getData = (new self)->mydbr("SELECT DISTINCT(".$name.") as ".$name.", ".$dataNama." FROM ".$data['db'].$ccr);
  
          $createOption = '<option selected value="">--pilih data--</option>';
          
          foreach ($getData as $key => $value) {
              if (isset($data['selected'])) {
                  if ($data['selected'] == $value->$dataNama) {
                      $createOption .= '<option selected value="'.$value->$dataNama.'">'.$value->$name.'</option>';
                  }else{
                      $createOption .= '<option value="'.$value->$dataNama.'">'.$value->$name.'</option>';
                  }
              }else{
                  $createOption .= '<option value="'.$value->$dataNama.'">'.$value->$name.'</option>';
              }
          }
  
          $html = "
          <div class='form-group'>
              <label for='".$data['fc']."'>".$data['title']."</label>
              <select id='".$data['fc']."' name='".$data['fc']."' class='form-control'>
                  $createOption
              </select>
          </div> 
          ";
          return $html;
      }
      
    public static function multiple($data = "")
      {
  
          $dataNama = $data['data'];
          $name = $data['name'];
  
          $getData = (new self)->mydbr("SELECT DISTINCT(".$name.") as ".$name.", ".$dataNama." FROM ".$data['db']);
  
          $createOption = '<option value="">--pilih data--</option>';
          
          foreach ($getData as $key => $value) {
              if (isset($data['selected'])) {
                  if ($data['selected'] == $value->$dataNama) {
                      $createOption .= '<option selected value="'.$value->$dataNama.'">'.$value->$name.'</option>';
                  }else{
                      $createOption .= '<option value="'.$value->$dataNama.'">'.$value->$name.'</option>';
                  }
              }else{
                  $createOption .= '<option value="'.$value->$dataNama.'">'.$value->$name.'</option>';
              }
          }
  
          $html = "
          <div class='form-group'>
              <label for='".$data['fc']."'>".$data['title']."</label>
              <select id='".$data['fc']."' name='".$data['fc']."[]' class='select2' multiple='multiple' data-placeholder='Select a State' style='width: 100%;'>
                  $createOption
              </select>
          </div>
          <script>
              $(function () {
                  $('#".$data['fc']."').select2()
              })
          </script>
          ";
          return $html;
      }
  
      public static function getfile($data, $path, $id = "", $table = "")
      {
          if (!file_exists($path)) {
              mkdir($path, 0777, true);
          }
          $gambar = "";
          if ($id != "" && $table != "") {
              $gambar = (new self)->mydbrow("SELECT * FROM $table WHERE id = '$id'");
          }
          $data = $_FILES[$data];
          $ext = pathinfo($data['name'], PATHINFO_EXTENSION);
          if ($data['name'] != "") {
              if ($gambar != "") {
                  if (isset($gambar)) {
                      unlink($path.'/'.$gambar->$data);
                  }
              }
              // cek if file exist
              $uniq = uniqid();
              if(file_exists($path.'/'.$uniq.'.'.$ext)){
                  unlink($path.'/'.$uniq.'.'.$ext);
                  move_uploaded_file($data['tmp_name'], $path.'/'.$uniq.'.'.$ext);
              }else{
                  move_uploaded_file($data['tmp_name'], $path.'/'.$uniq.'.'.$ext);
              }
              return $uniq.'.'.$ext;
          }else{
              return $gambar->$data;
          }
      }
  
      public static function read_db($a = ""){
          return (new self)->mydbr($a);
      }
  
      public static function cekdata($data, $nilai)
      {
          if (isset($data[$nilai])) {
              return $data[$nilai];
          }else{
              return "";
          }
      }




  
      public static function input($data)
      {
          $html = '<div class="row">';
          $html .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
          $html .= '<div class="form-group float-lb">';
          $html .= '<div class="nk-int-st">';
          if (isset($data["show-image"])) {
              if ($data["show-image"] === true) {
                  $html .= '	<div  style="text-align: center;">';
                  if (isset($data["path-image"])) {
                      $html .= '	 <img src="'.base_url().$data["path-image"].'" width="250px" height="auto" id="gambar-'.self::cekdata($data, 'fc').'" alt="">';
                  }else{
                      $html .= '	 <img src="" width="250px" height="auto" id="gambar-'.self::cekdata($data, 'fc').'" alt="">';
                  }
                  $html .= '	</div>';
              }
          }
          
          if (self::cekdata($data, 'type') != "hidden") {
            $html .= '	<label for="'.self::cekdata($data, 'fc').'" >'.self::cekdata($data,'title').'</label>';
          }

          $html .= '	<input ';
          $html .= ' type="'.self::cekdata($data, 'type').'" ';
          $html .= ' id="'.self::cekdata($data, 'fc').'" ';
          $html .= ' name="'.self::cekdata($data, 'fc').'" ';
          $html .= ' class="form-control '.self::cekdata($data, 'class').'" ';
          if (isset($data['placeholder'])) {
              $html .= ' placeholder="'.$data['placeholder'].'" ';
          }
          
          if (isset($data['video']) && $data['video'] === true) {
              $html .= ' data-video="'.self::cekdata($data, 'fc').'" ';
          }
  
          if (isset($data['value'])) {
              $html .= ' value="'.$data['value'].'" ';
          }
          if (isset($data['autocomplete'])) {
              if ($data['autocomplete'] == 'off') {
                  $html .= ' autocomplete="off" ';
              }
          }
          if (isset($data['required'])) {
              if (isset($data['required'])) {
                  $html .= ' required ';
              }
          }
  
          if (isset($data['multiple'])) {
              if ($data['multiple'] === true) {
                  $html .= " multiple ";
              }
          }
  
          if(isset($data['accept'])){
              if ($data['accept'] === "images") {
                  $html .= "accept='image/*'";
              }
          }
  
          if(isset($data['tags'])){
              if ($data['tags'] === true) {
                  $html .= " data-role='tagsinput' ";
              }
          }
  
          if(isset($data['attr'])){
              $cm = $data['attr'];
              $html .= " $cm ";
          }
  
          if(isset($data['num-only'])){
              if ($data['num-only'] === true) {
                  $html .= " onkeypress='numonly(event)' ";
              }
          }
          $html .= '>';
  
          
          
          if(isset($data['info'])){
              $html .= '<p style="color: #aaa; font-size: 12px;">';
              $html .= '<i>';
              $html .= $data['info'];
              $html .= '</i>';
              $html .= '</p>';
          }
              
  
          if(isset($data['num-only'])){
              if ($data['num-only'] === true) {
                  $html .= '
                  <script>
  
                      function numonly(evt) {
                          var theEvent = evt || window.event;
                      
                          // Handle paste
                          if (theEvent.type === "paste") {
                              key = event.clipboardData.getData("text/plain");
                          } else {
                          // Handle key press
                              var key = theEvent.keyCode || theEvent.which;
                              key = String.fromCharCode(key);
                          }
                          var regex = /[0-9]|\./;
                          if( !regex.test(key) ) {
                          theEvent.returnValue = false;
                          if(theEvent.preventDefault) theEvent.preventDefault();
                          }
                      }
  
                      </script>
  
                  ';
              }
          }
  
          if (isset($data["show-image"])) {
              if ($data["show-image"] === true) {
                  $html .= '
                  <script>
                      function bacagambarnya(input){
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();
  
                              reader.onload = function (e){
                                  $("#gambar-'.self::cekdata($data, 'fc').'").attr("src", e.target.result);
                              }
                              reader.readAsDataURL(input.files[0]);
                          }
                      }
  
                      $("#'.self::cekdata($data, 'fc').'").change(function(){
                          bacagambarnya(this);
                      })
                  </script>
  
              ';
              }
          }
          $html .= '</div>';
          $html .= '</div>';
          $html .= '</div>';
          $html .= '</div>';
          return $html;
      }
      public static function editor($data)
      {
          $html = '<div class="form-group">';
          if (isset($data["show-image"])) {
              if ($data["show-image"] === true) {
                  $html .= '	<div  style="text-align: center;">';
                  if (isset($data["path-image"])) {
                      $html .= '	 <img src="'.base_url().$data["path-image"].'" width="250px" height="auto" id="gambar-'.self::cekdata($data, 'fc').'" alt="">';
                  }else{
                      $html .= '	 <img src="" width="250px" height="auto" id="gambar-'.self::cekdata($data, 'fc').'" alt="">';
                  }
                  $html .= '	</div>';
              }
          }
          if (self::cekdata($data, 'type') != "hidden") {
              $html .= '	<label for="'.self::cekdata($data, 'fc').'">'.self::cekdata($data,'title').'</label>';
          }
          $html .= '	<textarea ';
          $html .= ' type="'.self::cekdata($data, 'type').'" ';
          $html .= ' id="'.self::cekdata($data, 'fc').'" ';
          $html .= ' name="'.self::cekdata($data, 'fc').'" ';
          $html .= ' class="form-control '.self::cekdata($data, 'class').'" ';
          if (isset($data['placeholder'])) {
              $html .= ' placeholder="'.$data['placeholder'].'" ';
          }
          if (isset($data['autocomplete'])) {
              if ($data['autocomplete'] == 'off') {
                  $html .= ' autocomplete="off" ';
              }
          }
          if (isset($data['required'])) {
              if (isset($data['required'])) {
                  $html .= ' required ';
              }
          }
  
          if (isset($data['multiple'])) {
              if ($data['multiple'] === true) {
                  $html .= " multiple ";
              }
          }
  
          if(isset($data['accept'])){
              if ($data['accept'] === "images") {
                  $html .= "accept='image/*'";
              }
          }
          $html .= '>';
          if (isset($data['value'])) {
              $html .= htmlspecialchars_decode($data['value']);
          }
          $html .= '</textarea>';
          $html .= '<script>';
          $html .= '$("#'.self::cekdata($data, 'fc').'").summernote()';
          $html .= '</script>';
          $html .= '</div>';
  
          return $html;
      }
  
  
      public static function switch($name = "",$data1 = "", $data2= "", $selected = 'checked')
      {
  
          
          $dataValue = ['checked', ''];
          $arr = [$data1, $data2];
  
          $html = '';
  
          foreach ($arr as $key => $value) {
              if ($dataValue[$key] == $selected) {
                  $html .= '	
                      <div class="icheck-primary d-inline">
                          <input type="radio" id="'.str_replace(' ', '_', $value).'" name="'.$name.'" value="'.$dataValue[$key].'"  checked />
                          <label for="'.str_replace(' ', '_', $value).'">
                              '.$value.'
                          </label>
                      </div>
                  ';
              }else{
                  $html .= '	
                      <div class="icheck-primary d-inline">
                          <input type="radio" id="'.str_replace(' ', '_', $value).'" name="'.$name.'" value="'.$dataValue[$key].'"/>
                          <label for="'.str_replace(' ', '_', $value).'">
                              '.$value.'
                          </label>
                      </div>
                  ';
              }
          }
  
          return $html;
      }
  
  
      public static function radiobutton($data = ""){
          $html = '<div class="form-group clearfix">';
  
  
          $datavalue = $data['value'];
  
          foreach ($datavalue as $key => $value) {
  
              if (isset($data['checked'])) {
  
                  if ($data['checked'] == $value) {
                      
                      $html .= '	<div class="icheck-primary d-inline">
                                      <input type="radio" id="'.str_replace(' ', '_', $value).'" name="'.$data['name'].'" value="'.$value.'"  checked />
                                      <label for="'.str_replace(' ', '_', $value).'">
                                          '.$value.'
                                      </label>
                                  </div>
                          ';
                  }else{
                      
                      $html .= '	<div class="icheck-primary d-inline">
                                      <input type="radio" id="'.str_replace(' ', '_', $value).'" name="'.$data['name'].'" value="'.$value.'" />
                                      <label for="'.str_replace(' ', '_', $value).'">
                                          '.$value.'
                                      </label>
                                  </div>
                          ';
                      
  
                  }
  
                  
              }else{
                  
                  $active = "";
                  if ($key == 0) {
                      $active = "checked";
                  }
  
                  $html .= '	<div class="icheck-primary d-inline">
                                  <input type="radio" id="'.str_replace(' ', '_', $value).'" name="'.$data['name'].'" value="'.$value.'" '.$active.' />
                                  <label for="'.str_replace(' ', '_', $value).'">
                                      '.$value.'
                                  </label>
                              </div>';
  
              }
  
          }
  
          $html .= '</div>';
  
          return $html;
      }
  
      public function select($data)
      {
          $html = '<div class="form-group">';
          $html .= '	<label for="'.self::cekdata($data, 'fc').'">'.self::cekdata($data,'title').'</label>';
          $html .= '	<select ';
          $html .= 'id="'.self::cekdata($data, 'fc').'"';
          $html .= 'name="'.self::cekdata($data, 'fc').'"';
          $html .= 'class="form-control '.self::cekdata($data, 'class').'"';
          $html .= '>';
          $html .= '</select>';
          $html .= '</div>';
          return $html;
      }


      public static function testing()
        {
            echo "testing";
        }

}