/* Back to top */
var timeOut;
function scrollToTop() {
     if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
          window.scrollBy(0,-50);
          timeOut=setTimeout('scrollToTop()',10);
     }
     else clearTimeout(timeOut);
}



/*! Mobile Menu Toggle */
$('.show-menu').click(function () {
     $(this).toggleClass('open');
});

$(".member-logo .open").click(function() {

     $('.rise').toggleClass('rise');
     $(this).parent().toggleClass('rise');
});

/*! Team Members Toggle */
$(".team-member .open").click(function() {
     //jQuery('.rise').toggleClass('rise');
     //$(this).parent().toggleClass('rise');

     //alert(1);
     //$('.rise').toggleClass('rise');
     //alert(2);
     $(this).parent().toggleClass('rise');
     //alert(3);
});



/* Drop Down Menu */
$('.switch').on('click', function(e) {
     $('.search-mobile').toggleClass("selected");
     $('.search-mobile-form').toggleClass("selected");
     e.preventDefault();
});




/*! http://tinynav.viljamis.com v1.2 by @viljamis */
(function(a,k,g){a.fn.tinyNav=function(l){var c=a.extend({active:"selected",header:"",indent:"- ",label:""},l);return this.each(function(){g++;var h=a(this),b="tinynav"+g,f=".l_"+b,e=a("<select/>").attr("id",b).addClass("tinynav "+b);if(h.is("ul,ol")){""!==c.header&&e.append(a("<option/>").text(c.header));var d="";h.addClass("l_"+b).find("a").each(function(){d+='<option value="'+a(this).attr("href")+'">';var b;for(b=0;b<a(this).parents("ul, ol").length-1;b++)d+=c.indent;d+=a(this).text()+"</option>"});
e.append(d);c.header||e.find(":eq("+a(f+" li").index(a(f+" li."+c.active))+")").attr("selected",!0);e.change(function(){k.location.href=a(this).val()});a(f).after(e);c.label&&e.before(a("<label/>").attr("for",b).addClass("tinynav_label "+b+"_label").append(c.label))}})}})(jQuery,this,0);

$(function () {
     $("#subnav").tinyNav({
       active: 'current-menu-item',
       header: '- Select page -'
     });
});




// ScrollTo - Scrolling Links
$(function() {
     $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
               var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                 $('html, body').animate({
                      scrollTop: target.offset().top
                 }, 1000);
                 return false;
            }
       }
  });
});






$(window).load(function(){
     $('.flexslider').flexslider({
     animation: "slide",
          directionNav: false,
          start: function(slider){
               $('body').removeClass('loading');
          }
     });
});


function DoOpenSlide(SlideID, RandomString)
{
//alert("SlideID: " + SlideID + "\r\nRandomString: " + RandomString);


     $("." + SlideID + RandomString).toggleClass("open");

}

/* Toggle Overlays */
$('.openOne').click( function() {
     $(".one").toggleClass("open");
});

$('.openTwo').click( function() {
     $(".two").toggleClass("open");
});

$('.openThree').click( function() {
     $(".three").toggleClass("open");
});

$('.openFour').click( function() {
     $(".four").toggleClass("open");
});

$('.openFive').click( function() {
    $(".five").toggleClass("open");
});

$('.openSix').click( function() {
    $(".six").toggleClass("open");
});

$('.openSeven').click( function() {
    $(".seven").toggleClass("open");
});

$('.openEight').click( function() {
    $(".eight").toggleClass("open");
});



/* Contact page tabs */
$(document).ready(function(){
    $("ul#tabs li").click(function(e){
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum+1;
            $("ul#tabs li.active").removeClass("active");
            $(this).addClass("active");
            $("ul#tab li.active").removeClass("active");
            $("ul#tab li:nth-child("+nthChild+")").addClass("active");
        }
    });
});
