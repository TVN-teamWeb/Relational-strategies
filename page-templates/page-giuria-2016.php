<?php
/*
Template Name: Giuria 2016
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
          <p>
          	<?php the_content(); ?>
            <br/><br/>
          </p>
          <div class="section giuria">

            <div class="expanded row ">
          <?php
          $args = array(
              'post_type' => 'giuria',
              'cat' => 3,
              'posts_per_page' => 30,
              'orderby' => 'name',
              'order' => 'ASC'
            );
            $giurati = new WP_Query( $args );
            if ( $giurati->have_posts() ) {
              while ( $giurati->have_posts() ) {
                $giurati->the_post();
                $nome = get_field( "nome_giurato" );
                $foto = get_field('foto');
                $ruolo = get_field('ruolo');
          ?>

          <div class="column small-12 medium-6 large-4 is-showing" >
            <figure class="img-box">
                <!--img class="curtain-img" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/box-giuria.jpg"-->
                <img class="curtain-img" src="<?php echo $foto['url']; ?>">
            </figure>
            <div class="desc-giudice appear-box">
              <h4 class="appear-txt"><?php echo $nome; ?></h4>
              <span class="role appear-txt"><?php echo $ruolo; ?></span>
            </div>
          </div>

            <?php
                }
              }

            ?>
          </div>

        </div>
    		</div>
      </div>

      </article>
    </div>

  <?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
