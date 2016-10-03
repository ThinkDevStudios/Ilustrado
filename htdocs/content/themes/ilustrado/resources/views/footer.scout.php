<?php
$menu_name = 'footer-nav'; //menu slug
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
$menu_list = '<aside class="menu">' ."\n";

foreach ( (array) $menu_items as $key => $menu_item ) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $menu_list .= '<div><a href="' . $url . '">' . $title . '</a></div>' ."\n";
    }
$menu_list .= '</aside>' . "\n";

?>		<footer id="footer">
			<div class="container">
				<aside>
					<div class="logo"><img class="resposnive" src="{{ themosis_assets() }}/images/ilustrado-footer-logo.png"></div>
					<div class="social-icons">
						<div><i class="fa fa-twitter"></i></div>
						<div><i class="fa fa-facebook"></i></div>
						<div><i class="fa fa-pinterest"></i></div>
						<div><i class="fa fa-instagram"></i></div>
						<div><i class="fa fa-vimeo"></i></div>
						<div><i class="fa fa-google-plus"></i></div>
					</div>

				</aside>
				<aside>
					<div class="title">Facebook Posts</div>
					<p>
						<a href="#" title="#">Happy New Year from Ilustrado</a>
					</p>
						<div class="date">January 1, 2016</div>
					<p>
						<a href="#" title="#">Happy New Year from Ilustrado</a>
					</p>
						<div class="date">January 1, 2016</div>
					<p>
						<a href="#" title="#">Happy New Year from Ilustrado</a>
					</p>
						<div class="date">January 1, 2016</div>
				</aside>
				<aside>
					<div class="title">Contact Info</div>
					<p><i class="fa fa-map-marker"></i> 744 Calle Real del Palacio (Gen. Luna), Intramuros, 
					Manila 1002, Philippines</p>
					<p><i class="fa fa-phone"></i> +632.123.4567</p>
					<p><i class="fa fa-envelope"></i> info@ilustradorestaurant.com.ph</p>
					<p><i class="fa fa-globe"></i> www.ilustradorestaurant.com.ph</p>
				</aside>
				<div class="clearfix"></div>
			</div>
		</footer>
		<footer id="copyright">
			<div class="container">
				<aside class="copyright">Copyright Ilustrado Restaurant 2016</aside>
				{{ $menu_list }}
				<div class="clearfix"></div>
			</div>
		</footer>
	</body>
</html>