<?php
get_header(); 
get_template_part('template-parts/hero'); 
?>

<main>
    <section class="hero" style="padding: 100px 20px; text-align: center; background: #111; color: #fff;">
        <h1>Bem-vindo à WebForce Solutions</h1>
        <p>Inovação e tecnologia para o seu negócio.</p>
        <a href="#sobre" style="display: inline-block; margin-top: 20px; padding: 12px 24px; background: #f39c12; color: #fff; text-decoration: none; border-radius: 5px;">
            Saiba mais
        </a>
    </section>

    <section class="sobre">
  <div class="sobre-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/about.jpg" alt="Sobre a empresa" class="about-img" />
    
    <div class="sobre-texto">
      <h2>Sobre a WebForce Solutions</h2>
      <p>
        Somos uma empresa focada em criar soluções digitais personalizadas. Atuamos com desenvolvimento web, sistemas e consultoria em TI.
      </p>
    </div>
  </div>
</section>

<section class="servicos">
  <div class="servicos-topo">
    <h2 class="servicos-titulo">Nossos Serviços</h2>
  </div>

  <div class="servicos-cards">
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/desenvolvimento-web.jpg" alt="Desenvolvimento Web" class="card-img" />
      <h3 class="card-title">Desenvolvimento Web</h3>
      <p class="card-desc">Criamos sites modernos e responsivos para seu negócio crescer.</p>
    </div>

    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/mobile.png" class="card-img" />
      <h3 class="card-title">Aplicativos Mobile</h3>
      <p class="card-desc">Apps funcionais para Android e iOS que encantam seus clientes.</p>
    </div>

    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/inteligenciaartificial.png" alt="Inteligência Artificial" class="card-img" />
      <h3 class="card-title">Inteligência Artificial</h3>
      <p class="card-desc">Soluções com IA para automatizar e impulsionar seu negócio.</p>
    </div>
  </div>
</section>

<section class="contato">
  <div class="contato-container">

    
    <div class="contato-mapa">
    <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.8169642153355!2d-46.63330948498656!3d-23.550519884682204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c9ae3c77ff%3A0x836c69f38c7cc24!2sS%C3%A3o%20Paulo%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1721571956494!5m2!1spt-BR!2sbr"
  width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
    </div>

  
    <div class="contato-form">
      <h2>Entre em contato conosco</h2>
      <?php echo do_shortcode('[contact-form-7 id="5ad94c7" title="formulario"]'); ?>
    </div>

  </div>
</section>

</main>

<?php get_footer();?>