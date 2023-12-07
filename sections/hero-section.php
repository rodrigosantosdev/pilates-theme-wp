<section class="min-h-screen bg-center bg-cover bg-hero" id="#">
  <div class="flex items-center justify-between h-screen px-8 md:px-20">
    <div class="flex flex-col">
      <?php
      $args = array(
        'post_type' => 'pagina-principal',
        'posts_per_page' => -1, // Mostrar todos os Section Heroes
      );

      $section_heroes_query = new WP_Query($args);

      if ($section_heroes_query->have_posts()) :
        while ($section_heroes_query->have_posts()) : $section_heroes_query->the_post();
      ?>
          <div>
            <span class="text-lime-400"><?php the_field('tag'); ?></span>
            <h1 class="max-w-sm mt-4 text-3xl font-bold uppercase break-words md:text-5xl text-lime-50">
              <?php the_field('headline'); ?>
            </h1>
          </div>
        <?php
        endwhile;
        wp_reset_postdata(); // Restaura os dados originais do post.
      else :
        ?>
        <p>Nenhum Section Hero encontrado.</p>
      <?php endif;
      ?>
    </div>
    <div>
      <ul class="grid gap-4 cursor-pointer text-lime-50">
        <?php
        $social_networks = array('facebook', 'twitter', 'instagram', 'linkedin', 'tiktok', 'youtube');
        foreach ($social_networks as $network) {
          $url = get_theme_mod($network . '_url', '');
          $enabled = get_theme_mod($network . '_enabled', false);

          if ($enabled && $url) {
        ?>
            <li class="flex items-center justify-center w-8 h-8 border rounded-full hover:text-lime-100 hover:bg-lime-500 border-lime-500">
              <a href="<?php echo esc_url($url); ?>" target="_blank" aria-label="<?php echo esc_attr($network); ?>">
                <i class="fab fa-<?php echo esc_attr($network); ?>"></i>
              </a>
            </li>
        <?php
          }
        }
        ?>
      </ul>
    </div>
  </div>
</section>