<?php get_header(); ?>

<?php 
/* 
Template Name: home Page
*/
?>

<?php include'menu.php'; ?>

<section class="welcome row">
	<p class="lead span12">
	<?php the_field('page_intro'); ?>
	</p>

	<div class="span12 section-title border-top-2">
		<div class="row">
			<h2 class="span6"><?php the_field('slider_title'); ?></h2>
			<a class="span3 pull-right bold read-mor align-right" href="<?php the_field('page_link'); ?>">
				<?php the_field('link_message'); ?>
			</a>
		</div>
	</div>

	





		
</section>

<?php include'slider.php'; ?>

<section class="row">

	<aside class="tips span3-300 border-bottom border-top-2">
		<img src="<?php bloginfo('template_url'); ?>/img/target_blue.svg" class="pull-left icon" alt="">
		<h3>Export<br/>Tips</h3>
		<ul id="tips">	

<?php if(get_field('tips')): ?>

	<?php while(has_sub_field('tips')): ?>
				<li>
				<p class="lead">
					<?php the_sub_field('tips'); ?>
				</p>
				</li>
	<?php endwhile; ?>
<?php endif; ?>
		</ul>	

				<p class="button bold">show another tip</p>
	</aside>

	<div class="new-feed row">

		<div class="span8 pull-right border-top-2">
			<div class="row">

				<h3 class="span4"><img src="<?php bloginfo('template_url'); ?>/img/news.svg" class="pull-left icon" alt="">Latest<br/>News</h3>
				<a class="span2 pull-right bold read-more align-right" href="<?php if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option('page_for_posts' ) );
else echo bloginfo('url');?>">See more news</a>
			</div>
		</div>



		<div class="span8 pull-right feed border-bottom ">	

<?php
$excerpts = new WP_Query( array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3
) );

if ( $excerpts->have_posts() ) : ?>

<?php while ( $excerpts->have_posts() ) : $excerpts->the_post(); ?>
			
			<div class="news-item row">


			<span class="border-top"></span>	
				<div class="span4">
					<h4 class="date meta block"><?php echo get_the_date('d.m.y'); ?></h4>
					<h3><?php the_title(); ?></h3>
				</div>
				<div>
					<div class="span4 pull-right">	
						<p>
							<?php the_excerpt(); ?>
						</p>
					</div>
				</div>
			
			</div>
			<?php endwhile; wp_reset_postdata();?></ul>
<?php endif; ?>
	
		</div>





	</div>
</section>








<?php get_footer(); ?>