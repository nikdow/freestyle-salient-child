<?php
add_filter( 'the_content', 'sign_up' );

function sign_up ( $content ) { 
    if ( is_front_page() || get_the_title()==="Take Action" || get_the_title()==="Membership Levels" || get_the_title()==="Membership Checkout"
        ) return $content;
    return $content . 
        "<div class='sign_up'>" . 
        "<h3>Sign up to support helmet law reform</h3>" .
        do_shortcode ( '[signature narrow="1"]' ) .
        "</div>" .
        "<div>" .
        "<a href='/confirm/'>Update your email preferences</a>" .
        "</div>";
}

function my_pmpro_default_country($default)
	{	
		return "AU";
	}

add_filter("pmpro_default_country", "my_pmpro_default_country");
