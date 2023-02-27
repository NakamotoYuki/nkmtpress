<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<div class="container">
<div class="row">
<div class="main col-md-8 order-md-1 col-xs-12">
<div class="row bg-white">
<div class="form-block">
<?php
echo do_shortcode(get_post()->post_content); ?>
</div>
</div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
</div>

<?php get_footer(); ?>
