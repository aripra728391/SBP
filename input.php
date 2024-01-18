<?php
require_once "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form Hewan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
    <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ciri Ciri Fauna</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form  action="view_hasil.php" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Tempat Hidup-->
                            <div class="form-floating mb-3">
                                <!-- <label for="tempat_hidup">Tempat Hidup</label> -->
                                <select class="form-select form-select-lg mb-3" aria-label="Tempat Hidup" id="tempat_hidup" name="tempat_hidup">
                                    <option value="">Tempat Hidup</option>
                                    <option value="darat">Darat</option>
                                    <option value="air">Air</option>
                                    <option value="udara">Udara</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            </div>
                            <!-- Jenis Hewan-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jenis Hewan" id="jenis_hewan" name="jenis_hewan">
                                    <option value="">Jenis Hewan</option>
                                    <option value="mamalia">Mamalia</option>
                                    <option value="reptil">Reptil</option>
                                    <option value="burung">Burung</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            </div>
                            <!-- Tipe Hewan-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Tipe Hewan" id="tipe_hewan" name="tipe_hewan">
                                    <option value="">Tipe Hewan</option>
                                    <option value="karnivora">Karnivora</option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            </div>
                            <!-- Jumlah Kaki-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jumlah Kaki" id="jumlah_kaki" name="jumlah_kaki">
                                    <option value="">Jumlah Kaki</option>
                                    <option value="0">Tidak Berkaki</option>
                                    <option value="2">2 Kaki</option>
                                    <option value="4">4 Kaki</option>
                                    <option value="6">6 Kaki</option>
                                    <option value="8">8 Kaki</option>
                                    <option value="lebih">Lebih dari 8 Kaki</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            </div>
                            <!-- Jenis Kulit-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jenis Kulit" id="jenis_kulit" name="jenis_kulit">
                                    <option value="">Jenis Kulit</option>
                                    <option value="sisik">Sisik</option>
                                    <option value="bulu">Bulu</option>
                                    <option value="keras">Kulit Keras</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            </div>
                            <!-- Bentuk Telinga-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Bentuk Telinga" id="bentuk_telinga" name="bentuk_telinga">
                                    <option value="">Bentuk Telinga</option>
                                    <option value="bulat">Bulat</option>
                                    <option value="panjang">Panjang</option>
                                    <option value="runcing">Runcing</option>
                                    <option value="tidak_telinga">Tidak Memiliki Daun Telinga</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            </div>
                            <!-- Jenis Indra Makan-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jenis Indra Makan" id="jenis_indra_makan" name="jenis_indra_makan">
                                    <option value="">Jenis Indra Makan</option>
                                    <option value="mulut">Mulut</option>
                                    <option value="paruh">Paruh</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                            </div>
                            
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Cari</button>
                        </form>
                        <center>
                            <button class="btn btn-primary btn-xl" id="btnKembali">Kembali</button>
                        </center>
                    </div>
                </div>
            </div>
        </section>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Kelompok 3 <?php echo date('Y') ?></small></div>
        </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            // Menangani klik tombol
            document.getElementById('btnKembali').addEventListener('click', function() {
            // Redirect ke halaman input.php
            window.location.href = 'index.php';
            });
        </script>
</body>
</html>
