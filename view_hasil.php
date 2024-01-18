<?php
require_once "koneksi.php";
// Koneksi ke database
$conn = connectDB();

$where = "";

if(isset($_POST['tempat_hidup']) && $_POST['tempat_hidup'] != ""){
    $where .= " AND `tempat_hidup` = '{$_POST['tempat_hidup']}'";
}

if(isset($_POST['jenis_hewan']) && $_POST['jenis_hewan'] != ""){
    $where .= " AND `jenis_hewan` = '{$_POST['jenis_hewan']}'";
}

if(isset($_POST['tipe_hewan']) && $_POST['tipe_hewan'] != ""){
    $where .= " AND `tipe_hewan` = '{$_POST['tipe_hewan']}'";
}

if(isset($_POST['jumlah_kaki']) && $_POST['jumlah_kaki'] != ""){
    $where .= " AND `jumlah_kaki` = '{$_POST['jumlah_kaki']}'";
}

if(isset($_POST['jenis_kulit']) && $_POST['jenis_kulit'] != ""){
    $where .= " AND `jenis_kulit` = '{$_POST['jenis_kulit']}'";
}

if(isset($_POST['bentuk_telinga']) && $_POST['bentuk_telinga'] != ""){
    $where .= " AND `bentuk_telinga` = '{$_POST['bentuk_telinga']}'";
}

if(isset($_POST['jenis_indra_makan']) && $_POST['jenis_indra_makan'] != ""){
    $where .= " AND `jenis_indra_makan` = '{$_POST['jenis_indra_makan']}'";
}

$result = $conn->query("SELECT * FROM tbl_fauna WHERE `id` > 0 {$where} ORDER BY `name` ASC");
// Tampilkan Data Fauna
$dataFauna = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataFauna[] = $row;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Mochamad Ari Pratama" />
        <title>Fauna</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        /* Gaya untuk gambar */
        .sad-image {
            width: 200px; /* Ubah sesuai keinginan Anda */
            height: 150px; /* Ubah sesuai keinginan Anda */
            /* border-radius: 50%; Membuat gambar bundar */
            /* object-fit: cover; Menyembunyikan gambar yang melebihi batas lingkaran */
        }
        .ukuran-image {
            width: 355px; /* Ubah sesuai keinginan Anda */
            height: 200px;
        }
    </style>
    </head>
    <body id="page-top">
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Hasil</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <?php foreach ($dataFauna as $fauna) { ?>
                    <!-- Portfolio Item-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#fauna<?php echo $fauna['id']; ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid ukuran-image" src="<?php echo $fauna['gambar_url']; ?>" alt="..." />
                        </div>
                    </div>
                    <?php 
                    } 
                    if ($result->num_rows == 0) {
                        echo "<h2 class='page-section-heading text-center text-uppercase text-secondary mb-0'>Data Tidak Ditemukan, Pastikan Ciri yang di masukan Memang Benar</h2>
                        <br>
                        <img class='masthead-avatar mb-5 sad-image' src='assets/img/sad.gif' alt='...' />";
                    }
                    ?>
                    <button class="btn btn-primary btn-xl" id="btnKembali">Kembali</button>
                </div>
            </div>
        </section>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Kelompok 3 <?php echo date('Y') ?></small></div>
        </div>

        <!-- Fauna Modals-->
        <?php foreach ($dataFauna as $fauna) { ?>
        <div class="portfolio-modal modal fade" id="fauna<?php echo $fauna['id']; ?>" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Fauna Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $fauna['name']; ?></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Fauna Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo $fauna['gambar_url']; ?>" alt="..." />
                                    <!-- Fauna Modal - Text-->
                                    <p class="mb-4"><?php echo $fauna['description']; ?></p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        

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
