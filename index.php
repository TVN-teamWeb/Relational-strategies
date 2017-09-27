<?php get_header(); ?>

<script type="javascript">
  window.scrollTo(0,0);
</script>

<div id="fullpage">
  <!-- Sezione autoscroll ON -->
  <div class="section hp" id="section-1">
    <div class="claim bounce-in long-delay" id="claim" data-toggler data-animate="scale-in-up">
      <a href="http://entry.relationalstrategiesgrandprix.com/" target="_blank">
        <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/claim.png" />
      </a>
    </div>


  </div>
  <!-- Sezione autoscroll OFF -->
  <div class="section about fp-normal-scroll" id="section-2">
    <div class="sfondo-about">
      <div class="content">
        <h1 class="text"> 
          <div class="curtain-txt-box">
            <div class="curtain-txt txt-bold">Il Premio dedicato</div>
          </div>
          <div class="curtain-txt-box">
            <div class="curtain-txt txt-bold">alle tecniche più innovative</div>
          </div>
          <div class="curtain-txt-box">
            <div class="curtain-txt txt-bold">ed efficaci del</div>
          </div>
          <div class="curtain-txt-box">
            <div class="curtain-txt txt-bold">relational marketing</div>
          </div>
        </h1>

  <p>il Premio dedicato alle tecniche più innovative ed efficaci del relational marketing: 
  <b>digital, DM, PR, digital, events, branded content e promo.</b>
  Un Evento sempre in movimento, capace di rinnovarsi di volta in volta per seguire
  l’evoluzione del mercato ed essere sempre attuale</p>
  <!-- button type="button" name="button" class="alert">edizione 2016</button -->
        <div class="center">
          <a class="prova" href="il-premio">Scopri di più</a>
        </div>
      </div>



    </div>

    <div class="griglia row expanded ">
      <div class="box-about">
        <div class="square">
          <img class="white" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/white.jpg">
          <figure>
            <img class="foto" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/giuria01.jpg">
          </figure>
          <p class="title">La giuria</p>
        </div>
      </div>
      <div class="box-about">
        <div class="square">
          <img class="white" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/white.jpg">
          <figure>
            <div class="curtain"></div>
            <img class="foto" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/giuria01.jpg">
          </figure>
          <p class="title">La giuria</p>
        </div>
      </div>
      <div class="box-about">
        <div class="square">
          <img class="white" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/white.jpg">
          <figure>
            <img class="foto" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/giuria01.jpg">
          </figure>
          <p class="title">Il Galà</p>
        </div>
      </div>
      <div class="box-about">
        <div class="square">
          <img class="white" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/white.jpg">
          <figure>
            <img class="foto" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/giuria01.jpg">
          </figure>
          <p class="title">Tutti i lavori 2017</p>
        </div>
      </div>
    </div>

  </div>

  <div class="section giuria fp-normal-scroll">
    <div class="sfondo-giuria">
      <div class="content">
        <h1> la giuria</h1>
        <p>Un riconoscimento particolare va ai membri del comitato di selezione
per lo scrupolo e l’attenzione posti nell’individuare i vincitori di categoria</p>
      </div>
    </div>

    <div class="giudici expanded row">

      <?php get_template_part( 'template-parts/giuria' ); ?>

    </div>
    <button type="button" name="button">Tutti i giurati</button>
  </div>


  <div class="section winner">
    <div class="content">
      <h1>WINNER</h1>
      <div class="box-winner">
        <img class="white" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/bckwinner.jpg">
        <!--img class="foto" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/winner.jpg"-->
        <img class="foto" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/WINNER.jpg">
        <div class="info">
          <h3>KING OF UMARELLS</h3>
          <p>Client: <b>Burgher King</b> | Agency: <b>The Big Now</b> | 1st Prize: <b>On/Off integrated communication</b></p>
        </div>
      </div>
    </div>
  </div>

<div class="section lista-winners fp-normal-scroll fp-auto-height">
  <div class="winners row expanded">

    <?php $args = array(
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

          if( ($img['url'] != "") && (trim($titolo) != "Vincitore") ) :

          ?>

    <div class="box-winners small-12 medium-6 large-4 column">
      <figure class="img-box">
        <img class="winner curtain-img" src="<?php echo $img['url']; ?>">
      </figure>
      <div class="appear-box">
      <h5 class="appear-txt"><?php echo $titolo; ?></h5><br/>

      <?php   if( (trim($cliente) != "") ) : ?>
        <p class="appear-txt"><b>Client</b>: <?php echo $cliente; ?></p><br/>
      <?php endif; ?>
      <?php   if( (trim($agenzia) != "") ) : ?>
        <p class="appear-txt"><b>Agency</b>: <?php echo $agenzia; ?></p><br/>
      <?php endif; ?>
      <?php   if( (trim($cdp) != "") ) : ?>
        <p class="appear-txt"><b>CdP</b>: <?php echo $cdp; ?></p><br/>
      <?php endif; ?>

      <p class="appear-txt"><b>1st Prize</b>: <?php echo $premio; ?></p><br/>

      </div>

    </div>

    <?php
      endif;
      endwhile;
      endif;
      wp_reset_postdata();

      ?>


  </div>
</div>

<div class="section sponsors fp-normal-scroll fp-auto-height">
  <!-- Slider loghi -->
  <div class="content">
    <div class="responsive slider">


          <?php $args = array(
                'post_type' => 'sponsor',
                'posts_per_page' => 20
              );

              $sponsor = new WP_Query( $args );

              $i=0;

              if ( $sponsor->have_posts() ) :
                while ( $sponsor->have_posts() ) : $sponsor->the_post();

                $link = get_field('link');
                $img = get_field('immagine');

                ?>

                <div>
                  <a href="<?php echo $link; ?>" target="_blank">
                    <img src="<?php echo $img['url']; ?>" />
                  </a>
                </div>

                <?php

                  endwhile;
                  endif;
                  wp_reset_postdata();

                  ?>

    </div>
  </div>

    </div>

</div>

</div>
<?php get_footer();
