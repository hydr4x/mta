<?php @require_once('header.php');?>
<?php @require_once('navbar.php');?>


<main class="container-fluid theme-wrapper">

<aside class="left-sidebar col-sm-3">
  <div class="left-sidebar__wrapper col-sm-12">
    <?php dynamic_sidebar("leftsidebar"); ?>

    <?php
      global $lang;
      echo '<br>Język: '.$lang;
    ?>
  </div>
</aside>

<section class="content col-sm-6">
  <?php
  $args = array( 'post_type' => 'Teams', 'posts_per_page' => 10 );
  $the_query = new WP_Query( $args );
  ?>
  <?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="post">
      <h2><?php the_title(); ?></h2>
      <div class="post__excerpt">
        <?php the_excerpt(); ?>
        <?php  echo '<a href="'.get_permalink().'">Czytaj dalej</a>'; ?>
      </div>
    </div>
  <?php endwhile;
  wp_reset_postdata(); ?>
  <?php endif; ?>
</section>

<aside class="right-sidebar col-sm-3">
  <div class="right-sidebar__wrapper col-sm-12">
    <?php dynamic_sidebar("rightsidebar"); ?>
  </div>
</aside>


</main>


<?php @require_once('footer.php');?>
