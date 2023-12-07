<section class="grid lg:grid-cols-2" id="estudio">
  <div>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/studio.jpg" alt="" class="w-full" />
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

      <div class="grid place-content-evenly bg-black-950 text-black-50 p-8 lg:p-0">
        <h2 class="uppercase text-5xl"><?php the_field('title') ?></h2>
        <p class="leading-loose break-words max-w-sm font-light">
          <?php the_field('description') ?>
        </p>

        <a href="<?php the_field('link') ?>" target="_blank" class="bg-lime-400 text-lime-900 rounded-full w-max mt-4 hover:bg-lime-500 px-6 py-3 cursor-pointer">
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