<?php get_header();

?>

<script type="javascript">
  window.scrollTo(0,0);
</script>

<?php get_template_part( 'template-parts/video' ); ?>

<div id="fullpage">
  <!-- Sezione autoscroll ON -->
  <div class="section hp" id="section-1">
    <div class="claim bounce-in long-delay" id="claim" data-toggler data-animate="scale-in-up">
      <a href="http://entry.relationalstrategiesgrandprix.com/" target="_blank">
        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/claim_<?php echo $LANG; ?>.png" />
      </a>
    </div>


  </div>
  <!-- Sezione autoscroll OFF -->
  <div class="section about fp-normal-scroll" id="section-2">
    <div class="sfondo-about">
      <div class="content">
        <h1 class="text"> 
          <div class="curtain-txt-box">
            <div class="curtain-txt txt-bold">IL PREMIO DEDICATO ALLE TECNICHE PIÙ INNOVATIVE</div>
          </div>
          <div class="curtain-txt-box">
            <div class="curtain-txt txt-bold">ED EFFICACI DEL RELATIONAL MARKETING:</div>
          </div>
          <div class="curtain-txt-box">
            <div class="curtain-txt txt-bold">DIGITAL, DM, PR, DIGITAL, EVENTS, BRANDED CONTENT E PROMO.</div>
          </div>
        </h1>

        <p>Un Evento sempre in movimento, capace di rinnovarsi di volta in volta per seguire
          l’evoluzione del mercato ed essere sempre attuale...</p>
  <!-- button type="button" name="button" class="alert">edizione 2016</button -->
        <div class="center">
          <a class="prova" href="il-premio">Scopri di più</a>
        </div>
      </div>

    </div>

    <?php $CDN = "http://media.televisionet.tv/video/grandprix/relationalstrategies/"; ?>
    <div class="griglia expanded row ">
      <?php $video = "RELATIONAL-SERATA-VINCITORI-TOTALONE-2016.mp4"; ?>
      <div class="box-about" onclick="popupVideo('Interviste ai vincitori 2016','<?php echo $CDN.$video ?>')">
        <div class="img-box">
          <img class="foto curtain-img" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-01.jpg" />
        </div>
        <div class="appear-box">
          <p class="title appear-txt">Interviste ai vincitori 2016</p>
        </div>
      </div>
      <?php $video = "RELATIONAL-SERATA-PARTNER-2016.mp4"; ?>
      <div class="box-about" onclick="popupVideo('La parola ai partner 2016','<?php echo $CDN.$video ?>')">
        <div class="img-box">
          <img class="foto curtain-img" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-02.jpg" />
        </div>
        <div class="appear-box">
          <p class="title appear-txt">La parola ai partner 2016</p>
        </div>
      </div>
      <?php $video = "RELATIONAL-GIURIA-TOTALE-2016.mp4"; ?>
      <div class="box-about" onclick="popupVideo('La giuria 2016','<?php echo $CDN.$video ?>')">
        <div class="img-box">
          <img class="foto curtain-img" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-03.jpg" />
        </div>
        <div class="appear-box">
          <p class="title appear-txt">Giuria 2016</p>
        </div>
      </div>
      <?php $video = "tutti i lavori__audio_1 (1).mp4"; ?>
      <div class="box-about" onclick="popupVideo('Tutti i lavori 2016','<?php echo $CDN.$video ?>')">
        <div class="img-box">
          <img class="foto curtain-img" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/video-04.jpg" />
        </div>
        <div class="appear-box">
          <p class="title appear-txt">Tutti i lavori 2016</p>
        </div>
      </div>
    </div>

  </div>

  <div class="section giuria fp-normal-scroll">
    <div class="sfondo-giuria">
      <div class="content">
        <?php if ($LANG == 'en') { ?>
        <h1>the jury</h1>
        <p>The Award brings together the protagonists of corporate marketing<br/>and academic world/partners</p>
        <?php } else  { ?>
        <h1>la giuria</h1>
        <p>Il Premio riunisce in Giuria i protagonisti del marketing d’azienda<br/> e i rappresentanti delle associazioni/partner</p>
        <?php } ?>
      </div>
    </div>

    <div class="giudici expanded row">

      <?php get_template_part( 'template-parts/giuria' ); ?>

    </div>
    <a class="button" name="button" href="<?php echo get_page_link(3751); ?>" >
      Tutti i giurati
    </a>
  </div>


  <div class="section winner fp-auto-height">
    <div class="content">
      <h1>GRANDPRIX 2016</h1>
      <?php $CDN = "http://wpc.6f93.edgecastcdn.net/806F93/media.televisionet.tv/video/grandprix/relationalstrategies/";
      $video = $CDN."22_11_16-BURGER_KING.mp4"?>
      <div class="box-winner img-box"  onclick="popupVideo('King of Umarells','<?php echo $video ?>')">
        <img class="white" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/bckwinner.jpg">
        <img class="foto curtain-img" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/Winner2016.jpg">
        <div class="info appear-box">
          <h3 class="appear-txt">KING OF UMARELLS</h3>
          <p class="appear-txt"><b>Burger King</b> | <b>The Big Now</b> | 1st Prize: <b>On/Off integrated communication</b></p>
        </div>
      </div>
    </div>
  </div>

<div class="section lista-winners fp-normal-scroll fp-auto-height">
  <?php get_template_part( 'template-parts/winners' ); ?>
</div>

<div class="section sponsors fp-normal-scroll fp-auto-height">
  <!-- Slider loghi -->
  <div class="content">
        <div class="text-center"><b>Powered by</b></div>

        <div class="row">
          <div class="column small-12">

              <?php $args = array(
                    'post_type' => 'sponsor',
                    'posts_per_page' => 7,
                    'cat' => 13
                  );

                  $sponsor = new WP_Query( $args );


                  if ( $sponsor->have_posts() ) :
                    while ( $sponsor->have_posts() ) : $sponsor->the_post();

                    $link = get_field('link');
                    $img = get_field('immagine');


                    ?>


                      <a href="<?php echo $link; ?>" target="_blank" class="sponsor-logo">
                        <img src="<?php echo $img['sizes']['sponsor-thumb']; ?>" />
                      </a>


                    <?php

                      endwhile;
                      endif;
                      wp_reset_postdata();

                      ?>
            </div>
        </div>

        <br/><br/>
        <div class="text-center"><b>In partnership with</b></div>

          <div class="row">
            <div class="column small-12">

              <?php $args = array(
                    'post_type' => 'sponsor',
                    'posts_per_page' => 12,
                    'cat' => 11,
                    'orderby' => 'modified'
                  );

                  $sponsor = new WP_Query( $args );

                  if ( $sponsor->have_posts() ) :
                    while ( $sponsor->have_posts() ) : $sponsor->the_post();

                    $link = get_field('link');
                    $img = get_field('immagine');

                    ?>


                      <a href="<?php echo $link; ?>" target="_blank" class="sponsor-logo">
                        <img src="<?php echo $img['sizes']['sponsor-thumb']; ?>" />
                      </a>


                    <?php
                      endwhile;
                      endif;
                      wp_reset_postdata();

                      ?>
          </div>
        </div>
        <br/><br/>
        <div class="text-center"><b>Sponsor</b></div>

        <div class="row">
          <div class="column small-12">

              <?php $args = array(
                    'post_type' => 'sponsor',
                    'posts_per_page' => 7,
                    'cat' => 12
                  );

                  $sponsor = new WP_Query( $args );


                  if ( $sponsor->have_posts() ) :
                    while ( $sponsor->have_posts() ) : $sponsor->the_post();

                    $link = get_field('link');
                    $img = get_field('immagine');

              ?>

                <a href="<?php echo $link; ?>" target="_blank">
                  <img src="<?php echo $img['sizes']['sponsor-thumb']; ?>" />
                </a>


              <?php

                endwhile;
                endif;
                wp_reset_postdata();

              ?>
            </div>
        </div>
        <br/><br/>
        <div class="text-center"><b>Partner tecnici</b></div>

          <div class="row">
            <div class="column small-12">
              <?php $args = array(
                    'post_type' => 'sponsor',
                    'posts_per_page' => 12,
                    'cat' => 10
                  );

                  $sponsor = new WP_Query( $args );



                  if ( $sponsor->have_posts() ) :
                    while ( $sponsor->have_posts() ) : $sponsor->the_post();

                    $link = get_field('link');
                    $img = get_field('immagine');



                    ?>


                      <a href="<?php echo $link; ?>" target="_blank" class="sponsor-logo">
                        <img src="<?php echo $img['sizes']['sponsor-thumb']; ?>" />
                      </a>


                    <?php

                      endwhile;
                      endif;
                      wp_reset_postdata();

                      ?>
          </div>
        </div>

  </div>



</div>
<?php get_footer();
