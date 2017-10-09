

<?php
$args = array(
    'post_type' => 'giuria',
    'cat' => 4,
    'posts_per_page' => 3,
    'orderby' => 'rand'
  );
  $giurati = new WP_Query( $args );
  if ( $giurati->have_posts() ) {
    while ( $giurati->have_posts() ) {
      $giurati->the_post();
      $nome = get_field( "nome_giurato" );
      $foto = get_field('foto');
      $ruolo = get_field('ruolo');
?>


<div class="box-giuria column-block" >
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
