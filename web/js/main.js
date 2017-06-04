$(document).ready( function() {
    
    /* WOW.js init */
    new WOW().init();

    /* Side navigation toggle */
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
        
    // Tooltips Initialization
    $(function() {
        
        $('[data-toggle="tooltip"]').tooltip()
        $('#toggle').tooltip('show')
    });
    

});
        
    