<?php
/*
Template Name: ALI JAMAAL HOME
*/
?>

<div id="ali-home">
<div id="conteudo-ali">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( is_front_page() ) { ?>
				<?php } else { ?>	
				<?php } ?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>

					</div><!-- .entry-content -->
				</article><!-- #post-## -->
<?php endwhile; ?>
</div>
<div id="menu-ali">
  <ul>
  <li><a href="#">History</a></li>
  <li><a href="#">Pedigree</a></li>
  <li><a href="#">Photos</a></li>
  <li><a href="#">Voltar</a></li>
  </ul>
  </div>
<?php get_header() ?>
<?php get_sidebar(); ?>
</div>
