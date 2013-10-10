<?php get_header(); ?>

<?php 
/* 
Template Name:  Services Page
*/
?>

<?php include'menu.php'; ?>



<section class="welcome row">
	<p class="lead span12">
			<?php the_field('page_intro'); ?>
	</p>

</section>

<hr class="blue">




		 
		
		
	


<section class="row services">
	<h2 class="span12">our services</h2>

<?php if(get_field('services')): ?>
<?php while(has_sub_field('services')): ?>		


	<div class="clients clients-height span3 border-top">
		<div class="initials <?php the_sub_field('initials'); ?>"><p><?php the_sub_field('initials'); ?></p></div>
		<h3><?php the_sub_field('service_title'); ?> </h3>
		<p class="services">
		<?php the_sub_field('services_text'); ?> 
		<p>
	</div>


<?php endwhile; ?>
<?php endif; ?>


</section>

<hr class="blue">

<section class="row">
	<h2 class="span3">the benefits</h2>
	<p class="lead span9 black">
		<?php the_field('benefits'); ?>
	</p>

<div class="graphic span12">
	<img src="<?php bloginfo('template_url'); ?>/img/graphic.svg" alt="">
</div>	

</section>

<?php get_footer(); ?>