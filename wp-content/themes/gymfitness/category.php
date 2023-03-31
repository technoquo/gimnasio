<?php
get_header();
?>
<main class="seccion contenedor">
    <?php
    $categoria = get_queried_object();
    ?>
    <h2 class="text-primary text-center">Categoría: <?php echo $categoria->name; ?></h2>
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