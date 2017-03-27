/*!
jquery for prime
*/
$(document).ready(function(){
    /**
     * СЕКЦИЯ С КОТАМИ
     */
    // при клике на кота и на левое меню
    $('#services .item, #left-menu .item').on('click',function(){
        $(this).parents('li').addClass('active');
        var target = $(this).attr('data-target');
        if (window.matchMedia("(max-width: 768px)").matches) {
            // TODO: поправить
            location = $('#' + target).find('.btn-warning a').attr('href');
            return true;
        }
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

    /**
     * ОСНОВНЫЕ СКРИПТЫ
     */
    $('body').scrollspy({target: "#left-menu", offset: 180});
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 180)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
    $('body').on('click', '.order-form-link', function() {
        $('#order-form, #background-wrapper').fadeIn('slow');
        var source = $(this).attr('data-source');
        alert(source);
    });
    /**
     * ТАБЫ И ПАГИНАЦИЯ
     */
    $('body').on('click', '.brand-chooser a', function(){
        var brandId = $(this).attr('data-name');
        var me = this;
        $.ajax({
            url: '/catalog/ajaxbrand',
            data: {brandId: brandId},
            success: function(data){
                $('#brand-tab-content').html(data);
                $('.brand-chooser li').removeClass('active');
                $(me).parents('li').addClass('active');
                specialBind();
            },
            error: function(data) {
                console.log(data);
                alert('Произошла ошибка');
            }
        });
        return false;
    });
    // Выбор коллекции на странице каталога камня
    $('body').on('click', '.collection-chooser a', function(){
        var collectionId = $(this).attr('data-id');
        var me = this;
        $.ajax({
            url: '/catalog/ajaxcollection/'+collectionId,
            success: function(data){
                $('#collection-content').html(data);
                $('.collection-chooser li').removeClass('active');
                $(me).parents('li').addClass('active');
                specialBind();
            },
            error: function(data) {
                console.log(data);
                alert('Произошла ошибка');
            }
        });
        return false;
    });
    $('body').on('click', '#ajax-foto-pagination a', function(){
        $.ajax({
            url: $(this).attr('href'),
            success: function(data){
                $('.ajax-foto-wrapper').html(data);
                specialBind();
            }
        });
        return false;
    });
    $('body').on('click', '#ajax-foto-pagination-bacth a', function(){
        $.ajax({
            url: $(this).attr('href'),
            success: function(data){
                $('.ajax-foto-wrapper-bacth').html(data);
                specialBind();
            }
        });
        return false;
    });

    function specialBind() {
        $("body #accordion").accordion();
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
    specialBind();
});