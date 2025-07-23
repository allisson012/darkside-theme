<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body <?php body_class(); ?>>

<?php
$home_id = get_option('page_on_front');
?>

<footer class="rodape">
  <p><?php the_field('direitos_autorais', $home_id); ?></p>

  <div class="redes-sociais">
    <?php
      $instagram = get_field('link_instagram', $home_id);
      $email = get_field('link_email', $home_id);
      $whatsapp = get_field('link_whatsapp', $home_id);
    ?>

    <?php if ($instagram): ?>
      <a href="<?php echo esc_url(is_array($instagram) ? $instagram['url'] : $instagram); ?>" target="<?php echo esc_attr(is_array($instagram) && !empty($instagram['target']) ? $instagram['target'] : '_blank'); ?>">
        <i class="fa-brands fa-instagram"></i>
      </a>
    <?php endif; ?>

    <?php if ($email): ?>
      <a href="mailto:<?php echo esc_attr(is_array($email) ? $email['url'] : $email); ?>" target="<?php echo esc_attr(is_array($email) && !empty($email['target']) ? $email['target'] : '_blank'); ?>">
        <i class="fa-solid fa-envelope"></i>
      </a>
    <?php endif; ?>

    <?php if ($whatsapp): ?>
      <a href="<?php echo esc_url(is_array($whatsapp) ? $whatsapp['url'] : $whatsapp); ?>" target="<?php echo esc_attr(is_array($whatsapp) && !empty($whatsapp['target']) ? $whatsapp['target'] : '_blank'); ?>">
        <i class="fa-brands fa-whatsapp"></i>
      </a>
    <?php endif; ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
