<?php get_header(); ?>

<?php 
/* 
Template Name: Clients Page
*/
?>


<?php include'menu.php'; ?>



<section class="welcome row">
	<p class="lead span12">
	<?php the_field('page_intro'); ?>
	</p>

</section>

<hr class="blue">





<section class="row">
	<h2 class="span12">what clients say about exportise</h2>


<?php if(get_field('clients')): ?>
<?php while(has_sub_field('clients')): ?>

	<div class="clients point span4">

		<span class="arrow block"></span>
		<h2 class="client-title"><?php the_sub_field('client_name'); ?></h2>
		<blockquote class="bold testimonial"><?php the_sub_field('client_testimonial'); ?>
		</blockquote>

		<p class="small blue title-strong"><?php the_sub_field('client_author'); ?></p>
		<p class="small blue sub-text"><?php the_sub_field('client_position'); ?></p>
	</div>

<?php endwhile; ?>
<?php endif; ?>



						</section>

						<hr class="blue">

						<section class="row sector">
							<h2 class="span12">we know your sectors</h2>

							<div class="span8 pull-right sectors">
								<ul>
								<?php if(get_field('sectors')): ?>
<?php while(has_sub_field('sectors')): ?>	
	
	<li class="large-type bold blue"><?php the_sub_field('sector_name'); ?></li>
								
<?php endwhile; ?>
<?php endif; ?>

								</ul>
							</div>	

						</section>

						<hr class="blue">

						<section class="row market">

							<h2 class="span12">we know your market</h2>

<p class="span5 market">
	<?php the_field('markets'); ?>
</p>
							<img class="pull-right span6" src="<?php the_field('globe_image'); ?>">

						</section>


<?php get_footer(); ?>