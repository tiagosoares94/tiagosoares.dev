<?php include("partials/header.php"); ?>

<section id="single-news" class="container">

  <?php
    $image = get_field('thumbnail', get_the_id());
    $url = $image['url'];
    $alt = $image['alt'];
    wpb_set_post_views(get_the_ID());
  ?>


  <article id="content" class="container">
    <h1 class="text-center">
      <?php echo get_the_title(); ?>
    </h1><br>
    <img src="<?php echo $url;?>" alt="<?php echo $alt?>"><br><br>
    <?php the_content(); ?>
  </article>

</section>

<?php include("partials/footer.php"); ?>