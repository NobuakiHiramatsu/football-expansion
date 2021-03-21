$('.navbar-nav .nav-item .nav-link').each(function(){
    let $href = $(this).attr('href');
    //console.log($href);
    if(location.href.match($href)) {
    $(this).addClass('active');
    } else {
    $(this).removeClass('active');
    }
})
