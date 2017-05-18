jQuery(document).ready(function(){
    jQuery('.go_to').click( function(){
        var scroll_el = $(this).attr('href');
        alert(scroll_el);
        if ($(scroll_el).length != 0) {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
        }
        return false;
    });
    function go_back() {
        $('html, body').animate({ scrollTop: $(go_to).offset().top }, 500);
    }
});
