<?php
require_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tempat_hidup = $_POST["tempat_hidup"];
    $jenis_hewan = $_POST["jenis_hewan"];
    $tipe_hewan = $_POST["tipe_hewan"];
    $jumlah_kaki = $_POST["jumlah_kaki"];
    $jenis_kulit = $_POST["jenis_kulit"];
    $bentuk_telinga = $_POST["bentuk_telinga"];
    $jenis_indra_makan = $_POST["jenis_indra_makan"];
    $deskripsi = $_POST["deskripsi"];
    // Ambil data gambar
    $gambar = $_FILES["gambar"];
    $gambar_nama = $gambar["name"];
    $gambar_tmp = $gambar["tmp_name"];
    // Tentukan folder untuk menyimpan gambar
    $folder_gambar = "uploads/";
    // Mendapatkan ekstensi file
    $ekstensi = pathinfo($gambar_nama, PATHINFO_EXTENSION);
    // Membuat ID unik sebelum ekstensi
    $gambar_id = uniqid() . "." . $ekstensi;
    // Pindahkan gambar ke folder tujuan dengan nama baru
    $gambar_destinasi = $folder_gambar . $gambar_id;
    move_uploaded_file($gambar_tmp, $gambar_destinasi);

    $query = "INSERT INTO tbl_fauna (name, description, tempat_hidup, jenis_hewan, tipe_hewan, jumlah_kaki, jenis_kulit, bentuk_telinga, jenis_indra_makan, gambar_url) 
    VALUES ('$nama', '$deskripsi', '$tempat_hidup', '$jenis_hewan', '$tipe_hewan', '$jumlah_kaki', '$jenis_kulit', '$bentuk_telinga', '$jenis_indra_makan', '$gambar_destinasi')";
    // $query = "INSERT INTO tbl_fauna (name, tempat_hidup, jenis_hewan, tipe_hewan, jumlah_kaki, jenis_kulit, bentuk_telinga, jenis_indra_makan, gambar_url) 
    // VALUES ('$nama', '$tempat_hidup', '$jenis_hewan', '$tipe_hewan', '$jumlah_kaki', '$jenis_kulit', '$bentuk_telinga', '$jenis_indra_makan', '$gambar_destinasi')";
    // Koneksi ke database
    $conn = connectDB();

    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan.');</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data.');</script>";
    }

    $conn->close();
    // echo "<script>alert(".$nama.");</script>";

}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body id="page-top">
    <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">INPUT MASTER FAUNA</h2>
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
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
                            <!-- Gambar input-->
                            <div class="form-floating mb-3">
                                <input type="file" id="gambar" name="gambar" accept="image/*" data-sb-validations="required">
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <!-- <label for="name">Image</label> -->
                                <div class="invalid-feedback" data-sb-feedback="gambar:required">A Image is required.</div>
                            </div>
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="nama">Name</label>
                                <div class="invalid-feedback" data-sb-feedback="nama:required">A name is required.</div>
                            </div>
                            <!-- Tempat Hidup-->
                            <div class="form-floating mb-3">
                                <!-- <label for="tempat_hidup">Tempat Hidup</label> -->
                                <select class="form-select form-select-lg mb-3" aria-label="Tempat Hidup" id="tempat_hidup" name="tempat_hidup" data-sb-validations="required">
                                    <option value="">Tempat Hidup</option>
                                    <option value="darat">Darat</option>
                                    <option value="air">Air</option>
                                    <option value="udara">Udara</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <div class="invalid-feedback" data-sb-feedback="tempat_hidup:required">Tempat Hidup Harus di isi</div>
                            </div>
                            <!-- Jenis Hewan-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jenis Hewan" id="jenis_hewan" name="jenis_hewan" data-sb-validations="required">
                                    <option value="">Jenis Hewan</option>
                                    <option value="mamalia">Mamalia</option>
                                    <option value="reptil">Reptil</option>
                                    <option value="burung">Burung</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <div class="invalid-feedback" data-sb-feedback="jenis_hewan:required">Jenis Hewan Harus di isi</div>
                            </div>
                            <!-- Tipe Hewan-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Tipe Hewan" id="tipe_hewan" name="tipe_hewan" data-sb-validations="required">
                                    <option value="">Tipe Hewan</option>
                                    <option value="karnivora">Karnivora</option>
                                    <option value="herbivora">Herbivora</option>
                                    <option value="omnivora">Omnivora</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <div class="invalid-feedback" data-sb-feedback="tipe_hewan:required">Tipe Hewan Harus di isi</div>
                            </div>
                            <!-- Jumlah Kaki-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jumlah Kaki" id="jumlah_kaki" name="jumlah_kaki" data-sb-validations="required">
                                    <option value="">Jumlah Kaki</option>
                                    <option value="0">Tidak Berkaki</option>
                                    <option value="2">2 Kaki</option>
                                    <option value="4">4 Kaki</option>
                                    <option value="6">6 Kaki</option>
                                    <option value="8">8 Kaki</option>
                                    <option value="lebih">Lebih dari 8 Kaki</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <div class="invalid-feedback" data-sb-feedback="jumlah_kaki:required">Jumlah Kaki Harus di isi</div>
                            </div>
                            <!-- Jenis Kulit-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jenis Kulit" id="jenis_kulit" name="jenis_kulit" data-sb-validations="required">
                                    <option value="">Jenis Kulit</option>
                                    <option value="sisik">Sisik</option>
                                    <option value="bulu">Bulu</option>
                                    <option value="keras">Kulit Keras</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <div class="invalid-feedback" data-sb-feedback="jenis_kulit:required">Jenis Kulit Harus di isi</div>
                            </div>
                            <!-- Bentuk Telinga-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Bentuk Telinga" id="bentuk_telinga" name="bentuk_telinga" data-sb-validations="required">
                                    <option value="">Bentuk Daun Telinga</option>
                                    <option value="bulat">Bulat</option>
                                    <option value="panjang">Panjang</option>
                                    <option value="runcing">Runcing</option>
                                    <option value="tidak_telinga">Tidak Memiliki Daun Telinga</option>
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <div class="invalid-feedback" data-sb-feedback="bentuk_telinga:required">Bentuk Telinga Harus di isi</div>
                            </div>
                            <!-- Jenis Indra Makan-->
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-lg mb-3" aria-label="Jenis Indra Makan" id="jenis_indra_makan" name="jenis_indra_makan" data-sb-validations="required">
                                    <option value="">Jenis Indra Makan</option>
                                    <option value="mulut">MULUT</option>
                                    <option value="paruh">PARUH</option>
                                    <!-- <option value="penciuman">Penciuman</option> -->
                                </select>
                                <!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
                                <div class="invalid-feedback" data-sb-feedback="jenis_indra_makan:required">Jenis Indra Makan Harus di isi</div>
                            </div>
                            <!-- Description-->
                            <div class="form-floating mb-3">
                                <!-- <input class="form-control form-control-border summernote" id="deskripsi" name="deskripsi" type="textarea" data-sb-validations="required" /> -->
                                <textarea id="deskripsi" name="deskripsi" class="form-control form-control-border summernote" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="deskripsi:required">A Description is required.</div>
                            </div>
                            
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                        </form>
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
    <!-- <script>
        $(document).ready(function() {
            $('input[name="deskripsi"]').summernote({
            height: 300, // Sesuaikan tinggi editor sesuai kebutuhan
            placeholder: 'Masukkan deskripsi disini...'
            });
        });
    </script> -->
</body>
</html>
