<section class="grid lg:grid-cols-2" id="estudio">
  <div>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/studio.webp" alt="foto de um estudio" class="w-full" width="750" height="500" loading="lazy" />
  </div>
  <?php
  $args = array(
    'post_type' => 'pagina-estudio',
    'posts_per_page' => -1,
  );

  $section_studio_query = new WP_Query($args);

  if ($section_studio_query->have_posts()) :
    while ($section_studio_query->have_posts()) :
      $section_studio_query->the_post();
  ?>

      <div class="grid p-8 place-content-evenly bg-black-950 text-black-50 lg:p-0">
        <h2 class="text-5xl uppercase"><?php the_field('title') ?></h2>
        <p class="max-w-sm font-light leading-loose break-words">
          <?php the_field('description') ?>
        </p>

        <a href="<?php the_field('link') ?>" target="_blank" class="px-6 py-3 mt-4 rounded-full cursor-pointer bg-lime-400 text-lime-900 w-max hover:bg-lime-500">
          Mais sobre nós
        </a>
      </div>
    <?php endwhile;
    wp_reset_postdata();
  else :
    ?>
    <p>Nenhuma pagina encontrada.</p>
  <?php endif; ?>
</section>