jQuery(document).ready(function() {
    // Exibe ou oculta o botão
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 300) {
            jQuery('.gototop').fadeIn(300);
        } else {
            jQuery('.gototop').fadeOut(300);
        }
    });

    // Faz animação para subir
    jQuery('.gototop').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 300);
    })
});
