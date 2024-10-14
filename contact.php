<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zanpro</title>
        <link rel="icon" href="/Web-Profile-Company/img/zanpro logo.jpg">
        <!-- Bootstrap CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <?php include 'navbar.php'; ?>
            
            <!-- Hero Section -->
             <section id="home" class="hero-section">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="display-4 text-white fw-bold mb-4">Temukan Rumah Impian Anda Bersama Zanpro</h1>
                            <p class="lead text-white mb-4">Kami menyediakan layanan real estate terbaik untuk membantu Anda menemukan properti yang sempurna sesuai kebutuhan dan anggaran Anda.</p>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-primary btn-lg">Cari Properti</a>
                                <a href="#" class="btn btn-outline-light btn-lg">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-4">Get In Touch</h2>
                    <p class="mb-4">We're here to help and answer any question you might have. We look forward to hearing from you.</p>
                    
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Your Phone">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Contact Information</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong>Address:</strong> 123 Real Estate Street, City, Country
                        </li>
                        <li class="mb-3">
                            <strong>Phone:</strong> +1 234 567 890
                        </li>
                        <li class="mb-3">
                            <strong>Email:</strong> info@zanpro.com
                        </li>
                        <li class="mb-3">
                            <strong>Working Hours:</strong> Mon - Fri: 9:00 AM - 5:00 PM
                        </li>
                    </ul>
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613!3d-6.2059466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1651825200000!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>

  <!-- Bootstrap Bundle dengan Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Script kustom Anda -->
  <script src="js/script.js"></script>
</body>
</html>