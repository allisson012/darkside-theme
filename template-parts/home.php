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

    <section>
        <p>Conteúdo da página inicial vai aqui.</p>
    </section>
    <section class="sobre">
  <h2>Sobre a WebForce Solutions</h2>
  <p>Somos uma empresa focada em criar soluções digitais personalizadas. Atuamos com desenvolvimento web, sistemas e consultoria em TI.</p>
</section>
</main>

<?php get_footer();?>