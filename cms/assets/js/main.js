jQuery(window).load(function() {

   "use strict";

   // Page Preloader
   jQuery('#preloader').delay(350).fadeOut(function(){
      jQuery('body').delay(350).css({'overflow':'visible'});
   });
});
$(document).ready(function() {
    $('.datatable').DataTable();
    
    /* ======= Carousels ======= */
    /*$('#news-carousel').carousel({interval: false});
    $('#videos-carousel').carousel({interval: false});
    $('#testimonials-carousel').carousel({interval: 6000, pause: "hover"});
    $('#awards-carousel').carousel({interval: false});
    */   
    $('[data-hover="dropdown"]').dropdownHover();
    $(".form-control").focus(function () {
        $(this).closest(".form-group").addClass("focused");
    }).blur(function () {
        $(this).closest(".form-group").removeClass("focused");
    });


});