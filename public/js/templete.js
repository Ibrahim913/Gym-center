$(document).ready(function() {



    //-------------------- Start Pricing Card -------------
    function check() {
        var checkBox = document.getElementById("checbox");
        var text1 = document.getElementsByClassName("text1");
        var text2 = document.getElementsByClassName("text2");

        for (var i = 0; i < text1.length; i++) {
            if (checkBox.checked == true) {
                text1[i].style.display = "block";
                text2[i].style.display = "none";
            } else if (checkBox.checked == false) {
                text1[i].style.display = "none";
                text2[i].style.display = "block";
            }
        }
    }
    check();



    //-------------------- End Pricing Card -------------




    //-------------- swiper -----------------

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 300,
            modifier: 1,
            slideShadows: true,
        },
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        }
    });



    //............................        Start Navbar color     .................................

    /*
        $(window).scroll(function() {

            if ($(window).scrollTop() >= 100) {

                $("nav").css({
                    "backgroundColor": "#000",
                    "opacity": ".8",
                    "padding": "10px 0",
                    "box-shadow": "8px 0 5px #000"

                })
            } else {

                $("nav").css({
                    "backgroundColor": "transparent",
                    "padding": "25px 0",
                    "box-shadow": "none"
                })
            }
        });

        //...................................    when you refresh at anywhere at page slidbar will make the same effect       .......................................

        if ($(window).scrollTop() >= 100) {

            $("nav").css({
                "backgroundColor": "#000",
                "opacity": ".8",
                "padding": "10px 0",
                "box-shadow": "8px 0 5px #000"
            })

        } else {
            $("nav").css({
                "backgroundColor": "transparent",
                "padding": "25px 0",
                "box-shadow": "none"
            })
        }



    */

    $(window).scroll(function() {

        $('section').each(function() {


            if ($(window).scrollTop() + 100 >= $(this).offset().top) {

                var sectionid = $(this).attr('id');

                $('navbar li a').removeClass('active');

                $('navbar li a[data-scroll ="' + sectionid + '"]').addClass('active')
            }
        })
    })

})