<header class="row">
	
	<div class="logo span2"><a href="<?php echo home_url(); ?>"><h1>Exportise</h1></a></div>

<!-- 	<nav class="span6 pull-right">
		<ul class="inline pull-right">
		<li><a href="about.php">About</a></li>
		<li><a href="clients.php">Clients</a></li>
		<li><a href="services.php">Services</a></li>
		<li><a href="news.php">News</a></li>
		<li class="open"><a >Contact</a></li>

		<li class="social margin-left-30" ><a class="twitter" target="_blank" href="http://www.twitter.com">Twitter</a></li>
		<li class="social" ><a class="linkedin" target="_blank" href="http://www.linkedin.com">Linkedin</a></li>
		</ul>
	</nav> -->

<nav class="span6 pull-right">
	 <?php wp_nav_menu( 
	 array( 
	 'theme_location' => 'main-menu', 
	 'container' => false,
	 'items_wrap'  => '<ul class="%2$s inline pull-right">%3$s</ul>' 

	 ) ); ?>
</nav>
         

</header>