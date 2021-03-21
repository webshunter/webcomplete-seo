<?php
$this->load->view("template/header");
$this->load->view("template/navbar");
?>


<main id="main" class="mt-5">



    <!-- ======= Services Section ======= -->
    <section class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Judul</h2>

            </div>

            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="icon-box">
                        <div class="text-center mb-3">
                            <img src="<?= base_url('assets/front/') ?>assets/img/clients/client-1.png" alt="" sizes="" srcset="" class="mx-auto">
                        </div>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cum error nobis officia. Blanditiis fugiat nisi temporibus a accusantium fuga optio, voluptates, cupiditate sunt quia impedit dignissimos rem et dolorum.</p>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet sequi perspiciatis in sunt ipsum id corporis. Veniam accusantium ipsa officia minus magni sed distinctio eveniet, eius facere? Nam, tempore.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla illum rem autem totam in nostrum, provident quas corporis, soluta molestiae unde dignissimos dicta quibusdam laudantium labore excepturi praesentium consectetur fugit?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia qui a accusantium distinctio itaque nostrum quisquam officiis reprehenderit, ipsam repellat voluptates ullam unde labore facilis? Sit deserunt rerum esse sunt unde vel laudantium ipsa modi. Quis sint tempore et provident hic, pariatur deleniti! Commodi, atque quaerat dolorem veniam repellat quas.</p>

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