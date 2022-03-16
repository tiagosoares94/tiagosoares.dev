<?php include("partials/header.php"); ?>

<section class="topo text-center">
  <div class="container">
    <div class="foto">
      <?php
          $page_id = get_page_by_title( 'teste' )->ID;
          $image = get_field('foto', $page_id);
          $nome = get_field('nome', $page_id);
          $cargo = get_field('cargo', $page_id);
          $sobre = get_field('sobre', $page_id);
          $ferramentas = get_field('ferramentas', $page_id);
          $metodologia = get_field('metodologia', $page_id);
          $banco = get_field('banco', $page_id);
          $url = $image['url'];
          $alt = $image['alt'];
        ?>

      <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
    </div>

    <h1>
      <?php echo $nome; ?>
    </h1>

    <small>
      <?php echo $cargo; ?>
    </small>
    <a class="btn-padrao" href="#">Entre em contato</a>
  </div>
</section>

<section class="sobre">
  <div class="container container-wrapper">
    <h2>Sobre mim</h2>
    <?php echo $sobre; ?>
    <br>
    <div class="habilidades">
      <h3>Habilidades</h3><br>

      <h4>Ferramentas</h4>
      <i>➤</i>
      <?php echo str_replace("\n", "<br><i>➤</i>", $ferramentas); ?>

      <h4>Metodologia</h4>
      <i>➤</i>
      <?php echo str_replace("\n", "<br><i>➤</i>", $metodologia); ?>

      <h4>Banco de Dados</h4>
      <i>➤</i>
      <?php echo str_replace("\n", "<br><i>➤</i>", $banco); ?>

    </div>
  </div>
</section>

<?php
  $wp_query = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'projetos'
    )
  );

  ?>

<section class="projetos">
  <div class="container container-wrapper">
    <h2>Projetos</h2>
    <div>
    <?php while($wp_query->have_posts()) : $wp_query->the_post();
      $id_page = get_the_ID();
      $img = get_field('foto_do_projeto', $id_page);
      $url_img = $img['url'];
      $alt_img = $img['alt'];
    ?>
      <img src="<?php echo $url_img; ?>" alt="<?php echo $alt_img; ?>">
      <h3><?php echo get_field('titulo_do_projeto', $id_page); ?></h3>
      <p><?php echo get_field('descricao_do_projeto', $id_page); ?></p>
      <a href="<?php echo get_field('link_do_projeto', $id_page); ?>" target="_blank"><i>🌐</i> Acessar</a>
    <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
  <a class="btn-padrao" href="<?php echo $bloginfo_css; ?>/projetos">Ver todos projetos</a>
</section>


<?php
  $wp_query = new WP_Query(array(
    'posts_per_page' => 4,
    'post_type' => 'post'
    )
  ); ?>
<section class="blog text-center">
  <div class="container container-wrapper">
    <h2>Últimas postagens</h2>
    <div class="posts">
      <?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <a href="<?php echo get_the_permalink(); ?>">
        <span class="d-inline">
          <?php echo get_the_date("d/m/Y"); ?> -
        </span>
        <p class="d-inline">
          <?php echo get_the_title(); ?>
        </p>
      </a><br>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>

  <a class="btn-padrao" href="<?php echo $bloginfo_css; ?>/blog-posts">Ver todas postagens</a>
</section>

<?php include("partials/footer.php"); ?>

</body>

</html>