<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<style>

footer{
	display: none;
}

#site-header{
	display: none;
}


.main-div{
	position:relative;
	color: white; 
	text-align: center;
	margin-top: 170px;
	border-radius: 50px;
	font-size: 20px; 
	font-weight: 400; 
	font-family: 'Inter', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
}

.search-div{
	background-color: #3C85FF;
	width: 50% !important;
	padding: 50px;
	margin: 0;
	border-radius: 50px;

}

.form-button{
	margin-top: 20px;
	background-color: white !important; 
	border-radius: 50px !important; 
	color: #555555 !important; 
	border: none !important; 
	font-weight: 600 !important; 
	font-family: 'Inter', sans-serif !important; 
	font-size: 20px !important;
}

</style>

<main id="content" class="main-div" role="main">

<div class = "search-div">

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>

				<span><?php esc_html_e( 'The post title for the ID' ); ?></span>

				<?php printf('<span>%s is: </span>', esc_html( get_the_ID() ) );?>

				<?php echo get_search_query(); ?>

	<?php endif; ?>

		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				printf( '<span>%s</span>', esc_html( get_the_title() ) );
			endwhile;
			?>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can\'t find the post related to the ID you provided.' ); ?></p>
		<?php endif; ?>

	<?php wp_link_pages(); ?>

	<br>

	<form action = "/search-form">

	<input type="submit" class = "form-button"
            value="<?php echo esc_attr_x( 'Back to search', 'submit button' ) ?>" />

	</form>
	<?php
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) :
		?>
		<nav class="pagination" role="navigation">
			<?php /* Translators: HTML arrow */ ?>
			<div class="nav-previous"><?php next_posts_link( sprintf( __( '%s older'), '<span class="meta-nav">&larr;</span>' ) ); ?></div>
			<?php /* Translators: HTML arrow */ ?>
			<div class="nav-next"><?php previous_posts_link( sprintf( __( 'newer %s'), '<span class="meta-nav">&rarr;</span>' ) ); ?></div>
		</nav>
	<?php endif; ?>
	</div>
</main>
