<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= json_decode(ffread('assets/setting.json'))->nama_perusahaan  ?><?= $judul; ?></title>
    <meta name="description" content="DESKRIPSI BLOG ANDA" />
    <meta name="resource-type" content="document" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta content='id' name='language'/>
    <meta content='id' name='geo.country'/>
    <meta content='Indonesia' name='geo.placename'/>
    <meta name="author" content="gugus" />
    <meta name="contact" content="gugus@gmail.com" />
    <meta name="copyright" content="<?= json_decode(ffread('assets/setting.json'))->copyright  ?>" />
    <meta name="description" content="DESKRIPSI BLOG ANDA" />

    <?php 

        $meta = $this->db->query("SELECT * FROM meta")->result();

        $metacontent = "";

        foreach ($meta as $key => $value) {
            if ($key == 0) {
                $metacontent .= $value->metaname;
            }else{
                $metacontent .= ', '.$value->metaname;
            }
        }
    
    ?>

    <meta name="keywords" content="<?= $metacontent ?>" />
    
    <link rel="icon" type="image/png" href="<?= base_url('assets/logo.png?v='.date('ymdhis'))?>" />

    <!-- Latest compiled and minified CSS -->
    <!-- Optional theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .slide-height {}

        body {
            padding-top: 90px;
        }

        .footer-bs {
            background-color: <?= json_decode(ffread('assets/setting.json'))->footerbg  ?>;
            padding: 60px 40px;
            color: rgba(255, 255, 255, 1.00);
            margin-bottom: 20px;
            border-bottom-right-radius: 6px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 6px;
        }

        .footer-bs .footer-brand,
        .footer-bs .footer-nav,
        .footer-bs .footer-social,
        .footer-bs .footer-ns {
            padding: 10px 25px;
        }

        .footer-bs .footer-nav,
        .footer-bs .footer-social,
        .footer-bs .footer-ns {
            border-color: transparent;
        }

        .footer-bs .footer-brand h2 {
            margin: 0px 0px 10px;
        }

        .footer-bs .footer-brand p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.70);
        }

        .footer-bs .footer-nav ul.pages {
            list-style: none;
            padding: 0px;
        }

        .footer-bs .footer-nav ul.pages li {
            padding: 5px 0px;
        }

        .footer-bs .footer-nav ul.pages a {
            color: rgba(255, 255, 255, 1.00);
            font-weight: bold;
            text-transform: uppercase;
        }

        .footer-bs .footer-nav ul.pages a:hover {
            color: rgba(255, 255, 255, 0.80);
            text-decoration: none;
        }

        .footer-bs .footer-nav h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        .footer-bs .footer-nav ul.list {
            list-style: none;
            padding: 0px;
        }

        .footer-bs .footer-nav ul.list li {
            padding: 5px 0px;
        }

        .footer-bs .footer-nav ul.list a {
            color: rgba(255, 255, 255, 0.80);
        }

        .footer-bs .footer-nav ul.list a:hover {
            color: rgba(255, 255, 255, 0.60);
            text-decoration: none;
        }

        .footer-bs .footer-social ul {
            list-style: none;
            padding: 0px;
        }

        .footer-bs .footer-social h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .footer-bs .footer-social li {
            padding: 5px 4px;
        }

        .footer-bs .footer-social a {
            color: rgba(255, 255, 255, 1.00);
        }

        .footer-bs .footer-social a:hover {
            color: rgba(255, 255, 255, 0.80);
            text-decoration: none;
        }

        .footer-bs .footer-ns h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        .footer-bs .footer-ns p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.70);
        }

        @media (min-width: 768px) {

            .footer-bs .footer-nav,
            .footer-bs .footer-social,
            .footer-bs .footer-ns {
                border-left: solid 1px rgba(255, 255, 255, 0.10);
            }
        }

        .bg-nav {
            background-color: rgba(234, 121, 45, 1) !important;
        }

        .navbar {}

        .navbar-header::before {
            content: "";
            position: absolute;
            display: block;
            background-color: #fff;
            top: 0;
            left: 0;
            height: 90px;
            width: 150px;
            margin-left: -20px;
            z-index: -1;
            -ms-transform: skew(-20deg);
            /* Support untuk IE 9 */
            -webkit-transform: skew(-20deg);
            /* support untuk Safari */
            transform: skew(-20deg);
            /* default syntax */
        }
    </style>
</head>
<nav class="navbar navbar-default navbar-fixed-top " style="background: <?= json_decode(ffread('assets/setting.json'))->navbarbg  ?>; padding: 20px;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: #fff;" href="#"><img height="60px" style="margin-top: -20px;"
            src="<?= base_url('assets/logo.png?v='.date('ymdhis'))?>" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach($this->db->query('SELECT * FROM page')->result() as $key => $ff) : ?>
                <?php if ($ff->type == 1 && $key == 0): ?>
                        <li><a style="color: #fff;" href="<?= site_url('/'); ?>">
                            <?= $ff->judul; ?>
                        </a></li>
                <?php elseif ($ff->type == 1 && $this->db->query("SELECT * FROM page WHERE position = '$ff->id'")->num_rows() == 0): ?>
                <li><a style="color: #fff;" href="<?= site_url('pages/id/'.$ff->slug); ?>">
                            <?= $ff->judul; ?>
                        </a></li>
                <?php elseif ($ff->type == 1 && $this->db->query("SELECT * FROM page WHERE position = '$ff->id'")->num_rows() > 0): ?>
                <li>
                    <a style="color: #fff;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <?= $ff->judul ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($this->db->query("SELECT * From page where position = '$ff->id' and type = 2 ")->result() as $key => $Vres): ?>
                        <li><a href="<?= site_url('pages/id/'.$Vres->slug); ?>">
                                <?= $Vres->judul; ?>
                            </a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php endif;?>
                <?php endforeach; ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php 
        if (isset($id)) {
            echo '<style>';
            if (file_exists('page/pagecss'.$id.'.tmp')) {
                echo ffread('page/pagecss'.$id.'.tmp');
            }
            echo '</style>';
            if (file_exists('page/page'.$id.'.tmp')) {
                $html = ffread('page/page'.$id.'.tmp');
                $html = str_replace('{{slider}}', Form::slider(), $html);
                // cek apakah tipe_doc ada
                $cekslider = $this->db->query("SELECT * FROM page WHERE id = '$id' ")->row();
                $tipe_doc = $cekslider->tipe_doc;
                // cek 
                if ($tipe_doc != "") {
                    
                    // baca semua artikel yang didapat dengan tipe yang sama
                    $listd = $this->db->query("SELECT * FROM page WHERE type = '' AND position = '' AND tipe_doc = '$tipe_doc' ")->result();

                    $createlist = "<ul class=\"nav nav-pills nav-stacked\">";
                    foreach ($listd as $key => $value) {
                        $createlist .= "<li><a href='".site_url('pages/id/'.$value->slug)."'>$value->judul</a></li>";
                    }
                    $createlist .= "</ul>";

                    $html = str_replace('{{artikel}}', $createlist, $html);



                }
                echo $html;
            }
            echo '<script>';
                if (file_exists('page/pagejs'.$id.'.tmp')) {
                    echo ffread('page/pagejs'.$id.'.tmp');
                }
                echo '</script>';
        }
    ?>


<!----------- Footer ------------>
<footer class="footer-bs">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <img src="<?= site_url('assets/logo.png?v='.date('ymdhis')) ?>" alt="LSP" width="120rem">
            <br>
            <?= json_decode(ffread('assets/setting.json'))->biodata  ?>
        </div>
        <div class="col-md-7 footer-nav animated fadeInUp">
            <div class="col-md-6">
                <h4>Menu —</h4>
                <ul class="pages">
                  <?php foreach($this->db->query("SELECT * FROM page WHERE type = '1' ")->result() as $key => $ff) : ?>
                        <li><a href="#">
                                <?= $ff->judul; ?>
                        </a></li>
                  <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Sub Menu —</h4>
                <ul class="pages">
                  <?php foreach($this->db->query("SELECT * FROM page WHERE type = '2' ")->result() as $key => $ff) : ?>
                        <li><a href="<?= site_url('pages/id/'.$ff->slug); ?>">
                            <?= $ff->judul; ?>
                        </a></li>
                  <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Follow Us</h4>

            <ul>
             <?php foreach($this->db->query('SELECT * FROM sosmed')->result() as $key => $sos) : ?>
                <li><a href="#"><span><i class="<?php $sos->icon ?>"></i></span> <?=  $sos->judul ?></a></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</footer>
<section style="text-align:center; margin:10px auto;">
    <p><?= json_decode(ffread('assets/setting.json'))->copyright  ?></p>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>