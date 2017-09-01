/*$(window).load(function() {
	$(".loader").fadeOut("fast");
})*/

jQuery(document).foundation();

$('[data-toggle-menu]').on("click", function(){
  $("#overlay-nav-menu").toggleClass("is-open");
});

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
$(window).scroll(function(){
//Controlli da console, a che altezza si trova lo scroll
  var WH = $(window.top).height(); // Altezza finestra
  var ST = $(this).scrollTop();
  var POS = WH + ST;

  //Fascia ABOUT 2°
    var PREMIO = $('.about').offset().top - 1;
    if(ST > PREMIO ){
      $('.content p').eq(0).addClass('is-showing'); //Testo
      $('.content h1').eq(0).addClass('is-showing'); // Titolo
      $('.content button').addClass('is-showing'); //Bottone
      $('.center .prova').addClass('is-active'); //Bottone
    }

    var BOX_VIDEO = $('.box-about').offset().top + 30;
     if( POS > BOX_VIDEO )  {
       $('.box-about').each(function(i){
         setTimeout(function(){
           $('.box-about').eq(i).addClass('is-showing'); // Box video
         },150 * (i+1));
       });
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
      console.log("vincitori");
      $('.white').addClass('is-showing'); // immagine vincitore
      $('.foto').addClass('is-showing');
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
    }else{
      $('.mouse').removeClass('is-hide');
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
  $('#fullpage').fullpage({
    anchors: ['hp','il-premio', 'la-giuria', 'winner', 'winners'],
    sectionsColor: ['#fff','#fff', '#fff', '#282828', '#282828'],
    hybrid:true,
    fitToSection: false
  });
})
