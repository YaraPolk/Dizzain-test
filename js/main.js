jQuery(window).ready(function() {
    jQuery('div.post-name li:first-child').addClass('active-color');
    jQuery('div.post-content div:first-child ul').addClass('active');
    jQuery('div.post-content div:first-child span').addClass('active-color');
    jQuery('div.post-name li').on('click', function(){
        jQuery('div.post-content div ul').removeClass('active');
        jQuery('div.post-name li').removeClass('active-color');
        jQuery(this).addClass('active-color');
        postName = jQuery(this).text();
        jQuery('div.post-content div').each(function(){
            if (jQuery(this).text().includes(postName)) {
                jQuery(this).find('ul').addClass('active');
            };
        });
    });
    if (jQuery(window).width() <= '650'){
    jQuery('div.post-content div span').on('click', function(){
       jQuery('div.post-content div ul').removeClass('active');
        jQuery('div.post-content span').removeClass('active-color');
        jQuery(this).addClass('active-color');
        jQuery(this).parents('div.post-content div').find('ul').addClass('active');
        jQuery(this + '::after').attr('content', '^');
    });
    };
});
