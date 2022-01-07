<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>OTANI</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/aset/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style2.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">OTANI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/login.php">Login/Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome to OTANI!</div>
                <div class="masthead-heading text-uppercase"></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">SEE ALL</a>
            </div>
        </header>

        <div class="d-none d-md-block">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mt-2"  >
                <div class="col">
                    <div class="card">
                        <img src="assets/aset/kategori/pokokk.jpg" width="30px" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Bahan Pokok</h5>
                        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                      </div>                  
                </div>
    
                <div class="col">
                    <div class="card">
                        <img src="assets/aset/kategori/sayur.jpg" width="30px" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Sayur</h5>  
                        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                      </div>                  
                </div>
    
                <div class="col">
                    <div class="card">
                        <img src="assets/aset/kategori/buah.jpg" width="30px" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Buah</h5>  
                        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                      </div>                  
                </div>
    
                <div class="col">
                    <div class="card">
                        <img src="assets/aset/kategori/kacang.jpg" width="30px" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Kacang</h5>  
                        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                      </div>                  
                </div>
    
                <div class="col">
                    <div class="card">
                        <img src="assets/aset/kategori/jamur.png" width="30px" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Jamur</h5>  
                        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                      </div>                  
                </div>  
            </div>

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">All Product</h2>
                    <br>
                </div>
                <div class="row">
                    <?php
                        $data = read("produk", "ORDER BY id_produk ASC LIMIT 0, 6");
                        while($data2 = mysqli_fetch_array($data)){
                    ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $data2['id_produk'] ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="height: 350px; width: 350px" src="assets/img/produk/<?php echo $data2['foto_produk'] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $data2['judul'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data2['isi'] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="text-center"><br><a href="produk.php#portfolio" class="btn btn-primary btn-xl text-uppercase">More Product</a></div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
      

      
     
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div>Copyright &copy; OTANI </div>
                </div>
            </div>
        </footer>

        <!-- Portfolio item 1 modal popup-->
        <?php
            $data = read("produk", "ORDER BY id_produk
             ASC LIMIT 0, 8");
            while($data2 = mysqli_fetch_array($data)){
        ?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $data2['id_produk'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $data2['judul'] ?></h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/produk/<?php echo $data2['foto_produk'] ?>" alt="..." />
                                    <p><?php echo $data2['isi'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Tutup
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
