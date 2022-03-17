<?php include("partials/header.php"); ?>


<?php
  $wp_query = new WP_Query(array(
    'posts_per_page' => 10,
    'post_type' => 'post'
    )
  ); ?>


<section class="container blog-posts">
  <div class="row">
    <div class="container-wrapper ultimas-postagens">
      <h2>Últimas Postagens</h2>
      <?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <a href="<?php echo get_the_permalink(); ?>">
        <span class="d-inline">
          <?php echo get_the_date("d/m/Y"); ?> -
        </span>
        <p class="d-inline">
          <?php echo get_the_title(); ?>
        </p>
      </a><br>
      <?php endwhile; wp_reset_query(); ?><br>
    </div>

    <div class="container-wrapper mais-lidas">
      <h2>Postagens mais lidas</h2>

      <?php
        $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
        while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

        <a href="<?php echo get_the_permalink(); ?>">
        <span class="d-inline">
          <?php echo get_the_date("d/m/Y"); ?> -
        </span>
        <p class="d-inline">
          <?php echo get_the_title(); ?>
        </p>
      </a><br>


      <?php endwhile;
      ?>

    </div>
  </div>

</section>

<?php include("partials/footer.php"); ?>