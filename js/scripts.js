$( document ).ready(function() {
    let navCounter = 1;

    let nav = $(".number-iteration");

    $.each(nav, function(nav, item){
        $(item).prepend('<p class="nav-index">0'+ navCounter+'.</p>');
        navCounter ++;
    });
});