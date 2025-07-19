/*
Template Name: Página de Contato
*/
get_header();
?>

<main>
  <section class="contact">
    <h1>Entre em contato conosco</h1>
    <?php echo do_shortcode('[contact-form-7 id="5ad94c7" title="formulario"]'); ?>
  </section>
</main>

<?php get_footer(); ?>