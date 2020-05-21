<?php 
get_header();
?>
<style>
.showcase{
  background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
}
</style>
<section class="showcase">
  <div class="container py-5">
    <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
    <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
    <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
  </div>
</section>
    
<div class="container-lg">    
<section class="boxes">
 <div class="container">
  <div class="row my-4">
	<div class="col-md-4">
	<div class="card">
	
	<?php if(is_active_sidebar('box1')) : ?>
	<?php dynamic_sidebar('box1'); ?>
	<?php endif; ?>
		</div>
	 </div>

	 <div class="col-md-4">
	<div class="card">
	
	<?php if(is_active_sidebar('box2')) : ?>
	<?php dynamic_sidebar('box2'); ?>
	<?php endif; ?>
		</div>
	 </div>


	 <div class="col-md-4">
	<div class="card">
	
	<?php if(is_active_sidebar('box3')) : ?>
	<?php dynamic_sidebar('box3'); ?>
	<?php endif; ?>
		</div>
	 </div>

	</div>
  </div>
	</section>
</div>

	<div class="card">
		<article class="content px-3 py-5 p-md-5">
<?php 
if ( have_posts() ) {
	while (have_posts() ) {
		the_post();
		the_content();
	}
}
?>
	    </article>	 
    </div>

<div class="card">



	</div>

    <?php
    get_footer();
    ?>
