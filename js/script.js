/*!
jquery for prime
*/
$(document).ready(function(){
    // при клике на кота и на левое меню
    $('#services .item, #left-menu .item').on('click',function(){
        $(this).parents('li').addClass('active');
        var target = $(this).attr('data-target');
       $('#' + target  +', #background-wrapper' ).fadeIn('slow'); // показываем лайтбокс
        return false; 
    });
    // закрываем лайтбокс при клике на крестик
    $('.closeBox').on('click',function(){
        $(this).parents('.lightbox').fadeOut();
        $(' #left-menu .item').parents('li').removeClass('active');
        $(' #background-wrapper' ).fadeOut();
    });
    $('.nextPage').on('click',function(){
        $(this).parents('.pages-wrapper').animate({
            marginLeft: '-600px',
        });
    });
    $('.backPage').on('click',function(){
        $(this).parents('.pages-wrapper').animate({
            marginLeft: '0px',
        });
    });
    $(function(){
        $("#accordion").accordion();
    });
    $('body').scrollspy({target: "#left-menu", offset: 180});
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 180)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
    var activeMenuLink = $('#menu a[href="'+window.location.pathname.substr(1)+'"]');
    if (activeMenuLink) {
        activeMenuLink.parents('li').addClass('active');
    }
    bindAfterAjax();
});
function bindAfterAjax() {
  $('.order-form-link').on('click', function() {
  $('#order-form, #background-wrapper').fadeIn('slow');
  var source = $(this).attr('data-source');
  alert(source);
});

    $('#ajax-foto-pagination a').on('click', function(){
        $.ajax({
          url: $(this).attr('href'),
          success: function(data){
            $('.ajax-foto-wrapper').html(data);
            bindAfterAjax();
          }
        });
        return false;
    });
     $('#ajax-foto-pagination-bacth a').on('click', function(){
        $.ajax({
          url: $(this).attr('href'),
          success: function(data){
            $('.ajax-foto-wrapper-bacth').html(data);
            bindAfterAjax();
          }
        });
        return false;
    });
    $('a.fancyimage').fancybox(); 
    $('a.fancyimage-with-title').fancybox({
  helpers:  {
    title : {
      type : 'inside',
    }
  },
  beforeShow : function(){
    this.title =
      '<div class="fancy-title-link"><a href="'
      +$(this.element).data("target-url")
      +'">'
      +this.title
      +'</a><br>'
      +'<a href="#" class="order-form-link" data-source="'
      +this.title
      +'">Расчитать</a>'
      +'</div>';
      $('.order-form-link').on('click', function() {
  $('#order-form, #background-wrapper').fadeIn('slow');
  var source = $(this).attr('data-source');
  alert(source);
});
  }
});
}

            
