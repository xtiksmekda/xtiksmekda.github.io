<?php 
//header('location: connect/main.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/images/Logo2.png">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatable/datatables.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/lightbox/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>X-TIK SMEKDA</title>
    
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar-example2">
    <div class="preloader">
      <div class="loading">
        <div class="spinner-border text-info" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
  </div>
    <!-- Navbar -->
    <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="https://www.instagram.com/xtiksmekda/">
          <img src="assets/images/logo.svg" alt="" width="30" height="50" />
        </a>
        <a class="navbar-brand" href="#">X-TIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto active">
            <li class="nav-item">
            <a class="nav-link" href="#">
            <i id="musik" class="fa-regular fa-circle-play" name="musik" onclick="togglePlay()"></i>
            <i id="musik2" class="fa-regular fa-circle-pause" name="musik2" onclick="togglePlay()" style="display:none;"></i>
            <audio loop name="audio"><source src="assets/audio/audio.mp3"></audio>
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projek</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Pengurus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->


    <!-- Jumbotron -->
    
    <section id="home" class="jumbotron text-center">
      <img src="assets/images/Logo2.png" alt="XTIK" width="200" class="rounded-circle" />
      <h1 class="display-4" style="color: white"><b> X-TIK SMKN 2 PURWAKARTA </b></h1>
      <p class="lead fs-5" style="color: white">Let's Make X-TIK Great Again</p>
      
    </section>
    <!-- Akhir Jumbotron -->
    <br />
    <br />

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 style="color: white">About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-6 text-center">
          <div class="col-md-4">
            <p style="color: white">
              Nama dari organisasi pengembangan bakat dan minat adalah ekstrakulikuler Teknologi Informasi dan Komunikasi <a href="https://www.smkn2pwk.sch.id/" style="color: white">SMKN 2 Purwakarta</a> yang kemudian disingkat X-TIK SMKN 2
              Purwakarta.
            </p>
          </div>
          <div class="col-md-4">
            <p style="color: white">Bentuk kegiatan ekstrakulikuler X-TIK ini tebagi kedalam beberapa bidang pengetahuan yaitu ilmu pengetahuan mengenai software , hardware dan multimedia</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->
    <br />
    <br />

    <!-- projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 style="color: white">Projects</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 mb-3">
            <div class="card">
              <img src="assets/images/project1.jpg" class="card-img-top" alt="project1" />
              <div class="card-body">
                <h5 class="card-title">Pasukan Kebersihan | Cinematic Video</h5>
                <p class="card-text"></p>
                <a href="https://www.youtube.com/watch?v=j5v5kAfSt4o" class="custom-btn btn-3 text-btn"><b><span>Tonton</span></b></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-3">
            <div class="card">
              <img src="assets/images/project2.png" class="card-img-top" alt="project2" />
              <div class="card-body">
                <h5 class="card-title">Logo Redesign</h5>
                <p class="card-text"></p>
                <a href="https://www.instagram.com/p/CZ8XCOpJ6M7/" class="custom-btn btn-3 text-btn"><b><span>Selengkapnya</span></b></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-3">
            <div class="card">
              <img src="assets/images/project3.png" class="card-img-top" alt="project3" />
              <div class="card-body">
                <h5 class="card-title">Soon.</h5>
                <p class="card-text"></p>
                <a href="https://www.instagram.com/xtiksmekda/" class="custom-btn btn-3 text-btn"><b><span>Selengkapnya</span></b></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Akhir Projects -->

    <!-- Software -->
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2 style="color: white; margin-top: 70px;">Software</h2>
              </div>
            </div>
            <div class="row gy-4">
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/Linktree.png" data-lightbox="software" data-title="Azfa">
                  <img width="1920" height="1280" src="assets/images/Linktree.png" class="img-fluid" alt="Azfa">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/fathi.png" data-lightbox="software" data-title="Fathi">
                  <img width="1920" height="1280" src="assets/images/fathi.png" class="img-fluid" alt="Fathi">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/najwa.png" data-lightbox="software" data-title="Najwa">
                  <img width="1920" height="1280" src="assets/images/najwa.png" class="img-fluid" alt="Najwa">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/fatih.png" data-lightbox="software" data-title="Fatih">
                  <img width="1920" height="1280" src="assets/images/fatih.png" class="img-fluid" alt="Fatih">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/putri.png" data-lightbox="software" data-title="Putri">
                  <img width="1920" height="1280" src="assets/images/putri.png" class="img-fluid" alt="Putri">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/allysha.png" data-lightbox="software" data-title="Allysha">
                  <img width="1920" height="1280" src="assets/images/allysha.png" class="img-fluid" alt="Allysha">
                </a>
            </div>
            </div>
            <br>
            <center><a href="software" class="btn btn-outline-light">
              Lihat Semua
              </a></center>
          </div>

          <!-- Hardware -->
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2 style="color: white; margin-top: 70px;">Hardware</h2>
              </div>
            </div>
            <div class="row gy-4">
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/h1.jpg" data-lightbox="hardware" data-title="IoT-1">
                  <img width="1920" height="1280" src="assets/images/h1.jpg" class="img-fluid" alt="IoT-1">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/h2.jpg" data-lightbox="hardware" data-title="IoT-2">
                  <img width="1920" height="1280" src="assets/images/h2.jpg" class="img-fluid" alt="IoT-2">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/h3.jpg" data-lightbox="hardware" data-title="IoT-3">
                  <img width="1920" height="1280" src="assets/images/h3.jpg" class="img-fluid" alt="IoT-3">
                </a>
            </div>
            </div>
            <br>
            <center><button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#viewKarya">
              Lihat Semua
            </button></center>
          </div>

          <!-- Multimedia -->
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2 style="color: white; margin-top: 70px;">Multimedia</h2>
              </div>
            </div>
            <div class="row gy-4">
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/Logo2.png" data-lightbox="mutimedia" data-title="Logo-1">
                  <img width="1920" height="1280" src="assets/images/Logo2.png" class="img-fluid" alt="Logo-1">
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <a class="d-block" href="assets/images/Logo.png" data-lightbox="mutimedia" data-title="Logo-2">
                  <img width="1920" height="1280" src="assets/images/Logo.png" class="img-fluid" alt="Logo-2">
                </a>
            </div>
            </div>
            <br>
            <center><button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#viewKarya">
              Lihat Semua
            </button></center>
          </div>
        </section>

        
    <!-- Galeri -->
    <section id="galeri" class="image-grid">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 style="color: white">Galeri</h2>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="assets/images/1.jpg" class="img-fluid" alt="X-TIK-1" data-caption="X-TIK-1">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="assets/images/2.jpg" class="img-fluid" alt="X-TIK-2" data-caption="X-TIK-2">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="assets/images/3.jpg" class="img-fluid" alt="X-TIK-3" data-caption="X-TIK-3">
                </a>
              </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <figure>
                <a class="d-block" href="">
                  <img width="1920" height="1280" src="assets/images/4.jpg" class="img-fluid" alt="X-TIK-4" data-caption="X-TIK-4">
                </a>
              </figure>
            </div>
        </div>
        <br>
        <center><button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#viewG">
          Lihat Semua
        </button></center>
      </div>
    </section>
    <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                <div class="container-fluid p-0">
                  <!-- JS content here -->
                </div>
              </div>
            </div>
          </div>
        </div>

    
    <!-- Modal View Galeri-->
<div class="modal fade" id="viewG" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Galeri</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
    <section id="galeri" class="image-grid" style="padding-top: 0rem; padding-bottom: 5rem;">
      <div class="container">
        <div class="row gy-4">
          <div class="col-12 col-sm-6 col-md-4">
              <a class="d-block" href="assets/images/1.jpg" data-lightbox="example-set-1" data-title="">
                <img width="1920" height="1280" src="assets/images/1.jpg" class="img-fluid" alt="">
              </a>
          </div>
        </div>
      </div>
    </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Galeri -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="row text-center mb-3">
      <div class="col">
        <h2 style="color: white">Pengurus</h2>
      </div>
    </div>
 
    <div class="row gy-5">
      <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="team-member">
          <div class="member-img">
          <img src="assets/images/female.jpg" class="img-fluid img-responsive" alt="">
          </div>
          <div class="member-info">
            <div class="social">
            <a href="" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            <h4></h4>
            <span></span>
          </div>
        </div>
      </div><!-- End Pengurus -->
    </div>

  </div>
</section><!-- End Pengurus Section -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 style="color: white">Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="contact.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label" style="color: white">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="John Doe" aria-describedby="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label" style="color: white">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@email.com" aria-describedby="email" required>
              </div>
              <div class="mb-3">
                <label for="pesanextarea1" class="form-label" style="color: white">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Contact -->
    <br />
    <br />
    <!-- Modal 
<div class="modal fade" id="patch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Versi 3.0</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Update Versi 3.0</h3>
        <br>
        <ul class="list-group list-group-numbered">

        <li class="list-group-item list-group-item-success">Bisa mengubah foto di dashboard profile</li>
        <li class="list-group-item list-group-item-success">Bisa mengubah password di dashboard profile</li>
        <li class="list-group-item list-group-item-success">Bisa me-resset password di dashboard profile & index</li>
        <li class="list-group-item list-group-item-success">Notifikasi pesan saat reset password</li>
        <li class="list-group-item list-group-item-success">Web portopolio di dashboard</li>
        <li class="list-group-item list-group-item-success">Bisa mengubah warna background web portopolio</li>
        <li class="list-group-item list-group-item-success">List pengurus di index</li>
        <li class="list-group-item list-group-item-success">Pengurus bisa menambah/menghapus/mengedit foto/galeri</li>
        <li class="list-group-item list-group-item-success">Menu studi kasus (case) khusus software</li>
        <li class="list-group-item list-group-item-success">Nilai studi kasus yang sudah dikerjakan + source codenya (software)</li>
        <li class="list-group-item list-group-item-success">Menu dropdown untuk masuk & register</li>
        <li class="list-group-item list-group-item-success">Menu kontak di dashboard</li>
        <li class="list-group-item list-group-item-success">Menu patch di dashboard</li>
        <li class="list-group-item list-group-item-success">Kontak email di index</li>
        <li class="list-group-item list-group-item-warning">Notif pesannya ga realtime jadi harus di refresh</li>
        <li class="list-group-item list-group-item-warning">Menu projek (pengembangan)</li>
        <li class="list-group-item list-group-item-warning">Semua nilai akan tampil di dashboard (nanti)</li>
        <li class="list-group-item list-group-item-warning">Detail anggota dihapus di index</li>
        <li class="list-group-item list-group-item-warning">Menu button login & register di ganti</li>
        <li class="list-group-item list-group-item-warning">Kontak email masih beta</li>
        <li class="list-group-item list-group-item-warning">Belum bisa lihat semua pesan</li>
        <li class="list-group-item list-group-item-warning">Register duplikat akun (ini bug sih)</li>
        <li class="list-group-item list-group-item-warning">List pengurusnya banyak, mungkin bakal lama buat scrollingnya</li>
        <li class="list-group-item list-group-item-warning">Bidang belum di update, (maaf kalo yang pas absen gak bisa hehe)</li>
        <li class="list-group-item list-group-item-danger">sejauh ini belum ada Bug / Error yang fatal</li>
      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>-->


    <!-- Footer -->


  <footer class="bg-transparent text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/xtiksmekda/" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/xtiksmekda/" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/xtiksmekda" role="button"><i class="fab fa-github"></i></a>

      <!-- Youtube -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCvDClrWIV9eDmHfJn6Fy6zw" role="button"><i class="fab fa-youtube"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2013-2022 Copyright X-TIK SMEKDA <br>
    Made with &#10084; by Fitra Fajar
  </div>
  <!-- Copyright -->
</footer>

<!-- End of .container -->
    <!-- Akhir Footer -->
    <script src="assets/js/jquery-1.8.3.js"></script>
    <script src="assets/vendor/datatable/datatables.min.js"></script>
    <script src="https://unpkg.com/alpinejs@3.3.4/dist/cdn.min.js" defer></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/vendor/fontawesome/js/all.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/lightbox/js/lightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" charset="utf-8">


 $(document).ready(function() {
    $('.table-paginate').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

        function form_submit() {
    document.getElementById("loginForm").submit();
   }   

      $(document).ready(function(){    
    $("#loginForm").submit(function(event){
        submitForm();
        return false;
    });
});
// function to handle form submit
function submitForm(){
     $.ajax({
        type: "POST",
        url: "cek.php",
        cache:false,
        data: $('form#loginForm').serialize(),
        success: function(response){
            $("#login").html(response)
            $("#staticBackdrop").modal('hide');
        },
        error: function(){
            alert("Error");
        }
    });
}
    </script>


    <script>
    $(document).ready(function() {
        $(".preloader").fadeOut("slow");
    });
  </script>
    <script>
      
      const imageGrid = document.querySelector(".image-grid");
const links = imageGrid.querySelectorAll("a");
const imgs = imageGrid.querySelectorAll("img");
const lightboxModal = document.getElementById("lightbox-modal");
const bsModal = new bootstrap.Modal(lightboxModal);
const modalBody = document.querySelector(".modal-body .container-fluid");

for (const link of links) {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const currentImg = link.querySelector("img");
    const lightboxCarousel = document.getElementById("lightboxCarousel");
    if (lightboxCarousel) {
      const parentCol = link.parentElement.parentElement;
      const index = [...parentCol.parentElement.children].indexOf(parentCol);
      const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
      bsCarousel.to(index);
    } else {
      createCarousel(currentImg);
    }
    bsModal.show();
  });
}

function createCarousel(img) {
  const markup = `
    <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
      <div class="carousel-inner">
        ${createSlides(img)}
      </div> 
      <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    `;

  modalBody.innerHTML = markup;
}

function createSlides(img) {
  let markup = "";
  const currentImgSrc = img.getAttribute("src");

  for (const img of imgs) {
    const imgSrc = img.getAttribute("src");
    const imgAlt = img.getAttribute("alt");
    const imgCaption = img.getAttribute("data-caption");

    markup += `
    <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
      <img src=${imgSrc} alt=${imgAlt}>
      ${imgCaption ? createCaption(imgCaption) : ""}
    </div>
    `;
  }

  return markup;
}

function createCaption(caption) {
  return `<div class="carousel-caption">
     <p class="m-0">${caption}</p>
    </div>`;
}

function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
    $('#open').prop('hidden', false);
    $('#close').prop('hidden', 'true');
  } else {
    x.type = "password";
    $('#open').prop('hidden', 'true');
    $('#close').prop('hidden', false);
  }
}
    </script>
    <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#patch').modal('show');
    });
</script>
<script>

function togglePlay() {
  var audio = document.getElementsByTagName("audio")[0];
  

  if (audio) {
    if (audio.paused) {
        audio.play();
       document.getElementById("musik").style.display = "none";
       document.getElementById("musik2").style.display = "block";
    } else {
        audio.pause();
        document.getElementById("musik").style.display = "block";
        document.getElementById("musik2").style.display = "none";
    }
  }
}
</script>
<!-- <script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 1, 2022 07:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + " Jam "
  + minutes + " Menit " + seconds + " Detik ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script> -->
  </body>
</html>
