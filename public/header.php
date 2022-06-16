<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>T&E Travels</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon 
    <link href="img/favicon.ico" rel="icon">
    -->
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib\animate\animate.min.css" rel="stylesheet">
    <link href="lib\owlcarousel\assets\owl.carousel.min.css" rel="stylesheet">
    <link href="lib\lightbox\css\lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public\css\bootstrap.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public\css\style.css" rel="stylesheet">


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib\wow\wow.min.js"></script>
    <script src="lib\easing\easing.min.js"></script>
    <script src="lib\waypoints\waypoints.min.js"></script>
    <script src="lib\counterup\counterup.min.js"></script>
    <script src="lib\owlcarousel\owl.carousel.min.js"></script>
    <script src="lib\isotope\isotope.pkgd.min.js"></script>
    <script src="lib\lightbox\js\lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="public\js\main.js"></script>

    
    <link href="public\css\estilo.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg sticky-top p-0  navpropio">
        
        <a href="?controller=Home&action=show" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <img src="public\img\logo.png" alt="" id="imgnav">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="?controller=Destinos&action=show" class="nav-item nav-link" id="item-nav">Destinos</a>
                <a href="?controller=Recomendaciones&action=show" class="nav-item nav-link" id="item-nav">Recomendaciones</a>
                <a href="?controller=Home&action=showMapa" class="nav-item nav-link" id="item-nav">Mapa del sitio</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->