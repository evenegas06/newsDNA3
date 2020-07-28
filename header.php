<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <?php wp_head(); ?>

    <!-- <title>DNA3 - Especialistas en intermediarios financieros</title> -->
</head>

<body <?php body_class(); ?>>
    <!-- Menu Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark azulD">
        <div class="container">
            <a href="<?php echo esc_url(home_url( '/' )); ?>" class="navbar-brand text-white" style="font-size: 2rem;">
                NOTICIAS
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mx-2">
                        <a class="nav-link text-white" href="https://dna3.com.mx">Inicio</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="https://dna3.com.mx/conocenos.php">Conócenos</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="https://cursos.dna3.com.mx">Cursos</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="<?php echo esc_url(home_url( '/' )); ?>">Blog</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-white" href="https://dna3.com.mx/contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>