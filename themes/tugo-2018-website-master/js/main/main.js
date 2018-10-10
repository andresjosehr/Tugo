$( document ).ready(function() {
    $('.how-to__slider-owner').slick({
        slidesToShow: 1,
        speed: 1000,
        arrows: true,
        infinite: true,
        nextArrow: '<a class="slick-custom-next"> <i class="fas fa-angle-right"></i> </a>',
        prevArrow: '<a class="slick-custom-prev"> <i class="fas fa-angle-left"></i> </a>'
    });
    $('.how-to__slider-canlove').slick({
        slidesToShow: 1,
        speed: 1000,
        arrows: true,
        infinite: true,
        nextArrow: '<a class="slick-custom-next"> <i class="fas fa-angle-right"></i> </a>',
        prevArrow: '<a class="slick-custom-prev"> <i class="fas fa-angle-left"></i> </a>'
    });

    $(".overlay-content__menu a").click( function() {
        closeNav();
    });

});

/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
  $("html").addClass("disabled-scroll");
  $("body").addClass("disabled-scroll");
  $("header").hide(0);
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    $("html").removeClass("disabled-scroll");
    $("body").removeClass("disabled-scroll");
    document.getElementById("myNav").style.width = "0%";
    $("header").show(0);
}


$( ".how-to__top__button" ).click(function() {
    
    $( ".how-to__top__button" ).each(function() {
        $(this).removeClass("how-to__top__button--active");
    });
    $(this).addClass("how-to__top__button--active");

    if($(this).data("app") == "app-owner") {
        $(".app-owner").show(0);
        $(".app-canlover").css("opacity", 0);
        $(".app-canlover").css("height", 0);
    }
    else if($(this).data("app") == "app-canlover") {
        $(".app-owner").hide(0);
        $(".app-canlover").css("opacity", 1);
        $(".app-canlover").css("height", "auto");
    }

    return false;
});


  
