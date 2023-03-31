<?php
get_header();
?>
<main class="seccion contenedor">
    <?php
    $author = get_queried_object();
    ?>
    <h2 class="text-primary text-center">Autor: <?php echo $author->data->display_name; ?></h2>
    <p class="text-center"><?php echo get_the_author_meta('description', $author->data->ID); ?></p>
    <ul class="listado-grid">
        <?php
        while (have_posts()) : the_post();
            get_template_part('templates-parts/blog');
        endwhile;
        ?>
    </ul>
</main>


<?php
get_footer();
?>