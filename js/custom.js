$(document).ready(function() {

    // menu
    // $(".toggle-button").click(function() {
    //     $(".main-menu ul").toggle();
    // });

    if (document.getElementById("particles-js")) particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 10,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#1b1e34"
            },
            "shape": {
                "type": "polygon",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 6
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 160,
                "random": false,
                "anim": {
                    "enable": true,
                    "speed": 10,
                    "size_min": 40,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 200,
                "color": "#ffffff",
                "opacity": 1,
                "width": 2
            },
            "move": {
                "enable": true,
                "speed": 8,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });

    // slimscroll
    $('.pricing-table ul').slimScroll({
        height: '334px'
    });

    $('.pricing-table ul').slimScroll({
        opacity: 0
    }).mouseover(function() {
        $(this).next('.slimScrollBar').css('opacity', 0.4);
    });

    // counter start

    var a = 0;
    $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.count-description').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 5000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }

                    });
            });
            a = 1;
        }

    });




    // form 


})

var frmchk="0";


function validation() {
    if(($('#cmp_name').val()!="") || ($('#reg_name').val()!="") || ($('#reg_org').val()!="") || ($('#street').val()!="") || ($('#city').val()!="") || ($('#zip').val()!="") || ($('#state').val()!="") || ($('#country').val()!="") || ($('#phone').val()!="") || ($('#email').val()!=""))
    {
      frmchk="1";   
    }
    
}

$(document).ready(function() {

    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
         validation();
        var frm_id  =   $(this).attr("id");
        var $checkboxes = $('#domain_ser_rslt input[type="checkbox"]');
        var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
        //alert(frmchk);
        //alert(frm_id);
        if((frm_id!="domain_next") || (countCheckedCheckboxes>0 )){          
                          
        if(frm_id=="insert_db"&&frmchk=="0")
        {
            $.alert({
                            title: 'Error!',
                            content: "Please Fill Form",
                        });
        }
        else
        {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'display': 'none',
                    'opacity': '0',
                });
                next_fs.css({ 'left': left, 'opacity': opacity });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        
        });
        }
    }
    else{
        
        $.alert({
                            title: 'Error!',
                            content: "Please search and select a domain name to register",
                        });
        
    }
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({ 'left': '0', 'display': 'none' });
                previous_fs.css({ 'opacity': '1' });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function() {
        return false;
    })

    

    $(".submit-form-domain").click(function() {
        $(".success-popup").show();
    });
    $(".success-popup-close").click(function() {
        $(".success-popup").hide();
    })



})