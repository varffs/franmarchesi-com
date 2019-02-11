<?php
get_header();
?>

<main id="main-content">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>
    <article <?php post_class('container'); ?> id="post-<?php the_ID(); ?>">
      <div class="grid-item item-s-12 margin-bottom-basic">
        <hr />
        <hr />
      </div>

      <div class="grid-row">
        <div class="grid-item item-s-12 item-m-3">
          <h1 class="font-sans font-uppercase margin-bottom-small"><?php the_title(); ?></h1>
          <h4 class="font-italic text-color-red">category</h4>
        </div>

        <div class="grid-item item-s-12 item-m-6">
          <?php the_content(); ?>
        </div>

      </div>
    </article>

<?php
  }
} else {
?>
    <div class="container">
      <div class="grid-row">
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
      </div>
    </div>
<?php
} ?>

  <?php get_template_part('partials/about'); ?>

</main>

<?php
get_footer();
?>
