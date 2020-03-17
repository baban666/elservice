// some scripts
// jquery ready start
jQuery(document).ready(function($)  {
	// jQuery code


    /* ///////////////////////////////////////

    THESE FOLLOWING SCRIPTS ONLY FOR BASIC USAGE,
    For sliders, interactions and other

    */ ///////////////////////////////////////


	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    ///////////////// fixed menu on scroll for desctop
    if ($(window).width() > 768) {

        $(window).scroll(function(){
            if ($(this).scrollTop() > 125) {
                 $('.navbar-landing').addClass("fixed-top");
            }else{
                $('.navbar-landing').removeClass("fixed-top");
            }
        });
    } // end if

	//////////////////////// Fancybox. /plugins/fancybox/
	if($("[data-fancybox]").length>0) {  // check if element exists
		$("[data-fancybox]").fancybox();
	} // end if

	//////////////////////// Bootstrap tooltip
	if($('[data-toggle="tooltip"]').length>0) {  // check if element exists
		$('[data-toggle="tooltip"]').tooltip()
	} // end if

    /////////////////////// Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a.page-scroll').click(function() {
        $('.navbar-toggler:visible').click();
    });

    //////////////////////// Menu scroll to section for landing
    $('a.page-scroll').click(function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top - 50  }, 1000);
        event.preventDefault();
    });

    /////////////////  items slider. /plugins/slickslider/
    if ($('.slick-slider').length > 0) { // check if element exists
        $('.slick-slider').slick();
    } // end if

	/////////////////  items carousel. /plugins/owlcarousel/
    if ($('.owl-init').length > 0) { // check if element exists

       $(".owl-init").each(function(){

            var myOwl = $(this);
            var data_items = myOwl.data('items');
            var data_nav = myOwl.data('nav');
            var data_dots = myOwl.data('dots');
            var data_margin = myOwl.data('margin');
            var data_custom_nav = myOwl.data('custom-nav');
            var id_owl = myOwl.attr('id');

            myOwl.owlCarousel({
                loop: true,
                margin: data_margin,
                nav: eval(data_nav),
                dots: eval(data_dots),
                autoplay: false,
                items: data_items,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                 //items: 4,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: data_items
                    },
                    1000: {
                        items: data_items
                    }
                }
            });

            // for custom navigation. See example page: example-sliders.html
            $('.'+data_custom_nav+'.owl-custom-next').click(function(){
                $('#'+id_owl).trigger('next.owl.carousel');
            });

            $('.'+data_custom_nav+'.owl-custom-prev').click(function(){
                $('#'+id_owl).trigger('prev.owl.carousel');
            });

        }); // each end.//
    } // end if





});
// jquery end
jQuery('#cascade-slider').cascadeSlider({

});


jQuery(document).ready(function($) {
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).siblings(".card-header").find(".btn i").html("<i class=\"fas fa-chevron-up\"></i>");
        $(this).prev(".card-header").addClass("highlight");
    });
    $(".collapsed").each(function(){
        $(this).find("i.awesome").html("<i class=\"fas fa-chevron-down\"></i>");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).parent().find(".card-header .btn i").html("<i class=\"fas fa-chevron-up\"></i>");
    }).on('hide.bs.collapse', function(){
        $(this).parent().find(".card-header .btn i").html("<i class=\"fas fa-chevron-down\"></i>");
    });

    // Highlight open collapsed element
    $(".card-header .btn").click(function(){
        $(".card-header").not($(this).parents()).removeClass("highlight");
        $(this).parents(".card-header").toggleClass("highlight");
    });
});


jQuery(document).ready(function($)  {
        var open = false;
        $('.circle-bg').on('click', function() {
            if(open === false)
            {
                $(this).animate({
                    height: '+=10px',
                    width: '+=10px'
                }, 300);

                $('.outer-icons').animate({
                    opacity: 1
                }, 1000);

                $('.icon').fadeOut();
                $(this).html("<i class = 'icon fa fa-times' style='display: none'> </i>");
                $('.icon').fadeIn();

                open = true;
            }

            else {
                $(this).animate({
                    height: '-=10px',
                    width: '-=10px'
                }, 200);

                $('.outer-icons').animate({
                    opacity: 0
                }, 300);

                $('.icon').fadeOut();
                $(this).html("<i class = 'icon fas fa-share-alt' style='display: none'> </i>");
                $('.icon').fadeIn();

                open = false;
            }

        });

    });
