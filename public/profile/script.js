/*
--------------------------------------------------------  
  Version       :  1.0 

--------------------------------------------------------
*/

/*  ------------------
    Remove Preloader
    ------------------  */

$(window).load(function () {
    $('#preloader').delay(350).fadeOut('slow', function () {
        $('.profile-page, .resume-page, .contact-page').hide();
    });
});

$(document).ready(function () {

    'use strict';

    /*  ---------------------
         Homepage Responsive
        ---------------------  */
    

    function homepageResponsive() {

        // Homepage Main Portions Responsive

        var windowsWidth = $(window).width(),
            windowsHeight = $(window).height();

        if (windowsWidth > windowsHeight) {

            $('.introduction , .menu').css({
                width: '50%',
                height: '100%'
            });

        } else {

            $('.introduction , .menu').css({
                width: '100%',
                height: '50%'
            });

        }

        // Homepage Profile Image Responsive

        var introWidth = $('.introduction').width(),
            introHeight = $('.introduction').height(),
            bgImage = $('.introduction').find('img');

        if (introWidth > introHeight) {

            bgImage.css({
                width: '100%',
                height: 'auto'
            });

        } else {

            bgImage.css({
                width: 'auto',
                height: '100%'
            });

        }

    }

    $(window).on('load resize', homepageResponsive);

    /*  --------------
         Menu Settings
        --------------  */

    // Hide Menu

    $('.menu > div').on('click', function () {

        var introWidth = $('.introduction').width(),
            menuWidth = $('.menu').width();

        $('.introduction').animate({
            left: '-' + introWidth
        }, 1000, 'easeOutQuart');
        $('.menu').animate({
            left: menuWidth
        }, 1000, 'easeOutQuart', function () {
            $('.home-page').css({
                visibility: 'hidden'
            });
        });

    });
	

    // Show Reletive Page Onclick

    $('.menu div.profile-btn').on('click', function () {
        $('.profile-page').fadeIn(1200);
    });

    $('.menu div.resume-btn').on('click', function () {
        $('.resume-page').fadeIn(1200);
    });

    $('.menu div.portfolio-btn').on('click', function () {
        $('.portfolio-page').fadeIn(1200);
    });

    $('.menu div.contact-btn').on('click', function () {
        $('.contact-page').fadeIn(1200);
    });

    // Close Button, Hide Menu

    $('.close-btn').on('click', function () {
        $('.home-page').css({
            visibility: 'visible'
        });
        $('.introduction, .menu').animate({
            left: 0
        }, 1000, 'easeOutQuart');
        $('.profile-page, .resume-page, .portfolio-page, .contact-page').fadeOut(800);
    });
    
    /*  --------------------------------
         Maximize Services Items Height
        --------------------------------  */
    
    function maximizeHeight() {
        
        var minHeight = 0;
        
        $('.services').each(function () {
            
            var maxHeight = $(this).height();
            
            if (maxHeight > minHeight) {
                minHeight = maxHeight;
            }
            
        });
        
        $('.services').height(minHeight);
    }
    
    maximizeHeight();
    
    $(window).on('resize', maximizeHeight);

    /*  ----------------------------------------
         Tooltip Starter for Social Media Icons
        ----------------------------------------  */

    $('.intro-content .social-media [data-toggle="tooltip"]').tooltip({
        placement: 'bottom'
    });

    $('.contact-details .social-media [data-toggle="tooltip"]').tooltip();

    /*  ------------
         Pie Charts
        ------------  */

    $(function () {

        var fillColor = $('.footer').css('background-color'); // Get background color of footer to set relevent fill color in pie charts

        // Initiate EasyPieChart

        $('.skill').easyPieChart({
            barColor: fillColor,
            trackColor: '#c6c6c6',
            scaleColor: '#c6c6c6',
            scaleLength: 8,
            lineWidth: 8,
            size: 150,
            lineCap: 'butt'
        });

    });

    /*  -------------------------------
         MixItUp ( for portfolio page )
        -------------------------------  */

    $(function () {

        // Initiate MixItUp

        $('#projects').mixItUp({
            
            callbacks: {
                onMixLoad: function (state) {
                    $('.portfolio-page').hide();
                }
            }
            
        });

    });

    /*  -------------------------------
         PopUp ( for portfolio page )
        -------------------------------  */

    $(function () {
        $('.show-popup').popup({
            keepInlineChanges: true,
            speed: 500
        });
    });

    /*  -----------------------------------------------------
         MixItUp ( for portfolio page : testimonials slider )
        -----------------------------------------------------  */

    $(function () {
        $(".owl-carousel").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 200,
            paginationSpeed: 300,
            singleItem: true,
            autoPlay: true,
        });
    });
    
    /*  -------------
         Contact Form
        ------------- */

    $('#contactForm').submit(function () {
        
        $.ajax({
            type: "POST",
            url: "contact.php",
            data: $('#contactForm').serialize(),
            success: function (msg) {
                if (msg == 'SEND') {
                    $('.success').fadeIn();
                    $('.error').fadeOut();
                    $('#contactForm')[0].reset();
                    $('#loaderImg').hide();
                    setTimeout(resetAll,5000);
                } else {
                    $('.success').fadeOut();
                    $('.error').fadeIn().find('h3').text(msg);
                    $('#loaderImg').hide();
                }
            }
        });
        return false;
    });

    function resetAll(){
        $('.success').fadeOut('slow');
        $('.error').fadeOut('slow');
    }

    /*  -------------------------------
         Google Map ( for contact page )
        -------------------------------  */

    $('#google-map').gMap({
        latitude: 31.562130,
        longitude: 74.319460,
        maptype: 'TERRAIN',
        scrollwheel: false,
        zoom: 14,
        markers: [
            {
                latitude: 31.562130,
                longitude: 74.319460,
                html: "I am Here!",
                icon: {
                    image: "images/icon/map_marker.png",
                    iconsize: [46, 46],
                    iconanchor: [12, 46]
                }
            }
        ],
        controls: {
            panControl: false,
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
    });

    /*  -------------------------------
         Mobile number validation
        -------------------------------  */
    $("#mobile").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    $("#mobile").on("keypress", function(evt) {
      var keycode = evt.charCode || evt.keyCode;
      if (keycode == 46) {
        return false;
      }
    });

    /*  -------------------------------
         Loader show
        -------------------------------  */
    $('#contactForm').submit(function() {
        $('#loaderImg').show(); 
        return true;
    });

    //////////Disable right click context menu////////////////////////
    $("body").on("contextmenu",function(e){
        return false;
    });  
    /////////////////////end///////////////////////           

    //////////Disable cut, copy////////////////////////
	
	/*
    $('body').bind('cut copy', function (e) {
        e.preventDefault();
    });
    /////////////////////end///////////////////////

   
	
	//////////F12 disable code////////////////////////
    
	document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           return false;
        }
    }
	
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
	
    document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
    /////////////////////end///////////////////////

    //////////Disable ctrl+u, ctrl+s////////////////////////
    $(document).keydown(function(event) { 
        var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
        if (event.ctrlKey && (pressedKey == "s" || pressedKey == "u")) {
            return false; 
        }
    });  */
	
    /////////////////////end///////////////////////           
});

/*  -------------------------------
 Drift Message
-------------------------------  */



