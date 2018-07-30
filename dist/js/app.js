$(document).ready(function() {

    //masonry
    var container = document.querySelector('#folio-grid');
    var msnry = new Masonry(container, {
        // columnWidth: 280,
        isFitWidth: true,
        isInitLayout: false
    });
    msnry._isLayoutInited = true;
    msnry.layout();

    //smooth scroll
    $(function() {
        $('.smoothscroll').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var $target = $(this.hash);
                $target = $target.length ? $target : $('[name=' + this.hash.slice(1) + ']');
                if ($target.length) {
                    var targetOffset = $target.offset().top - 55;
                    $('html,body').animate({
                        scrollTop: targetOffset
                    }, 600, "easeInOutSine");
                    return false;
                }
            }
        });
    });

    //ajax settings
    $.ajaxSetup({
        cache: false
    });

    $(document).ajaxComplete(function() {
            $('.folio-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 5000,
                infinite: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.folio-slider',
                dots: true,
                centerMode: true,
                focusOnSelect: true
            });
        });


    //scrollspy
    $(function() {
        $('body').scrollspy({
            target: '#navbar',
            offset: 150
        });
    });


    // jkcontact
    $(function() {
        $("#JqAjaxForm").submit(function(e) {
            e.preventDefault();

            dataString = $("#JqAjaxForm").serialize();

            $.ajax({
                type: "POST",
                url: "emailer.php",
                data: dataString,
                dataType: "json",
                success: function(data) {

                    if (data.email_check == "invalid") {
                        $("#contactMessage").html("<div class='errorMessage'>Sorry " + data.name + ", " + data.email + " isn't a valid email address. Give it another shot. Thanks</div>");
                    } else {
                        $("#contactMessage").html("<div class='successMessage'>Hi " + data.name + ". Thanks for contacting me. I'll respond to you via email at " + data.email + ". Cheers.</div>");
                        $("#JqAjaxForm").hide();
                    }

                }

            });

        });
    });



    var $fields = $("#JqAjaxForm :input");
    $fields.keyup(function() {
        var $emptyFields = $fields.filter(function() {

            // remove the $.trim if whitespace is counted as filled
            return $.trim(this.value) === "";
        });

        if (!$emptyFields.length) {
            $( "#contact-submit" ).last().addClass( "active" );
        } else {
            // alert("uh-oh, you forgot to fill something out");
        }
    });



});
