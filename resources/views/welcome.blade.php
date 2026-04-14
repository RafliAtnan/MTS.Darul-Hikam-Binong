<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MTs Darul Hikam Binong.id</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('mts/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{asset('mts/assets/img/Profil MTS.png')}}" alt="..." style="width:58px; height: 58px" /></a>
                                <div class="masthead-heading text-uppercase" style="color:white;font-family:;">MTS Darul Hikam Binong</div>
 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#profil guru">Profil Guru</a></li>
                        <li class="nav-item"><a class="nav-link" href="#ekskul">Ekskul</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sejarah">Tentang Kami</a></li>             
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase"></div>
            </div>
        </header>
        <!-- Dokumentasi Eskul -->
<section class="page-section bg-light" id="profil guru">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase" >Profil Guru</h2>
            <h3 class="section-subheading text-muted">Daftar Guru</h3>
        </div>

        <div class="row">

            <!-- Foto 1 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a data-bs-toggle="modal" href="#foto1">
                        <img class="img-fluid" src="{{asset('mts/assets/img/profil guru/guru 1.jpg')}}" alt="paskib">
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bu Rina</div>
                        <div class="portfolio-caption-subheading text-muted">Guru Mapel Bahasa Indonesia</div>
                    </div>
                </div>
            </div>

            <!-- Foto 2 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a data-bs-toggle="modal" href="#foto2">
                        <img class="img-fluid" src="{{asset('mts/assets/img/profil guru/guru 2.jpg')}}" alt="Futsal">
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bu Rini</div>
                        <div class="portfolio-caption-subheading text-muted">Guru Mapel Matematika</div>
                    </div>
                </div>
            </div>

            <!-- Foto 3 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a data-bs-toggle="modal" href="#foto3">
                        <img class="img-fluid" src="{{asset('mts/assets/img/profil guru/guru 3.jpg')}}" alt="Paskibra">
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Pa Asep</div>
                        <div class="portfolio-caption-subheading text-muted">Guru Mapel Agama</div>
                    </div>
                </div>
            </div>

            <!-- Foto 4 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a data-bs-toggle="modal" href="#foto4">
                        <img class="img-fluid" src="{{asset('mts/assets/img/profil guru/guru 4.jpg')}}" alt="Basket">
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bu Dika</div>
                        <div class="portfolio-caption-subheading text-muted">Guru Bk</div>
                    </div>
                </div>
            </div>

            <!-- Foto 5 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a data-bs-toggle="modal" href="#foto5">
                        <img class="img-fluid" src="{{asset('mts/assets/img/profil guru/guru 5.jpg')}}" alt="Tari">
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bu Putri</div>
                        <div class="portfolio-caption-subheading text-muted">Guru Mapel Bahasa Inggris</div>
                    </div>
                </div>
            </div>

            <!-- Foto 6 -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a data-bs-toggle="modal" href="#foto6">
                        <img class="img-fluid" src="{{asset('mts/assets/img/profil guru/guru 6.jpg')}}" alt="Voli">
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bu nadin</div>
                        <div class="portfolio-caption-subheading text-muted">Guru Mapel Senibudaya</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Modal Foto -->
<div class="portfolio-modal modal fade" id="foto1" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Bu Rina</h2>
                <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/profil guru/guru 1.jpg')}}" alt="">
                <p>Guru Mapel Bahasa Indonesia</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="foto2" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Bu Rini</h2>
                <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/profil guru/guru 2.jpg')}}" alt="">
                <p>Guru Mapel Matematika</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="foto3" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Pa Asep</h2>
                <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/profil guru/guru 3.jpg')}}" alt="">
                <p>Guru Mapel Agama</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="foto4" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Bu Dika</h2>
                <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/profil guru/guru 4.jpg')}}" alt="">
                <p>Guru BK</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div><div class="portfolio-modal modal fade" id="foto5" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Bu Putri</h2>
                <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/profil guru/guru 5.jpg')}}" alt="">
                <p>Guru Mapel Bahasa Inggris</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="foto6" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Bu nadin</h2>
                <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/profil guru/guru 6.jpg')}}" alt="">
                <p>Guru Mapel Senibudaya</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="ekskul">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Ekstrakurikuler</h2>
                    <h3 class="section-subheading text-muted">Daftar Ekskul.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('mts/assets/img/Foto mts/paskib 2.jpeg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paskibra</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('mts/assets/img/Foto mts/pramuka 4.jpeg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pramuka</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('mts/assets/img/Foto mts/futsal 1.jpeg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Futsal</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('mts/assets/img/Foto mts/voli 1.jpeg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Voli</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('mts/assets/img/eskul/eskul 5.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Karate</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('mts/assets/img/eskul/eskul 6.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Seni Tari</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="sejarah">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                    <h3 class="section-subheading text-muted">MTS Darul Hikam Binong</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('mts/assets/img/Profil MTS.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1970-1973</h4>
                                <h4 class="subheading">Tanggal Berdiri</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">MTS DARUL HIKAM didirikan pada tanggal 1 Januari 1970 dengan Nomor SK Pendirian yang berada dalam naungan Kementerian Agama. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('mts/assets/img/Profil MTS.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2024-2025</h4>
                                <h4 class="subheading">kelulusan</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Kelulusan 100%: Mempertahankan rekor kelulusan sempurna bagi seluruh siswa kelas IX dalam ujian akhir nasional/madrasah.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('mts/assets/img/Profil MTS.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2024</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Meraih berbagai juara dalam ajang Kompetisi Sains Madrasah (KSM/OSM) untuk mata pelajaran Matematika dan IPA.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('mts/assets/img/Profil MTS.png')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2025</h4>
                                <h4 class="subheading">Olimpiade Keagamaan</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Sekolah ini dikenal sebagai lembaga pendidikan berprestasi, salah satunya dengan meraih juara satu pada Olimpiade Madrasah Indonesia (OMI) tingkat Kabupaten Subang tahun 2025. Madrasah ini menyelenggarakan kegiatan belajar mengajar yang mencakup aspek akademik, keagamaan, serta berbagai kegiatan ekstrakurikuler bagi para siswanya. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Jadilah
                                <br />
                                Bagian Dari
                                <br />
                                Kisah Kami
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <!-- Clients-->
       
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hubungi kami</h2>
                    <h3 class="section-subheading text-muted">Jika ada pertanyaan atau sesuatu yang ingin di sampaikan silahkan hubungi kami</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nama Anda *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Diperlukan nama.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email Anda *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Diperlukan email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Telepon Anda *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor telepon wajib diisi.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Pesan Anda *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Sebuah pesan diperlukan.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Pengiriman formulir berhasil!</div>
                            Untuk mengaktifkan formulir ini, daftar di
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Kesalahan saat mengirim pesan!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">
Kirim Pesan</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Kiri (Copyright) -->
                    <div class="col-lg-6 text-lg-start text-center mb-3 mb-lg-0">
                        &copy; MTs Darul Hikam Binong 2026 | Created By 
                        <a href="https://www.erpeel.id/" target="_blank" style="color:blue;">RPL SMKN 1 Binong</a>
                    </div>

                    <!-- Kanan (Sosial Media) -->
                    <div class="col-lg-6 text-lg-end text-center">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/mts.darulhikam/" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/mts.darul.hikam.binong.2025" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/@mtsdarulhikambinong7990" aria-label="Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">PASKIBRA</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/Foto mts/paskib 1.jpeg')}}" alt="..." />
                                    <p>Paskibra (Pasukan Pengibar Bendera) adalah kegiatan ekstrakurikuler di sekolah yang berfokus pada pelatihan baris-berbaris, kedisiplinan, serta tanggung jawab dalam mengibarkan bendera, terutama saat upacara seperti Hari Kemerdekaan Indonesia.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <p>Ekskul Paskibra</p>
                                            
                                        </li>
                                        <li>
                                            <p>
                                                Paskibra merupakan organisasi siswa yang dilatih untuk:
                                                Mengibarkan dan menurunkan bendera merah putih
                                                Melaksanakan upacara dengan tertib dan khidmat
                                                Menjadi contoh kedisiplinan bagi siswa lain
                                            </p>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Keluar
                                    </button>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">PRAMUKA</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/Foto mts/pramuka 4.jpeg')}}" alt="..." />
                                    <p>Pramuka (Praja Muda Karana) adalah kegiatan ekstrakurikuler yang bertujuan membentuk karakter siswa agar mandiri, disiplin, dan bertanggung jawab melalui kegiatan di alam terbuka.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <p>Ekskul Pramuka</p>
                                            
                                        </li>
                                        <li>
                                            <p>Pramuka mengajarkan keterampilan hidup (life skills), kerja sama, serta kepemimpinan dengan cara yang menyenangkan dan edukatif.</p>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Futsal</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/Foto mts/futsal 1.jpeg')}}" alt="..." />
                                    <p>Futsal adalah kegiatan ekstrakurikuler olahraga yang dimainkan oleh dua tim, masing-masing terdiri dari 5 pemain, di lapangan yang lebih kecil dibanding sepak bola.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <p>Ekskul Futsal</p>
                                            
                                        </li>
                                        <li>
                                            <p>Futsal bertujuan mengembangkan kemampuan bermain bola, kebugaran fisik, serta kerja sama tim.</p>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Voli</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/Foto mts/voli 1.jpeg')}}" alt="..." />
                                    <p>Voli (Bola Voli) adalah kegiatan ekstrakurikuler olahraga yang dimainkan oleh dua tim, masing-masing terdiri dari 6 pemain, dengan tujuan memukul bola melewati net agar jatuh di area lawan.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <p>Ekskul Voli</p>
                                            
                                        </li>
                                        <li>
                                            <p>Voli bertujuan melatih keterampilan bermain bola, kekuatan fisik, serta kerja sama tim.</p>
                                            
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Karate</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/eskul/eskul 5.jpg')}}" alt="..." />
                                    <p>Karate adalah kegiatan bela diri di sekolah yang mengajarkan teknik pukulan, tendangan, dan pertahanan diri. Selain melatih fisik, eskul ini juga membentuk disiplin, percaya diri, dan kontrol emosi.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <p>Ekskul Karate</p>
                                        </li>
                                        <li>
                                            <p>Karate bertujuan untuk melatih kemampuan bela diri, meningkatkan kebugaran fisik, serta membentuk disiplin, percaya diri, dan karakter yang kuat pada siswa.</p>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Seni Tari</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('mts/assets/img/eskul/eskul 6.jpg')}}" alt="..." />
                                    <p>Seni tari adalah bentuk seni yang menggunakan gerakan tubuh berirama untuk mengekspresikan perasaan, cerita, atau budaya. Seni tari biasanya diiringi musik dan mengandung nilai keindahan serta makna tertentu.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <p>Ekskul Seni Tari</p>
                                        </li>
                                        <li>
                                            <p>Seni tari adalah mengembangkan bakat dan kreativitas siswa dalam menari, melatih kepercayaan diri, serta melestarikan budaya melalui gerakan dan ekspresi seni.</p>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('mts/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
