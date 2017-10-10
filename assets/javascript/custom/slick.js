$(document).on('ready', function() {
  $('.responsive').slick({
      dots: false,
      arrows:false,
      infinite: false,
      speed: 800,
      autoplay:true,
      autoplaySpeed:2000,
      slidesToShow: 4,
      slidesToScroll: 0,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 1500,
          settings: {
            arrows:false,
            slidesToShow: 4,
            slidesToScroll: 0,
            infinite: false,
            autoplay:true,
            autoplaySpeed:2000
          }
        },
        {
          breakpoint: 1200,
          settings: {
            arrows:false,
            slidesToShow: 4,
            slidesToScroll: 0,
            infinite: false,
            autoplay:true,
            autoplaySpeed:2000
          }
        },
        {
          breakpoint: 1024,
          settings: {
            arrows:false,
            slidesToShow: 4,
            slidesToScroll: 0,
            infinite: false,
            autoplay:true,
            autoplaySpeed:2000
          }
        },
        {
          breakpoint: 800,
          settings: {
            arrows:false,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay:true,
            autoplaySpeed:2000
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows:false,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay:true,
            autoplaySpeed:2000
          }
        }
      ]
    });
});
