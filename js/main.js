jQuery(document).ready(function( $ ) {

  // Smooth scroll for the menu and links with .scrollto classes
  $('.smothscroll').on('click', function(e) {
    e.preventDefault();
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {

        $('html, body').animate({
          scrollTop: target.offset().top - 62
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  $('.carousel').carousel({
    interval: 3500
  });
  
  $(".levelcanvas").each(function(e) {
      var doughnutData = [{
        value: parseInt($(this).attr('level')),
        color: "#1abc9c"
      },
      {
        value: 100-parseInt($(this).attr('level')),
        color: "#ecf0f1"
      }
    ];
    var myDoughnut = new Chart($(this)[0].getContext("2d")).Doughnut(doughnutData);
  });
})