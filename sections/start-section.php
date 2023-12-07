<section class="grid lg:grid-cols-2" id="start">
  <div class="grid place-items-start md:place-items-center lg:place-content-center gap-4 p-8 lg:p-0">
    <?php
    $args = array(
      'post_type' => 'pagina-start',
      'posts_per_page' => -1, // Mostrar todos os Section Heroes
    );

    $section_start_query = new WP_Query($args);

    if ($section_start_query->have_posts()) :
      while ($section_start_query->have_posts()) : $section_start_query->the_post();
    ?>
    <h2 class="uppercase text-5xl"><?php the_field('title') ?></h2>
    <p class="leading-loose break-words max-w-md font-light md:text-center"><?php the_field('description') ?></p>

    <a href="<?php the_field('reservar_esta_aula_agora') ?>" target="_blank" class="bg-lime-400 hover:bg-lime-500 rounded-full w-max px-6 py-3 cursor-pointer">
      Reserva horário agora
    </a>
    <span class="font-light text-black-500 max-w-[180px] text-center">
      <?php the_field('lugares') ?>
    </span>
  </div>
  <?php
      endwhile;
      wp_reset_postdata(); // Restaura os dados originais do post.
    else :
?>
  <p>Nenhuma página encontrada.</p>
  <?php endif; ?>

  <div>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/start.jpg" alt="">
  </div>
</section>