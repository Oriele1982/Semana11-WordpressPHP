<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_title();
		the_excerpt();

	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;
);
?>