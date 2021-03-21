<?php
$this->load->view("template/header");
$this->load->view("template/navbar");
?>


<main id="main" class="mt-5">



    <!-- ======= Services Section ======= -->
    <section class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Artikel</h2>

            </div>

            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="icon-box">
                        <!-- <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?= base_url('assets/front/') ?>assets/img/clients/client-1.png" alt="" class="img-thumbnail">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit consectetur provident, tenetur architecto qui iusto aliquid error maxime vero sapiente voluptate excepturi, dignissimos aliquam eaque beatae repellat optio doloribus? Eligendi.</p>
                                        <a href="<?= base_url('') ?>artikel/detail" class="btn btn-primary">Lihat Selengkapnya</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="icon-box">

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="<?= base_url('assets/front/') ?>assets/img/clients/client-1.png" alt="" class="img-thumbnail">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-title">Lorem ipsum dolor sit.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam beatae sint, saepe aliquid provident totam fugiat ullam quis reprehenderit blanditiis distinctio, doloremque aspernatur ad vel?</p>
                                        <a href="<?= base_url('') ?>artikel/detail" class="btn btn-primary">Lihat Selengkapnya</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="icon-box">
                        <!-- <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> -->
                        <ul class="list-group">
                            <li class="list-group-item active">Artikel</li>
                            <a href="http://">
                                <li class="list-group-item">Keluarga</li>
                            </a>
                            <a href="http://">
                                <li class="list-group-item">Tempat Wisata</li>
                            </a>
                            <a href="http://">
                                <li class="list-group-item">Permainan</li>
                            </a>
                            <a href="http://">
                                <li class="list-group-item">Hiburan</li>
                            </a>
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Services Section -->


</main><!-- End #main -->
<?php
$this->load->view("template/footer.php")
?>