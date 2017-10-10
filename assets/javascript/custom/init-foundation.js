
jQuery(document).foundation();


$('[data-toggle-menu]').on("click", function(){
  $("#overlay-nav-menu").toggleClass("is-open");
});

function openNav() {
  $("#myNav").addClass("opened");
}

function closeNav() {
  $("#myNav").removeClass("opened");
}

$(window).scroll(function(){
//Controlli da console, a che altezza si trova lo scroll
  var WH = $(window.top).height(); // Altezza finestra
  var ST = $(this).scrollTop();
  var POS = WH + ST;

  //Fascia ABOUT 2°

    var PREMIO = $('.about').offset().top - 40  ;
    //console.log("ST: "+ST+" PREMIO: "+PREMIO);
    if(ST > PREMIO ){
      $('.content p').eq(0).addClass('is-showing'); //Testo
      $('.content h1').eq(0).addClass('is-showing'); // Titolo
      $('.content button').addClass('is-showing'); //Bottone
      $('.center .prova').addClass('is-active'); //Bottone
      $('#logo').css('display', 'none');
      $('#sponsor').css('display', 'none');
    } else {
      $('#logo').css('display', 'block');
      $('#sponsor').css('display', 'block');
    }

    var BOX_VIDEO = $('.box-about').eq(0).offset().top + 120;
     if( POS > BOX_VIDEO )  {

       $('.box-about').addClass('is-showing');
     }

     // GIURIA
     var GIURIA = $('.giuria').offset().top + parseInt($('.sfondo-giuria').css("height"));
     if(POS > GIURIA ){
       $('.content h1').eq(1).addClass('is-showing'); // Titolo
       $('.content p').eq(1).addClass('is-showing'); //Testo
     }

     // GIUDICI
     var BOX_GIUDICI = $('.box-giuria').offset().top + parseInt($('.box-giuria').css("height"));
     if( POS > BOX_GIUDICI )  {
       $('.box-giuria').each(function(i){
         setTimeout(function(){
           $('.box-giuria').eq(i).addClass('is-showing'); // Box video
         },150 * (i+1));
       });
     }

     //WINNER
    var WINNER = $('.winner').offset().top + parseInt($('.box-winner').css("height"));
    if( POS > WINNER )  {

      $('.foto').parent().addClass('is-showing');
      $('.info h3').addClass('is-showing');
      $('.info p').addClass('is-showing');
    }


    //WINNERS
    var WINNERS = $('.box-winners').offset().top + parseInt($('.box-winners').css("height"));
    if( POS > WINNERS )  {
      $('.box-winners').each(function(i){
        setTimeout(function(){
          $('.box-winners').eq(i).addClass('is-showing'); // Box video
        },150 * (i+1));
      });
    }

    //Nascondi mouse
    if( ST > 40 )  {
      $('.mouse').addClass('is-hide');
      $('#sponsor').addClass('is-hide');
    }else{
      $('.mouse').removeClass('is-hide');
      $('#sponsor').removeClass('is-hide');
    }

    //Nascondi Logo dopo seconda slide
    var LOGO = $('.sfondo-about').offset().top + parseInt($('.sfondo-about').css("height"));
    if( POS > LOGO )  {
      $('.logo').addClass('is-hide');

    }else{

      $('.logo').removeClass('is-hide');
    }



  });  // Fine SCroll function



//Full Page jquery effetto slide section
$(document).ready(function() {
  $('#claim').foundation('toggle');
  $('#fullpage').fullpage({
    anchors: ['hp','il-premio', 'la-giuria', 'winner', 'winners', 'sponsors'],
    sectionsColor: ['#f7f7f7','#f7f7f7', '#f7f7f7', '#282828', '#282828'],
    hybrid:true,
    fitToSection: false,
    bigSectionsDestination:'top',
    responsiveWidth: 640,
    responsiveHeight: 500
  });
});

/*$(".img-box img ").hover( function() {
  $(this).addClass("zoom");
  $(this).removeClass("curtain-img");
  $(this).removeClass("normal-view");
});

$(".img-box img ").mouseout( function() {
  $(this).removeClass("zoom");
  $(this).addClass("normal-view");
});*/

function popupVideo(title,src) {

    $("#videoModalTitle").html(title);
    $("#videoModalFrame").attr("src", src);

    //var elem = new Foundation.Reveal("");
    $("#videoModal").foundation("open");
}

function stopVideo() {
  $("#videoModalFrame").eq(0).trigger('pause');
}
