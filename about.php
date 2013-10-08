<?php get_header(); ?>

<?php 
/* 
Template Name:  Page
*/
?>


<?php include'menu.php'; ?>



<section class="welcome row">
	<p class="lead span12">
		<?php the_field('page_intro'); ?>
	</p>
	<hr class="blue">
</section>

<hr class="blue">

<section class="row">

	<h2 class="span12">We are</h2>










<?php if(get_field('about')): ?>
<?php while(has_sub_field('about')): ?>

	<div class="about-info span6">
	<img src="<?php the_sub_field('about_icon'); ?>" alt="tick-image">
		<h3><?php the_sub_field('about_title'); ?></h3>
		<p>
		<?php the_sub_field('about_text'); ?>
		</p>
	</div>
<?php endwhile; ?>
<?php endif; ?>


		


</section>

<hr class="blue">

<section class="row team">

	<h2 class="span3">core team</h2>
	<div class="profile span9 pull-right">
		
<?php if(get_field('staff_profiles')): ?>
<?php while(has_sub_field('staff_profiles')): ?>		

		<div class="row profile-row">
			<div class="span3">
				<h3 class=" name gray">	<?php the_sub_field('name'); ?></h3>
				<h3 class="gray title"><?php the_sub_field('position'); ?></h3>
				<img src="<?php the_sub_field('profile'); ?>" alt="">
				<button href="<?php the_sub_field('link_address'); ?>"><?php the_sub_field('link_name'); ?></button>
			</div>
			<div class="span6">
		<p>	<?php the_sub_field('about'); ?> </p>
			</div>
		</div>
		<hr class="blue-dashed">

<?php endwhile; ?>
<?php endif; ?>




	
</div>

</section>

<?php get_footer(); ?>