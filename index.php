<?php
get_header();

// get query posts as an array
$posts = $wp_query->posts;
// shuffle array
shuffle($posts);

function renderHomeItem($post, $extraClasses = '', $titleSize = 'font-size-title') {
  if (empty($post)) {
    return;
  }

  $categories = wp_get_post_categories($post->ID, array('fields' => 'all'));

  $categoryTitle = '';

  if (count($categories)) {
    $categoryTitle = $categories[0]->name;
  }

  // get thumbnail
  $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'gallery' )
?>
<a href="<?php echo get_the_permalink($post->ID); ?>" class="home-item grid-item no-gutter item-s-12 <?php echo $extraClasses; ?>">
  <div class="home-item-image" <?php
    if ($thumbnail) {
      echo 'style="background-image: url(' . $thumbnail[0] . ');"';
    }
  ?>></div>
  <div class="home-item-image-overlay"></div>
  <div class="home-item-content text-align-center">
    <h4 class="text-color-red"><?php echo get_the_date('Y', $post->ID); ?></h4>
    <h3 class="home-item-title font-uppercase font-sans <?php echo $titleSize; ?> line-tighter margin-top-small margin-bottom-small"><?php echo $post->post_title; ?></h3>
    <h4 class="home-item-category font-style-italic"><?php echo $categoryTitle; ?></h4>
  </div>
</a>
<?php
}

?>

<main id="main-content">
  <section id="posts">

    <div class="container">
      <div class="grid-row margin-bottom-large">
        <div class="grid-item item-s-12">
          <hr />
        </div>

        <div class="grid-item item-s-12">

          <!-- Row 1 -->
          <div class="grid-row">
            <div class="grid-item no-gutter item-s-12 item-m-6">
              <div class="grid-row">
                <?php
                  if (isset($posts[0])) {
                    renderHomeItem($posts[0], 'item-m-6');
                  }


                  if (isset($posts[1])) {
                    renderHomeItem($posts[1], 'item-m-6');
                  }


                  if (isset($posts[2])) {
                    renderHomeItem($posts[2], '', 'font-size-title-larger');
                  }
                ?>
              </div>
            </div>

            <?php
              if (isset($posts[3])) {
                renderHomeItem($posts[3], 'item-m-6', 'font-size-title-largest');
              }
            ?>
          </div>

          <!-- Row 2 -->
          <div class="grid-row">
            <?php
              if (isset($posts[4])) {
                renderHomeItem($posts[4], 'item-m-9', 'font-size-title-largest');
              }

              if (isset($posts[5])) {
                renderHomeItem($posts[5], 'item-m-3', 'font-size-title-larger');
              }
            ?>
          </div>

          <!-- Row 3 -->
          <div class="grid-row">
            <?php
              if (isset($posts[6])) {
                renderHomeItem($posts[6], 'item-m-6', 'font-size-title-largest');
              }
            ?>

            <div class="grid-item no-gutter item-s-12 item-m-6">
              <div class="grid-row">
                <?php
                  if (isset($posts[7])) {
                    renderHomeItem($posts[7], '', 'font-size-title-larger');
                  }

                  if (isset($posts[8])) {
                    renderHomeItem($posts[8], '', 'font-size-title-larger');
                  }
                ?>
              </div>
            </div>
          </div>

          <!-- Row 4 -->
          <div class="grid-row">
            <?php
              if (isset($posts[9])) {
                renderHomeItem($posts[9], 'item-m-4');
              }

              if (isset($posts[10])) {
                renderHomeItem($posts[10], 'item-m-4');
              }

              if (isset($posts[11])) {
                renderHomeItem($posts[11], 'item-m-4');
              }
            ?>
          </div>

        </div>
      </div>
    </div>

  </section>

  <?php get_template_part('partials/about'); ?>

</main>

<?php
get_footer();
?>
