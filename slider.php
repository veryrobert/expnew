



<section class="slider row">
	<div class="span12">
		<div id="slider-with-blocks-1" class="royalSlider rsMinW  ">
			<?php if(get_field('slider')): ?>
			<?php while(has_sub_field('slider')): ?>

			<div class="rsContent">
				<div class="bContainer row">
					<div class="rsABlock span12">
						<div class="row">
							<div class="span3-300" data-move-effect="none">
								<h3 class="large-type green"><?php the_sub_field('slider_title'); ?></h3>
								<p class="lead" >
									<?php the_sub_field('slider_text'); ?>
								</p>
							</div>
							<div class="span8 pull-right">
									<img src="<?php the_sub_field('slider_image'); ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
				<?php endwhile; ?>
<?php endif; ?>
		</div>
	</div>
</section>




