

<span class="head-winners">
<h2 class="white">WINNERS 2016</h2>
</span>
<div class="winners row expanded">

  <?php
    $CDN = "http://wpc.6f93.edgecastcdn.net/806F93/media.televisionet.tv/video/grandprix/relationalstrategies/";

    $args = array(
        'post_type' => 'winners',
        'posts_per_page' => 20
      );

      $winners = new WP_Query( $args );

      $i=0;

      if ( $winners->have_posts() ) :
        while ( $winners->have_posts() ) : $winners->the_post();

        $titolo = get_field('titolo');
        $cliente = get_field('azienda');
        $agenzia = get_field('agenzia');
        $cdp = get_field('cdp');
        $premio = get_field('premio');
        $img = get_field('thumb_video');
        $video = $CDN.get_field('nome_video');
        //$thumb = get_the_post_thumbnail_url($the_post_id, 'winners-thumb');



        if( ($img['sizes']['winners-thumb'] != "") && (trim($titolo) != "Vincitore") ) :
          //print_r($img);
        ?>

  <div class="box-winners small-12 medium-6 large-4 column">
    <figure class="img-box" onclick="popupVideo('<?php echo the_title(); ?>','<?php echo $video ?>')">
      <img class="curtain-img" src="<?php echo $img['sizes']['winners-thumb']; ?>">

    <div class="infobox">
      <h5><?php echo $titolo; ?></h5>
      <p><b>1st Prize</b>: <?php echo $premio; ?></p><br/>

      <p>
      <?php
        if( (trim($cliente) != "") ) { echo $cliente."<br/>"; }
        if( (trim($agenzia) != "") ) { echo $agenzia."<br/>"; }
        if( (trim($cdp) != "") ) { echo $cdp; }
      ?>
      </p>
    </div>
    </figure>

  </div>

  <?php
    endif;
    endwhile;
    endif;
    wp_reset_postdata();

    ?>


</div>
