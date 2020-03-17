jQuery(document).ready(function($)  {

    $('.nav-tabs').on('click', 'li:not(.active)', function() {
        var tabcontainer = $(this).closest('.tabs');
        if(tabcontainer.length == 0) {
            var tabcontainer = $(this).closest('.elementor-widget-wrap');
        }
        $(this).addClass('active').siblings().removeClass('active');
        tabcontainer.find('.tabs-item').hide().removeClass('stuckMoveDownOpacity').eq($(this).index()).show().addClass('stuckMoveDownOpacity');
        tabcontainer.find('img.lazyimages').each(function(){
            var source = $(this).attr("data-src");
            $(this).attr("src", source).css({'opacity': '1'});
        });
    });

});