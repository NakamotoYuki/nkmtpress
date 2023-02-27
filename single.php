<?php get_header();?>
  <div class="container">
      <div class="tab_box is_show" id="summary">
        <div class="row">

            <div class="col-md-8 mb-4 bg-white">
<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>
    <h2 class = "pl-2"><?php the_title(); ?></h2>
    <span class="badge"><?php the_category('</span><span class="badge ml-1">'); ?></span>
    <p><?php the_time('Y年n月j日'); ?></p>
    <?php the_content(); ?>
    <hr>
  <?php endwhile; ?>

<?php else : ?>
  <div class="col-md-8 mb-4 bg-white">
    <p>記事がありませんでした</p>
  </div>
<?php endif; ?>

        </div>
      <?php get_sidebar(); ?>
        </div>
      </div>

    </div>
<?php get_footer(); ?>
