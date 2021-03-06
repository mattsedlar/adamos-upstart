<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package adamos
 * @since adamos 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="blog-image">
				<?php
			if ( has_post_thumbnail() ) {
    $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'featured' );
     echo '<img alt="post" class="imagerct" src="' . $image_src[0] . '">';
}
  			?>
    </div>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'adamos' ), 'after' => '</div>' ) ); ?>
        <footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'adamos' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
