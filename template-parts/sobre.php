<section id="about" class="sobre">
  <div class="sobre-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/about.jpg" alt="Sobre a empresa" class="about-img" />
    
    <div class="sobre-texto">
      <h2><?php the_field('titulo_sobre'); ?></h2>
      <p style="font-size: 1.1em; line-height: 1.6;">
        <?php the_field('texto_sobre'); ?>
      </p>
    </div>
  </div>
</section>