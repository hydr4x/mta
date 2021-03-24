<?php
/*
*Template Name: Teams
*Template Post Type: teams
*/
?>

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
<?php while ( have_posts() ) : the_post(); ?>
  <div class="single-post">
    <h1><?php the_title(); ?></h1>
    <div class="single-post__content">
      <?php  the_content();  ?>
    </div>
  </div>
<?php endwhile; ?>
</section>

<aside class="right-sidebar col-sm-3">
  <div class="right-sidebar__wrapper col-sm-12">
    <?php dynamic_sidebar("rightsidebar"); ?>
  </div>
</aside>

</main>


<?php @require_once('footer.php');?>
