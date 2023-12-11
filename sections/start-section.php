<section class="grid lg:grid-cols-2" id="start">
  <div class="grid gap-4 p-8 place-items-start md:place-items-center lg:place-content-center lg:p-0">
    <?php
    $args = array(
      'post_type' => 'pagina-start',
      'posts_per_page' => -1, // Mostrar todos os Section Heroes
    );

    $section_start_query = new WP_Query($args);

    if ($section_start_query->have_posts()) :
      while ($section_start_query->have_posts()) : $section_start_query->the_post();
    ?>
        <h2 class="text-5xl uppercase"><?php the_field('title') ?></h2>
        <p class="max-w-md font-light leading-loose break-words md:text-center"><?php the_field('description') ?></p>

        <a href="<?php the_field('reservar_esta_aula_agora') ?>" target="_blank" class="px-6 py-3 rounded-full cursor-pointer bg-lime-400 hover:bg-lime-500 w-max">
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
  <img src="<?php echo get_template_directory_uri() ?>/assets/images/start.webp" alt="imagem de uma mulher fazendo exercicio" width="1000" height="667" loading="lazy">
</div>
</section>