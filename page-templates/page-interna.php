<?php
/*
Template Name: Interna
*/
get_template_part( 'header-interna' );
the_post();
?>

<div id="fullwidth">

  <?php do_action( 'foundationpress_before_content' ); ?>
    <div id="interna">
    	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    		<header>
    			<h1 class="entry-title"><?php the_title(); ?></h1>
    		</header>
    		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
    		<div class="entry-content">
    			<?php the_content(); ?>
    		</div>
      </article>
    </div>

  <?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
