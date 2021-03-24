<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('');?>assets/notika/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="<?= base_url('');?>assets/notika/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->

    <!-- replay css -->

    <link rel="stylesheet" href="<?= base_url('');?>assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('');?>assets/notika/css/responsive.css">

    <link rel="stylesheet" href="<?= base_url('');?>mc_sweetalert/sweetalert.css">


    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('')?>assets/notika/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- from notika -->
    <!-- datatable area -->

    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/notika/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <!-- style CSS
		============================================ -->
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('')?>assets/notika/css/responsive.css">
    
    <!-- from notika -->

    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
        <script src="<?= base_url('')?>assets/notika/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?= base_url('')?>assets/notika/js/data-table/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('');?>mc_sweetalert/sweetalert.js"></script>

    <!-- bootstrap JS
		============================================ -->
    
        <script src="<?= base_url('assets/file.js') ?>"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?= base_url('');?>assets/notika/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <h3 style="color: white;"><?= json_decode(ffread('assets/setting.json'))->nama_perusahaan  ?></h3>
                        <!-- <a href="#"><img src="<?= base_url('')?>assets/notika/img/logo/logo.png" alt="" /></a> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="<?= site_url('login/out') ?>" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="fas fa-sign-out-alt"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="<?= site_url('admin/magama');?>">Agama</a></li>
                                        <li><a href="<?= site_url('');?>">Dashboard Two</a></li>
                                        <li><a href="<?= site_url('');?>">Dashboard Three</a></li>
                                        <li><a href="<?= site_url('');?>">Dashboard Four</a></li>
                                        <li><a href="<?= site_url('');?>">Analytics</a></li>
                                        <li><a href="<?= site_url('');?>">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('');?>assets/notika/inbox.html">Inbox</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/view-email.html">View Email</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('');?>assets/notika/animations.html">Animations</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/google-map.html">Google Map</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/data-map.html">Data Maps</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/code-editor.html">Code Editor</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/image-cropper.html">Images Cropper</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('');?>assets/notika/flot-charts.html">Flot Charts</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/bar-charts.html">Bar Charts</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/line-charts.html">Line Charts</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('');?>assets/notika/normal-table.html">Normal Table</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('');?>assets/notika/form-elements.html">Form Elements</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/form-components.html">Form Components</a></li>
                                        <li><a href="<?= base_url('');?>assets/notika/form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('');?>assets/notika/notification.html">Notifications</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/alert.html">Alerts</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/modals.html">Modals</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="<?= base_url('');?>assets/notika/contact.html">Contact</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/typography.html">Typography</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/color.html">Color</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="<?= base_url('');?>assets/notika/404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a href="<?= site_url('admin/page'); ?>"><i class="notika-icon notika-house"></i> Page</a>
                        </li>
                        <li><a  href="<?= site_url('admin/meta');?>"><i class="notika-icon notika-edit"></i> Meta</a>
                        </li>
                        <li><a  href="<?= site_url('admin/type');?>"><i class="notika-icon notika-bar-chart"></i> Type</a>
                        </li>
                        <li><a  href="<?= site_url('admin/artikel');?>"><i class="notika-icon notika-windows"></i> Artikel</a>
                        </li>
                        <li><a  href="<?= site_url('admin/sosmed');?>"><i class="notika-icon notika-form"></i> User Sosmed</a>
                        </li>
                        <li><a  href="<?= site_url('admin/slider');?>"><i class="notika-icon notika-form"></i> Slider</a>
                        </li>
                        <li><a  href="<?= site_url('admin/forms');?>"><i class="notika-icon notika-form"></i> Form</a>
                        </li>
                        <li><a  href="<?= site_url('admin/setting');?>"><i class="notika-icon notika-form"></i> Setting</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= site_url('admin/magama');?>">Agama</a></li>
                                <li><a href="<?= site_url('admin/martikel');?>">Artikel</a></li>
                                <li><a href="<?= site_url('admin/mberita');?>">Berita</a></li>
                                <li><a href="<?= site_url('admin/mkabupaten');?>">Kabupaten</a></li>
                                <li><a href="<?= site_url('admin/mkegiatan');?>">Kegiatan</a></li>
                                <li><a href="<?= site_url('admin/mkel');?>">Kelurahan</a></li>
                                <li><a href="<?= site_url('admin/mkelamin');?>">Jenis Kelamin</a></li>
                                <li><a href="<?= site_url('admin/mpekerjaan');?>">Pekerjaan</a></li>
                                <li><a href="<?= site_url('admin/mpendidikan');?>">Pendidikan</a></li>
                                <li><a href="<?= site_url('admin/mprovinsi');?>">Provinsi</a></li>
                                <li><a href="<?= site_url('admin/mstatkel');?>">Status Keluarga</a></li>
                                <li><a href="<?= site_url('admin/mumur');?>">Umur</a></li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= site_url('admin/tbl_artikel');?>">Artikel</a></li>
                                <li><a href="<?= site_url('admin/tbl_berita');?>">Berita</a></li>
                                <li><a href="<?= site_url('admin/tbl_kegiatan');?>">Kegiatan</a></li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('');?>assets/notika/animations.html">Animations</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/google-map.html">Google Map</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/data-map.html">Data Maps</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/code-editor.html">Code Editor</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/image-cropper.html">Images Cropper</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/wizard.html">Wizard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('');?>assets/notika/flot-charts.html">Flot Charts</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/bar-charts.html">Bar Charts</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/line-charts.html">Line Charts</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/area-charts.html">Area Charts</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('');?>assets/notika/normal-table.html">Normal Table</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/data-table.html">Data Table</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('');?>assets/notika/form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/form-components.html">Form Components</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/form-examples.html">Form Examples</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('');?>assets/notika/notification.html">Notifications</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/alert.html">Alerts</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/modals.html">Modals</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/buttons.html">Buttons</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/tabs.html">Tabs</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/accordion.html">Accordion</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/dialog.html">Dialogs</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/popovers.html">Popovers</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/tooltips.html">Tooltips</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/dropdown.html">Dropdowns</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?= base_url('');?>assets/notika/contact.html">Contact</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/invoice.html">Invoice</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/typography.html">Typography</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/color.html">Color</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/login-register.html">Login Register</a>
                                </li>
                                <li><a href="<?= base_url('');?>assets/notika/404.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <?php foreach ($this->db->query("SELECT * FROM artikels")->result() as $key => $value) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= $this->db->query("SELECT * FROM page WHERE type = '' AND position = '' AND tipe_doc = '$value->id' ")->num_rows() ?></span></h2>
                            <p><?= $value->judul; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    
   