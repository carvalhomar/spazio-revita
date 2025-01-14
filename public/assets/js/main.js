/*
-------------------------------------------------------------------------------------
* Template Name    : Mediyot - Healthcare, Medical & Hospital Html5 Landing Page    *
* Author           : Vrishank Softtech                                  	  		*
* Version          : 1.0.0                                              	  		*
* File Description : Main JS file of the template	                      	  		*
*------------------------------------------------------------------------------------
*/
$(document).ready(function () {
    "use strict";
    if(window.innerWidth < 992){
        $('#title').addClass('color-text2');
        // $(iframe).css('padding-top', '20px');
    }else{
        /*----LOGO SLIDER-----*/
        $(window).on('scroll', function(){

            if($(window).scrollTop() > 20 ) {
                $('#title').addClass('color-text2');

            } else {
                $('#title').removeClass('color-text2');
                // console.log($(window).scrollTop());
            }
        });
    }


    /*----MAIN SLIDER-----*/
    (function ($) {
        var MainSilderCarousel = $('.home-slider');
        if (MainSilderCarousel.length > 0) {
            MainSilderCarousel.owlCarousel({
                merge: true,
                loop: true,
                nav: false,
                center: false,
                dots: true,
                animateIn: 'fadeIn',
                autoplay: true,
                autoplayTimeout: 5000,
                margin: 0,
                items: 1,
            });
        }
    })(jQuery);

    /*----PREMISES SLIDER-----*/
    (function ($) {
        var showcaseCarousel = $('.premises-slider');
        if (showcaseCarousel.length > 0) {
            showcaseCarousel.owlCarousel({
                center: true,
                items: 5,
                dots: true,
                nav: false,
                loop: true,
                margin: 0,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        }
    })(jQuery);

    /*----REVIEW SLIDER-----*/
    (function ($) {
        var testimonialCarousel = $('.review-slider');
        if (testimonialCarousel.length > 0) {
            testimonialCarousel.owlCarousel({
                margin: 16,
                loop: true,
                nav: false,
                center: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                items: 3,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        dots: true
                    },
                    600: {
                        items: 2,
                        nav: false,
                        dots: true
                    },
                    1000: {
                        items: 2,
                        nav: false,
                        dots: true
                    }
                }
            });
        }
    })(jQuery);

    /*----ACCORDIAN JS-----*/
    (function ($) {
        $(".question-box").click(function () {
            if ($(this).hasClass('active')) {
                $('.question-box').removeClass('active');
                $(this).removeClass('active')
            } else {
                $('.question-box').removeClass('active');
                $(this).addClass('active')
            }
        });
    })(jQuery);

    /*---- MOBILE FOOTER TOGGLE -----*/
    (function ($) {
        var contentwidth = jQuery(window).width();
        if ((contentwidth) < '575') {
            jQuery('.footer-title').append('<i class="icofont-circled-down"></i>');
            jQuery('.footer-title').click(function () {
                jQuery('.footer-title').removeClass('active');
                jQuery('.footer-menu').slideUp('normal');
                if (jQuery(this).next().is(':hidden') == true) {
                    jQuery(this).addClass('active');
                    jQuery(this).next().slideDown('normal');
                }
            });
            jQuery('.footer-content').hide();
        } else {
            jQuery('.footer-content').show();
        }
    })(jQuery);

});

/*----WOW ANIMATION-----*/
(function ($) {
    var length = $('.wow').length;
    if (length >= 1) {
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
        });
        wow.init();
    }
})(jQuery);

/*----ONSCROLL JS-----*/
$(window).on("scroll", function () {
    "use strict";
    var sections = $('section'),
        nav = $('.navbar-nav'),
        nav_height = nav.outerHeight() + 25;
    $(window).scrollTop() >= 20 ? $("nav").addClass("sticky-header") : $(".sticky").removeClass("sticky-header");

    /*----ON SCROLL CHANGE ACTIVE MENU-----*/
    var cur_pos = $(this).scrollTop();
    var contentwidth = jQuery(window).width();
    if ((contentwidth) > '991') {
        sections.each(function () {
            var top = $(this).offset().top - nav_height,
                bottom = top + $(this).outerHeight();
            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('li').removeClass('active');
                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').parent().addClass('active');
            }
        });
    }
}),
    $(".nav-item a").on("click", function (o) {
        var t = $(this);
        $('.nav-item').removeClass('active');
        $(t).parent().addClass('active');
        $("html, body").stop().animate({
            scrollTop: $(t.attr("href")).offset().top - 50
        }, 1500, "easeInOutExpo"), o.preventDefault()
    }),
    $(document).on("click", ".navbar-collapse.show", function (o) {
        $(o.target).is("a") && $(this).collapse("hide")
    }),
    $(window).on("scroll", function () {
        $(this).scrollTop() > 100 ? $(".back_top").fadeIn() : $(".back_top").fadeOut()
    }),
    $(".back_top").on("click", function () {
        return $("html, body").animate({
            scrollTop: 0
        }, 1e3), !1
    });

/*----OTHER LINK JS-----*/
(function ($) {
    "use strict";
    $(".home-slider .item a, .contact_btn a").on("click", function (event) {
        var t = $(this);
        $("html, body").stop().animate({
            scrollTop: $(t.attr("href")).offset().top - 50
        }, 2000, "easeInOutExpo"), event.preventDefault()
    })
})(jQuery);

$.ajax({
    url:'/treatments/load',
    method:'GET',
    dataType:'json',
    success:function(response){

        var row = '';
        var count = 0;

        for(var i = 0; response.length > i; i++){
            if( response[i].visible === 1){
                
                if(count == 0){
                    row+='<div class="row">';
                }
                
                row+='<div class="col-md-3">';
                row+='<div class="ftr-icon-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">';
                row+='<div class="icon"><i class="icofont-stretcher"></i></div>';
                row+='<h4 class="title">'+response[i].title+ response[i].visible+'</h4>';
                row+='<p class="description"><a href="/treatment/article/'+response[i].id+'/'+response[i].title.toLowerCase().replace(/\s+|[,\/]/g, "-")+'" target="_self">Clique aqui para saber</a></p>';
                row+='</div>';
                row+='</div>';
    
                count+=1;
    
                if(count == 4){
                    row+='</div>';
                    count = 0;
                }
            }
        }
        $('.features .container').append(row);
    }
})

/**
 * Load blog Titles
 */
$.ajax({
    url:'/blog/load',
    method: 'GET',
    dataType: 'json',
    success: function(response){
        // console.log(response);

        var row = '';
        var count = 0;
        var count2 = 0;

        for(var i = 0; response.category.length > i; i++){
            // console.log(i);
            if(count == 0){
                row+='<div class="row">';
            }
            row+='<div class="col-md-6">';
            row +='<div id="accordion" class="wow fadeInUp">';
                row +='<div class="card2">';
                    row +='<div class="card-header" id="headingBlog'+i+'" style="background-color: #acd8bd!important;">';
                        row +='<h5 className="mb-0">';
                            row +='<button class="btn btn-link" data-toggle="collapse" data-target="#collapseBlog'+i+'" aria-expanded="true" aria-controls="collapseOne" style="color:#212529;">';
                            row += response.category[i].name;
                            row += '</button>';
                        row +='</h5>';
                    row +='</div>';

                    row +='<div id="collapseBlog'+i+'" class="collapse" aria-labelledby="headingBlog'+i+'" data-parent="#accordion">';
                        row += '<div class="card-body">';
                            row += '<ul class="blog" style="list-style-image: url(http://localhost:8000/assets/images/logo-small.png);">';

                                for (var a = 0; response.title.length > a; a++){
                                    if(response.category[i].id == response.title[a].category_id){
                                        row += '<li id="li"><a href="/blog/article/'+response.title[a].id+'/'+response.title[a].title.toLowerCase().replace(/\s+|[,\/]/g, "-")+'">'+response.title[a].title+'</a></li>';
                                    }
                                }

                            row += '</ul>';
                        row += '</div>';
                    row += '</div>';
                row += '</div>';
            row += '</div>';
            row += '</div>';

            count++;

            if(count == 2){
                row+='</div>';
                count = 0;
            }
        }

        $('.accordionDynamic').append(row);
    }
});

$.ajax({
    url:'/health/load',
    method: 'GET',
    dataType: 'json',
    success:function(response){

        var row = '';
        var count = 0;

        //row='<div class="row">';
        for(var i = 0; response.length > i; i++){

            row+='<div class="question-box shadow-sm">';
                row+='<div class="faq-header p-0" style="visibility: visible; animation-name: fadeInUp;">';
                    row+='<h4 class="mb-0">';
                        row+='<button class="btn-link" data-toggle="collapse" data-target="#collapse'+i+'">';
                            row+='<span>'+response[i].title.toUpperCase()+'</span>';
                            row+='<span><i class="icofont-rounded-down caret-icon"></i></span>';
                        row+='</button>';
                    row+='</h4>';
                row+='</div>';
            row+='</div>';
            row+='<div id="collapse'+i+'" class="collapse" aria-labelledby="heading'+i+'" data-parent="#accordion">';
                row+='<div class="faq-body">';
                    row+='<p>'+response[i].content+'</p>';
                row+='</div>';
            row+='</div>';

        }
        //row+='</div>';
        $('#accordionDynamic').append(row);
    }
})

// Initate the hero bottom waves
if ($('#wave1').length && $('#wave2').length) {
    wavify(document.querySelector('#wave1'), {
        height: 40,
        bones: 4,
        amplitude: 40,
        color: '#fff',
        speed: .15
    });

    wavify(document.querySelector('#wave2'), {
        height: 20,
        bones: 3,
        amplitude: 40,
        color: 'rgba(255, 255, 255, .1)',
        speed: .25
    });
}
