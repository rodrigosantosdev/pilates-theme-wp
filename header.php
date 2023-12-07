<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="sticky inset-0 z-20 w-full bg-black-950 text-black-50 md:px-4 lg:px-0">
    <div class="container flex items-center justify-between p-4 md:p-0">
      <a href="#" class="text-xl font-medium uppercase text-lime-500">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

        if ($logo) {
          // Se houver um logo personalizado, exiba o logo
          echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        } else {
          // Se não houver um logo personalizado, exiba o título do site
          echo esc_html(get_bloginfo('name'));
        }
        ?>
      </a>
      <nav>
        <?php
        $menu_args = array(
          'theme_location' => 'Header Menu',
          'container' => false,
          'echo' => false,
          'order' => 'asc',
        );

        $menu_html = wp_nav_menu($menu_args);

        $menu_html = str_replace('<ul', '<ul class="hidden gap-8 lg:flex"', $menu_html);
        $menu_html = str_replace('<li', '<li class="hover:text-lime-500"', $menu_html);

        echo $menu_html;
        ?>
      </nav>

      <?php
      $args = array(
        'post_type' => 'botao-reserve-agora',
        'posts_per_page' => 1, // Mostrar todos os Section Heroes
      );

      $section_heroes_query = new WP_Query($args);

      if ($section_heroes_query->have_posts()) :
        while ($section_heroes_query->have_posts()) : $section_heroes_query->the_post();
      ?>
          <a href="<?php the_field('reserve_agora') ?>" target="_blank" class="hidden p-6 uppercase cursor-pointer bg-lime-400 text-lime-900 hover:bg-lime-600 md:flex">
            reserve agora e economize 10%
          </a>
        <?php
        endwhile;
        wp_reset_postdata(); // Restaura os dados originais do post.
      else :
        ?>
        <p>Nenhum Section Hero encontrado.</p>
      <?php endif;
      ?>
    </div>
  </header>