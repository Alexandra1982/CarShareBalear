<?php get_header(); ?>

<div id="container" class="main">
				<h1 class="title"> <?php the_title(); ?> </h1>
				<div class="col-m-12 wpcontent">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
</div><!-- .content-area -->
<?php get_footer(); ?>
