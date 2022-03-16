<?php include("partials/header.php"); ?>

<?php
  $wp_query = new WP_Query(array(
    'posts_per_page' => 20,
    'post_type' => 'projetos'
    )
  );
?>

<section class="projetos">
  <div class="container">
    <?php while($wp_query->have_posts()) : $wp_query->the_post();
      $page_id = get_the_ID();
    ?>
    <div class="col-projetos mb-5 card-projeto">
      <img src="<?php echo get_field('foto_do_projeto', $id_page)['url'] ?>"
        alt="<?php echo get_field('foto_do_projeto', $id_page)['alt'] ?>">
      <h3>
        <?php echo get_field('titulo_do_projeto', $id_page); ?>
      </h3>
      <p>
        <?php echo get_field('descricao_do_projeto', $id_page); ?>
      </p>
      <a href="<?php echo get_field('link_do_projeto', $id_page); ?>" target="_blank"><i>🌐</i> Acessar</a>
      <hr>
    </div>
    <?php endwhile; wp_reset_query(); ?>

</section>


<?php include("partials/footer.php"); ?>