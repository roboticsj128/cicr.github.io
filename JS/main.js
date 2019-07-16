$(window).on('load', function () {
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
});

$(function () {
    $("#team-members").owlCarousel({
        items: 2,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        dots: false,
       
    });
});
/*navigation*/
$(function () {

    showHideNav();
    $(window).scroll(function () {
        showHideNav();
    });

    function showHideNav() {
        if ($(window).scrollTop() > 50) {
            $("nav").addClass("white-nav-top");
            //alert($(window).scrollTop());
            $("#back-to-top").fadeIn();
        } else {
            $("nav").removeClass("white-nav-top");
            $("#back-to-top").fadeOut();
        }

    }
});

/*smooth*/
$(function () {
    $("a.smooth-scroll").click(function (event) {
        event.preventDefault();
        var section_id = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(section_id).offset().top - 64
        }, 1250, "easeInOutExpo");
    });
});
/*gmap*/

$(window).on('load', function () {
    //var
    var addressString = 'CICR- The Robotics Club of JIIT-128';
    var myLatlng = {lat: 28.519220, lng: 77.365548};
    //render map
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: myLatlng
    });
    //marker
    var marker =new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: "Click to See Address"
    });
    //info
    var infowindow= new google.maps.InfoWindow({
       content: addressString 
    });
    //on click
    marker.addListener('click', function() {
    infowindow.open(map, marker);
    });
});
















