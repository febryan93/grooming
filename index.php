<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Grooming</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">


</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Syakia Cat Grooming </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                        <a class="nav-link" href="#layanan">Layanan</a>
                        <a class="nav-link" href="#artikel">Artikel</a>
                        <a class="nav-link" href="#kontak">Kontak Kami</a>

                    </div>
                </div>
            </div>
    </div>
    </nav>


    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/image/carousel1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/image/carousel2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="asset/image/carousel3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Tentang -->
    <section class="tentang" id="tentang" section-padding" data-scroll-index='1'>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 section-title text-center">
                    <h3>Tentang</h3>
                    <p>"Semua ini berawal dari kecintaan saya sama kucing-kucing, dan akhirnya saya mencoba untuk
                        membuka petshop sendiri hingga sekarang ini," ..</p>
                    <span class="section-title-line"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tentang -->

    <!-- Layana Kami -->
    <section class="layanan" id="layanan" section-padding" data-scroll-index='1'>
        <div class="container mt-5">
            <div class="row text-center">
                <h3>Layanan kami</h3>
                <div class="col-sm-4">
                    <div class="card card b">
                        <h5 class="card-title">Bathing</h5>
                        <img src="asset/image/catbath.jpg">
                        <p class="card-text">Pada proses ini, seluruh badan kucing akan dibasahi secara merata hingga ke kulit dengan hati-hati supaya air tidak masuk ke dalam telinga. Kemudian diusap menggunakan shampoo khusus untuk kucing yang aman bagi kulit kucing Anda.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title">Pemotongan Kuku</h5>
                        <img src="asset/image/kukucat.jpg">
                        <p class="card-text">Perawatan kuku kucing Anda, supaya lebih sehat, mengurangi risiko melukai owner, dan lebih terlihat. Kuku kucing Anda akan dipotong sesuai dengan batasannya, agar tidak terlalu dalam dan menyebabkan kucing kesakitan.</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title">Pemotongan Kuku</h5>
                        <img src="asset/image/kukucat.jpg">
                        <p class="card-text">Perawatan kuku kucing Anda, supaya lebih sehat, mengurangi risiko melukai owner, dan lebih terlihat. Kuku kucing Anda akan dipotong sesuai dengan batasannya, agar tidak terlalu dalam dan menyebabkan kucing kesakitan.</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title">Pemotongan Kuku</h5>
                        <img src="asset/image/kukucat.jpg">
                        <p class="card-text">Perawatan kuku kucing Anda, supaya lebih sehat, mengurangi risiko melukai owner, dan lebih terlihat. Kuku kucing Anda akan dipotong sesuai dengan batasannya, agar tidak terlalu dalam dan menyebabkan kucing kesakitan.</p>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title">Pembersihan Telinga</h5>
                        <img src="asset/image/telingacat.jpeg">
                        <p class="card-text">Sebagian besar telinga bagian dalam kucing pastinya akan kotor. Karena kucing tidak dapat membersihkan telinganya sendiri seperti mereka membersihkan badan sendiri</p>
                        <!-- <a href="">Baca selengkapnya</a> dengan cara menjilat-jilat. Melalui treatment ears cleaning ini, Kesehatan telinga kucing akan diperiksa apakah berisiko memiliki penyakit atau tidak. Dan selain itu akan dibersihkan bagian dalam telinga yang biasanya kotor dengan menggunakan cairan ears cleaner khusus.</p> -->

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title">Merapihkan Bulu</h5>
                        <img src="asset/image/catsisir.jpg">
                        <p class="card-text">Dalam proses ini, bulu pada paw serta sekitar anus kami bantu untuk rapihkan agar kucing Anda nyaman saat beraktivitas..</p>

                    </div>
                </div>
            </div>

    </section>
    <!-- End Layanan Kami -->

    <!-- Artikel -->
    <section class="artikel" id="artikel">
        <div class="container mt-2">
            <div class="col-md-12 text-center">
                <h3>Artikel</h3>
                <p>Memiliki peliharaan di rumah dapat menjadi sebuah pengalaman baru yang mendebarkan.

                    Hewan peliharan dapat mendatangkan suasana baru di rumah.

                    Ada berbagai jenis hewan peliharaan yang favorit untuk dipelihara seperti kucing, anjing, kelinci, ikan,
                    dan beberapa jenis hewan lainnya.

                    Kucing adalah salah satu hewan peliharaan yang umum dipilih karena tingkahnya yang menggemaskan dan
                    populasinya sangat banyak di Indonesia.

                    Penting bagi Moms dan Dads mengetahui cara merawat kucing dengan baik dan menjaganya agar terhindar dari
                    penyakit yang dapat membahayakan nyawanya.

                    Berikut ini adalah beberapa dasar cara merawat kucing yang harus diperhatikan mengutip dari American
                    Society for the Prevention of Cruelty to Animals (ASPCA).</p>
            </div>
        </div>
    </section>

    <!-- End Artikel -->

    <!-- Testimonial -->
    <section class="testimonial">
        <div class="row text-center">
            <div class="col-lg-12">
                <h5> "Thankyou syakia cat grooming is the best"</h5>
            </div>
        </div>
    </section>
    <!-- end Testimonial -->

    <!-- figure -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center d-flex">
                <figure class="figure">
                    <img src="asset/image/figure2.jpg" class="figure-img img-fluid rounded-circle" alt="testi2">
                </figure>
                <figure class="figure">
                    <img src="asset/image/figure1.jpg" class="figure-img img-fluid rounded-circle utama" alt="testi1">
                    <figcaption class="figure-caption">
                        <h5>Fransiska</h5>
                        <p>desainer</p>
                    </figcaption>
                </figure>
                <figure class="figure">
                    <img src="asset/image/figure3.jpg" class="figure-img img-fluid rounded-circle" alt="testi3">
                </figure>
            </div>
        </div>
    </div>
    <!-- end figure -->

    <!-- Remove the container if you want to extend the Footer to full width. -->

    <!-- Footer -->
    <div class="container my-5">
        <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
                <!-- Left -->
                <div class="me-5">
                    <span>Info Seputar Syakia Cat Grooming Hubungi Sosial Media Kami:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Syakia Cat Grooming</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                Grooming sehat Grooming jamur,kutu Grooming khusus,sensitif Tetes kutu Loncat Suntik jamur (jastip) Steril (jastip) Kebiri (jastip) Cat hotel Penitipan kucing Layanan home servis Layanan antar jemput
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Layanan Kami</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a class="text-dark">Grooming Kucing</a>
                            </p>
                            <p>
                                <a class="text-dark">Vitamin Kucing</a>
                            </p>
                            <p>
                                <a class="text-dark">Salon Kucing</a>
                            </p>
                            <p>
                                <a class="text-dark">Penitipan Kucing</a>
                            </p>
                        </div>
                        <!-- Grid column -->


                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> Perum Taman Kirana Surya <span>BlokF2.No.16 Kel.Pesanggrahan</span> <span> Kec.Solear Kab.Tanggerang</span></p>
                            <p><i class="fas fa-envelope mr-3"></i> groomingtgr@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> +6285799571676</p>
                            <p> <i class="fab fa-instagram"></i> groomingkucingtanggerang</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-dark" href="#">Syakiacatgrooming.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
    <!-- javascrit bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>