<?php
get_header();

function renderGridContent($title) {
?>
<div class="home-item-content text-align-center">
  <h4 class="text-color-red">2019</h4>
  <h3 class="font-sans font-size-large"><?php echo $title; ?></h3>
  <h4 class="font-style-italic">Brand Identity</h4>
</div>
<?php
}

?>

<main id="main-content">
  <section id="posts">

    <div class="container">
      <div class="grid-row margin-bottom-large">
        <div class="grid-item item-s-12">

          <!-- Row 1 -->
          <div class="grid-row">
            <div class="grid-item no-gutter item-s-12 item-m-6">
              <div class="grid-row">
                <div class="home-item grid-item no-gutter item-s-12 item-m-6">
                  <?php renderGridContent('AROKIYAM'); ?>
                </div>
                <div class="home-item grid-item no-gutter item-s-12 item-m-6">
                  <?php renderGridContent('RA250'); ?>
                </div>
                <div class="home-item grid-item no-gutter item-s-12">
                  <?php renderGridContent('MARTIN SENYSZAK'); ?>
                  <h3></h3>
                </div>
              </div>
            </div>

            <div class="home-item grid-item no-gutter item-s-12 item-m-6">
              <?php renderGridContent('JAMM STUDIOS'); ?>
            </div>
          </div>

          <!-- Row 2 -->
          <div class="grid-row">
            <div class="home-item grid-item no-gutter item-s-12 item-m-9">
              <?php renderGridContent('ROMANCE FM'); ?>
            </div>

            <div class="home-item grid-item no-gutter item-s-12 item-m-3">
              <?php renderGridContent('HARRIET HORTON'); ?>
            </div>
          </div>

          <!-- Row 3 -->
          <div class="grid-row">
            <div class="home-item grid-item no-gutter item-s-12 item-m-6">
              <?php renderGridContent('ELLE MAGAZINE'); ?>
            </div>

            <div class="grid-item no-gutter item-s-12 item-m-6">
              <div class="grid-row">
                <div class="home-item grid-item no-gutter item-s-12">
                  <?php renderGridContent('WORLDPAY'); ?>
                </div>
                <div class="home-item grid-item no-gutter item-s-12">
                  <?php renderGridContent('RAPHA'); ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Row 4 -->
          <div class="grid-row">
            <div class="home-item grid-item no-gutter item-s-12 item-m-4">
              <?php renderGridContent('FUNHOUSE'); ?>
            </div>

            <div class="home-item grid-item no-gutter item-s-12 item-m-4">
              <?php renderGridContent('AUDIO NETWORK'); ?>
            </div>

            <div class="home-item grid-item no-gutter item-s-12 item-m-4">
              <?php renderGridContent('NIKE iD'); ?>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="grid-row">
        <div class="grid-item item-s-12">
          <div class="grid-row">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

        <article <?php post_class('grid-item no-gutter item-s-12 item-m-4'); ?> id="post-<?php the_ID(); ?>">
          <div class="home-item">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          </div>
        </article>

<?php
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>

  <?php get_template_part('partials/about'); ?>

</main>

<?php
get_footer();
?>
