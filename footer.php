<?php wp_footer(); ?>
<footer class="px-4 py-20 bg-black-950 xl:px-0" id="contato">
  <section class="container grid gap-12 md:grid-cols-3 lg:grid-cols-4 text-black-10">
    <?php
    $args = array(
      'post_type' => 'pagina-contato',
      'posts_per_page' => -1, // Mostrar todos os Section Heroes
    );

    $section_start_query = new WP_Query($args);

    if ($section_start_query->have_posts()) :
      while ($section_start_query->have_posts()) : $section_start_query->the_post();
    ?>
        <div>
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
          <p class="mt-4">
            <?php the_field('sobre_a_empresa') ?>
          </p>
        </div>
        <div>
          <span class="font-semibold uppercase">Contato</span>
          <div class="mt-4">
            <p><?php the_field('telefone') ?></p>
            <p><?php the_field('email') ?></p>
            <p><?php the_field('endereco') ?></p>
          </div>
        </div>
        <div>
          <span class="font-semibold uppercase">
            Horário de funcionamento
          </span>
          <div class="flex justify-between mt-4">
            <div>
              <p>Seg - Sex</p>
              <p>Sab - Dom</p>
            </div>
            <div>
              <p>9:00 am - 10:00 pm</p>
              <p>9:00 am - 5:00 pm</p>
            </div>
          </div>
        </div>
        <div>
          <span class="font-semibold uppercase">Conectar</span>
          <div>
            <ul class="flex gap-4 mt-4 cursor-pointer text-lime-50">
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
      <?php
      endwhile;
      wp_reset_postdata(); // Restaura os dados originais do post.
    else :
      ?>
      <p>Nenhuma página encontrada.</p>
    <?php endif; ?>
  </section>
</footer>
</body>

</html>