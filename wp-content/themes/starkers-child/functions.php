<?php




	function starkers_script_enqueuer() {
		wp_register_script( 'application', get_stylesheet_directory_uri().'/js/application.js', array( 'jquery' ) );
		wp_enqueue_script( 'application' );
		
		/* Vendors */
		wp_register_script( 'jquery-ui', get_stylesheet_directory_uri().'/js/vendors/jquery-ui-1.10.0.custom.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'jquery-ui' );
		
		wp_register_script( 'flexslider', get_stylesheet_directory_uri().'/js/vendors/jquery.flexslider-min.js', array( 'jquery' ) );
		wp_enqueue_script( 'flexslider' );
		
		wp_register_script( 'modernizr', get_stylesheet_directory_uri().'/js/vendors/modernizr-2.0.6.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'modernizr' );
		
		wp_register_script( 'inview', get_stylesheet_directory_uri().'/js/vendors/jquery.inview.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'inview' );
	
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/css/screen.css', '', '', 'screen' );
	    wp_enqueue_style( 'screen' );
	    
	    wp_register_style( 'ie', get_stylesheet_directory_uri().'/css/ie.css', '', '', 'screen' );
	    wp_enqueue_style( 'ie' );
	    
	    wp_register_style( 'print', get_stylesheet_directory_uri().'/css/print.css', '', '', 'print' );
	    wp_enqueue_style( 'print' );
	    
	    wp_register_style( 'style', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
	    wp_enqueue_style( 'style' );
	    
	    
	}
	
	
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"), false, '1.9.0', true);
		wp_enqueue_script('jquery');
	}
	
	add_action('init', 'modify_jquery');
	
	
	register_nav_menus(array('primary' => 'Primary Navigation'));
	
	function my_register_sidebars() {
	
		/* Register the 'primary' sidebar. */
		register_sidebar(
			array(
				'id' => 'primary',
				'name' => __( 'Primary' ),
				'description' => __( 'Primary sidebar.' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
		
		register_sidebar(
			array(
				'id' => 'secondary',
				'name' => __( 'Secondary' ),
				'description' => __( 'Secondary sidebars.' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
		
		register_sidebar(
			array(
				'id' => 'home',
				'name' => __( 'Home' ),
				'description' => __( 'Content on home page.' ),
				'before_widget' => '<div id="%1$s" class="col-"><div class="module outline-dash">',
				'after_widget' => '</div></div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
				
	
		/* Repeat register_sidebar() code for additional sidebars. */
	}
	
	add_action( 'widgets_init', 'my_register_sidebars' );


?>