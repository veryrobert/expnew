<?php get_header(); ?>
<?php include'menu.php'; ?>

<section class="row news">
	<div class="span12">
		<div class="new-feed row">
			<div class="span12 pull-right border-top-2">
				<div class="row">
					<h3 class="span4"><img src="<?php bloginfo('template_url'); ?>/img/news.svg" class="pull-left icon" alt="">Latest<br/>News</h3>
					
				</div>
			</div>

			<div class="span12 pull-right feed ">	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="news-item row">
				<span class="border-top"></span>
				<h4 class="span2 date meta block"><?php the_time('d.m.y') ?></h4>	
					<div class="span4 block">	
						<h3><?php the_title(); ?> </h3>
					</div>
					<div>
						<div class="span6 pull-right">	
							<p>
							<?php the_content(); ?>
							</p>
						</div>
					</div>
				
				</div>
				<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

			</div>
		</div>


	</div>
</section>





<?php get_footer(); ?>