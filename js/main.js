$(window).ready(function() {
    $('div.post-name li:first-child').addClass('active-color');
    $('div.post-content div:first-child ul').addClass('active');
    $('div.post-content div:first-child span').addClass('active-color');
    $('div.post-name li').on('click', function(){
        $('div.post-content div ul').removeClass('active');
        $('div.post-name li').removeClass('active-color');
        $(this).addClass('active-color');
        postName = $(this).text();
        $('div.post-content div').each(function(){
            if ($(this).text().includes(postName)) {
                $(this).find('ul').addClass('active');
            };
        });
    });
    if ($(window).width() <= '650'){
    $('div.post-content div span').on('click', function(){
        $('div.post-content div ul').removeClass('active');
        $('div.post-content span').removeClass('active-color');
        $(this).addClass('active-color');
        $(this).parents('div.post-content div').find('ul').addClass('active');
        $(this + '::after').attr('content', '^');
    });
    };
});