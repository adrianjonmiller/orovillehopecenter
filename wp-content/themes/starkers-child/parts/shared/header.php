<header>
	<div class="container">
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
 	<?php wp_nav_menu(array(
	    'container'=> 'nav',
	    'menu_id' =>'main-menu',
	    'menu_class' =>'menu',
	    'theme_location' => 'primary'
	)); ?>
	</div>
</header>
<div id="main" role="main">
	<div class="container">
		<div class="grid">
		
