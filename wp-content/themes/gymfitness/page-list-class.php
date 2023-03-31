<?php
/*
* Template Name: Listado de Clases
*/
get_header();
?>
<main class="contenedor seccion">
    <?php
    get_template_part('templates-parts/page');
    ?>
    <?php gymfitness_lista_clases(); ?>
</main>
<?php
get_footer();
?>