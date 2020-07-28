<?php get_header(); ?>

<!-- BLOG -->
<main class="container mt-5">
    <h2 class="" style="letter-spacing: 0.2em">ÍNDICE -DOF-</h2>
    <hr>
    <div class="row">
        <!-- ENTRADAS -->
        <div class="col-lg-8">


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
                <p class="small mb-0">Fecha: <?php the_time('d/F/Y'); ?></p>
                <!-- <p class="small mb-0">Autor: <?php // the_author(); ?></p> -->
                <p class="small mb-2">Categorias: <?php the_category(' / '); ?>
                    Etiquetas: <?php the_tags('', ' / ', ''); ?> </p>

                <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnails', array(
                                'class' => 'img-fluid mb-3'
                            ));
                        }
                        ?>

                <!-- <img src="assets/img/SEP.png" class="img-fluid mb-3" alt=""> -->
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Más información</a>
            </div>
            <?php
                endwhile;
            endif;
            ?>
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