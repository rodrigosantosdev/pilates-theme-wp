<section class="container px-4 my-8 xl:px-0" id="aulas">

  <div class="text-center">
    <span class="text-xl font-bold">Faça aula</span>
    <p class="max-w-md pt-4 mx-auto">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem libero pariatur quas velit laborum quae.
    </p>
  </div>

  <div class="grid gap-12 py-4 mt-8 md:grid-cols-3 lg:grid-cols-3 2xl:grid-cols-3">
    <?php
    $args = array(
      'post_type' => 'pagina-aula',
      'posts_per_page' => -1, // Mostrar todos os Section Heroes
      'order' => "asc"
    );

    $section_classroom_query = new WP_Query($args);

    if ($section_classroom_query->have_posts()) :
      while ($section_classroom_query->have_posts()) : $section_classroom_query->the_post();
    ?>
        <article class="grid gap-4 cursor-pointer">
          <figure class="grid place-items-center">
            <img src="<?php the_field('image'); ?>" alt="" class="transition-all ease-out border-8 border-gray-100 rounded-full w-52 hover:border-lime-400" />
          </figure>
          <div class="grid gap-3 p-4 text-center">
            <span class="text-xl font-semibold"><?php the_field('title'); ?></span>
            <p class="max-w-sm text-base text-center"><?php the_field('description'); ?></p>
          </div>
        </article>
      <?php
      endwhile;
      wp_reset_postdata(); // Restaura os dados originais do post.
    else :
      ?>
      <p>Nenhuma página encontrada.</p>
    <?php endif; ?>
  </div>

</section>