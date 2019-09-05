$(function($) {
     var allAccordions = $('.accordion div.data');
     var allAccordionItems = $('.accordion .accordion-item');
     $('.accordion > .accordion-item').click(function() {
          if($(this).hasClass('open'))
          {
               $(this).removeClass('open');
               $(this).next().slideUp("fast");
          }
          else
          {
               allAccordions.slideUp("fast");
               allAccordionItems.removeClass('open');
               $(this).addClass('open');
               $(this).next().slideDown("fast");
               return false;
          }
     });
});