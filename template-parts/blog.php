<?php
$blog = new Blog();
$noticias = $blog->getNoticias();

if (!empty($noticias)) {
    echo '<section class="noticias-gnews">';
    echo '<h2 class="noticias-titulo">Últimas Notícias</h2>';
    echo '<div class="noticias-grid">';

    $noticias = array_slice($noticias, 0, 3);

    foreach ($noticias as $noticia) {
        echo '<div class="noticia-card">';
        echo '<a href="' . esc_url($noticia->url) . '" target="_blank">';
        
        if (!empty($noticia->image)) {
            echo '<img src="' . esc_url($noticia->image) . '" alt="' . esc_attr($noticia->title) . '">';
        } else {
            echo '<div class="imagem-placeholder">Sem imagem</div>';
        }

        echo '<div class="noticia-conteudo">';
        echo '<h3>' . esc_html($noticia->title) . '</h3>';
        echo '<p>' . esc_html(wp_trim_words($noticia->description, 20, '...')) . '</p>';
        echo '</div>';

        echo '</a>';
        echo '</div>';
    }

    echo '</div>';
    echo '</section>';
}
?>