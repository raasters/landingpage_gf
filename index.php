<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Griya Facial - Perawatan Wajah Terpercaya</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-spa me-2"></i>Griya Facial
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'home' ? 'active' : ''); ?>" href="index.php">
                            <i class="fas fa-home me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'services' ? 'active' : ''); ?>" href="index.php?page=services">
                            <i class="fas fa-list-alt me-1"></i> Layanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'about' ? 'active' : ''); ?>" href="index.php?page=about">
                            <i class="fas fa-info-circle me-1"></i> Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'contact' ? 'active' : ''); ?>" href="index.php?page=contact">
                            <i class="fas fa-envelope me-1"></i> Kontak
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-booking <?php echo ($page == 'booking' ? 'active' : ''); ?>" href="index.php?page=booking">
                            <i class="fas fa-calendar-alt me-1"></i> Booking
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add padding to body to account for fixed navbar -->
    <div style="padding-top: 76px;"></div>

    <!-- Content -->
    <?php
    switch($page) {
        case 'home':
            include 'pages/home.php';
            break;
        case 'services':
            include 'pages/services.php';
            break;
        case 'about':
            include 'pages/about.php';
            break;
        case 'contact':
            include 'pages/contact.php';
            break;
        case 'booking':
            include 'pages/booking.php';
            break;
        default:
            include 'pages/home.php';
    }
    ?>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="footer-info">
                            <h3><i class="fas fa-spa me-2"></i>Griya Facial</h3>
                            <p class="about-text mb-4">
                                Pusat perawatan wajah profesional dengan produk berkualitas dan pelayanan terbaik.
                            </p>
                            <div class="contact-info">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt me-3"></i>
                                    <span>Jl. Contoh No. 123, Kota</span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-phone me-3"></i>
                                    <a href="tel:+6281234567890">+62 812-3456-7890</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-envelope me-3"></i>
                                    <a href="mailto:info@griyafacial.com">info@griyafacial.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="footer-hours">
                                    <h4>Jam Operasional</h4>
                                    <div class="hours-list">
                                        <div class="hours-item">
                                            <span class="days">Senin - Jumat</span>
                                            <span class="time">09:00 - 20:00</span>
                                        </div>
                                        <div class="hours-item">
                                            <span class="days">Sabtu</span>
                                            <span class="time">09:00 - 18:00</span>
                                        </div>
                                        <div class="hours-item">
                                            <span class="days">Minggu</span>
                                            <span class="time">10:00 - 16:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="footer-connect">
                                    <h4>Ikuti Kami</h4>
                                    <div class="social-links">
                                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                        <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#" title="TikTok"><i class="fab fa-tiktok"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="index.php?page=booking" class="btn-book w-100">
                                <i class="fas fa-calendar-alt me-2"></i>Booking Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    &copy; 2024 Griya Facial. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animate elements on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.card, .service-card');
            elements.forEach(element => {
                const position = element.getBoundingClientRect();
                if(position.top < window.innerHeight) {
                    element.classList.add('animate-fade-in');
                }
            });
        }

        window.addEventListener('scroll', animateOnScroll);
        // Initial check
        animateOnScroll();

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Add active class to current nav item
        document.addEventListener('DOMContentLoaded', function() {
            const currentLocation = window.location.href;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.href === currentLocation) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html> 