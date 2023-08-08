jQuery(document).ready(function($){

    /*-----------------------------------------------------------------------------------*/
    /*  COUNTER UP
    /*-----------------------------------------------------------------------------------*/
    jQuery('.school-value').counterUp({
        delay: 50,
        time: 1000
    });

    jQuery('.partner-slider').slick({
        rtl: school_of_education_object.rtl ? true : false,
         infinite: true,
         slidesToShow: 6,
         slidesToScroll: 1,
         swipeToSlide: school_of_education_object.rtl ? false : true,
         rows: 0,
         arrows: false,
         dots: false,
         autoplay: true,
         loop:true,
         responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 3
             }
         }, {
             breakpoint: 800,
             settings: {
                 slidesToShow: 3
             }
         }, {
             breakpoint: 500,
             settings: {
                 slidesToShow: 1
             }
         }]
     });

    $('.review-slider').slick({
        rtl: school_of_education_object.rtl ? true : false,
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         swipeToSlide: school_of_education_object.rtl ? false : true,
         arrows: false,
         dots: false,
         rows:0,
         autoplay: true,
         speed: 2000,
         loop:true,
         responsive: [{
             breakpoint: 800,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 700,
             settings: {
                 slidesToShow: 1
             }
         }]
    });

    $('.testimonial-slider').slick({
        rtl: school_of_education_object.rtl ? true : false,
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         swipeToSlide: school_of_education_object.rtl ? false : true,
         arrows: false,
         dots: false,
         rows:0,
         autoplay: true,
         speed: 2000,
         loop:true,
         responsive: [{
             breakpoint: 800,
             settings: {
                 slidesToShow: 2
             }
         }, {
             breakpoint: 700,
             settings: {
                 slidesToShow: 1
             }
         }]
    });

});