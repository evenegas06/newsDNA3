<?php get_header(); ?>

<!-- BLOG -->
<main class="container mt-5">
    <h2 class="" style="letter-spacing: 0.2em">ÍNDICE -DOF-</h2>
    <hr>
    <div class="row">
        <!-- ENTRADAS -->
        <div class="col-lg-8">
            <h4 class="bg-primary text-white text-center py-2 mb-4 rounded-pill">Resultados de búsqueda</h4>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
            <!-- ENTRADA -->
            <div class="card-body" style="-ms-word-wrap: break-word; word-wrap: break-word;">
                <h4>
                    <a href="<?php the_permalink(); ?>" style="color: #424242">
                        <?php the_title(); ?> 
                    </a>
                </h4>
                <span class="small mb-0"><?php the_time( 'd/F/Y' ); ?></span>
                <!-- <img src="assets/img/SEP.png" class="img-fluid mb-3" alt=""> -->
            </div>
            <?php endwhile; ?> 
            <?php else: ?>
                <h5>
                No se encontró resultados para el término: 
                <?php printf(esc_html( '%s' ), get_search_query(  )); ?>
                </h5>
                <?php get_search_form(); ?>
            <?php endif;?>
            <!-- PAGINACION -->
            <div class="card-body">
                <?php get_template_part('template-parts/content', 'paginacion'); ?>
            </div>
        </div>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>
    </div>
</main>

<?php get_footer(); ?>