<?php get_header(); ?>
<section class="archive-banner">
	<div class="row">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri().'/images/archive-header.jpg'?>" alt="">
		</div>
	</div>
</section>

<section class="border-top border-color-medium-gray">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : ?>
			<header class="header">
				<h4 class="entry-title" itemprop="name"><?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h4>
			</header>
					
			<?php //while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php //endwhile; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
			<?php else : ?>
			<article id="post-0" class="post no-results not-found">
				<header class="header">
					<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
				</header>
				<div class="entry-content" itemprop="mainContentOfPage">
					<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>
		<?php endif; ?>
	</div>
</div>
</section>

<?php get_footer(); ?>