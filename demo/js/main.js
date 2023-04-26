
jQuery(document).ready(function() {
    $('.carousel-video').owlCarousel({
	loop:false,
	margin:10,
	// autoHeight:true,
	nav:true,
	autoplay: false,
	dots: true,
	navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
			items:2
		},
		1000:{
            items:3
        }
    }

})

    $('.testimonials').owlCarousel({
        loop:true,
        margin:30,
        autoplay: true,
        nav: false,
        dots: false,
        // smartSpeed: 7000,
        // slideTransition: 'linear',
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            800:{
                items:3,
                nav:false
            }
        }
        })

$('.event-calender').owlCarousel({
    loop:true,
    margin:30,
    autoplay: true,
    nav: false,
    dots: false,
    smartSpeed: 7000,
    slideTransition: 'linear',
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        800:{
            items:4,
            nav:false
        },
        1000:{
            items:5,
            nav:false
        }
    }
    })
    
    
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:2,
          nav:false
      }
  }
})



/*----------  tab  ----------*/
jQuery('.tabs .tab-links a').on('click', function(e) {
    var currentAttrValue = jQuery(this).attr('href');
    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
    e.preventDefault();
});



});

$('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
  
    {
  
      duration: 8000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }
  
    });  
    
    
  
  });