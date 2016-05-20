
    function animate_text_left (text_tag) {
        $('.stack.present .present '+text_tag).attr( "data-effect", "slideInLeft" );
        $('.stack.present .past '+text_tag).removeClass('animated slideInLeft').addClass('');
        $('.stack.present .future '+text_tag).removeClass('animated slideInLeft').addClass('');
        $('.stack '+text_tag).removeClass('animated slideInLeft').addClass('');
        $('.stack.present .present '+text_tag).addClass('animated slideInLeft');

        $('.stack.present .above-the-fold.present img').removeClass('animated slideInRight').addClass('');
        $('.stack.present .above-the-fold.present '+text_tag).removeClass('animated slideInLeft').addClass('');
    }
    function animate_content () {
        if ( screen.width > 767 ){
            $('.stack.present img').removeClass('animated slideInRight').addClass('');
            $('.stack.present p').removeClass('animated slideInRight').addClass('');
            $('.stack.present h2').removeClass('animated slideInRight').addClass('');
            $('.stack.present h3').removeClass('animated slideInRight').addClass('');

            $('.stack.present .past img').removeClass('animated slideInRight').addClass('');
            $('.stack.present .future img').removeClass('animated slideInRight').addClass('');
            $('.stack img').removeClass('animated slideInRight').addClass('');
            $('.stack.present .present img').attr( "data-effect", "slideInRight" );
            $('.stack.present .present img').addClass('animated slideInRight');

            animate_text_left('p');
            animate_text_left('h2');
            animate_text_left('h3');
        }
    }

     function progress_year () {
 function hasClass(element, cls) {
            return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
        }

        var first_slide = document.getElementById('first-slide');
        var second_slide = document.getElementById('second-slide');
        var third_slide = document.getElementById('third-slide');
        var fourth_slide = document.getElementById('fourth-slide');
        var fifth_slide = document.getElementById('fifth-slide');
        var sixth_slide = document.getElementById('sixth-slide');
        var seventh_slide = document.getElementById('seventh-slide');
        var eighth_slide = document.getElementById('eighth-slide');
        var ninth_slide = document.getElementById('ninth-slide');
        var tenth_slide = document.getElementById('tenth-slide');

        var first_slide_var = hasClass(first_slide, 'present');
        var second_slide_var = hasClass(second_slide, 'present');
        var third_slide_var = hasClass(third_slide, 'present');
        var fourth_slide_var = hasClass(fourth_slide, 'present');
        var fifth_slide_var = hasClass(fifth_slide, 'present');
        var sixth_slide_var = hasClass(sixth_slide, 'present');
        var seventh_slide_var = hasClass(seventh_slide, 'present');
        var eighth_slide_var = hasClass(eighth_slide, 'present');
        var ninth_slide_var = hasClass(ninth_slide, 'present');
        var tenth_slide_var = hasClass(tenth_slide, 'present');

        if(first_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:first-child" ).show();
        } else if(second_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(2)" ).show();
        } else if(third_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(3)" ).show();
        } else if(fourth_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(4)" ).show();
        } else if(fifth_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(5)" ).show();
        } else if(sixth_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(6)" ).show();
        } else if(seventh_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(7)" ).show();
        } else if(eighth_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(8)" ).show();
        } else if(ninth_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:nth-child(9)" ).show();
        } else if(tenth_slide_var === true) {
            $( ".timeline-container .timeline-title" ).hide();
            $( ".timeline-container .timeline-title:last-child" ).show();
        } else {
            $( ".timeline-container .timeline-title" ).hide();
        }
    }

 $(function (){
    // var log = function (msg) {
    //   return function () {
    //     if (console) console.log(msg);
    //   };
    // };

    // var animateClasses = 'slideInLeft slideOutLeft flash bounce shake tada swing wobble pulse flip flipInX flipOutX flipInY flipOutY fadeIn fadeInUp fadeInDown fadeInLeft fadeInRight fadeInUpBig fadeInDownBig fadeInLeftBig fadeInRightBig fadeOut fadeOutUp fadeOutDown fadeOutLeft fadeOutRight fadeOutUpBig fadeOutDownBig fadeOutLeftBig fadeOutRightBig bounceIn bounceInDown bounceInUp bounceInLeft bounceInRight bounceOut bounceOutDown bounceOutUp bounceOutLeft bounceOutRight rotateIn rotateInDownLeft rotateInDownRight rotateInUpLeft rotateInUpRight rotateOut rotateOutDownLeft rotateOutDownRight rotateOutUpLeft rotateOutUpRight hinge rollIn rollOut';

    // var $tlt = $('.tlt').textillate({
    //     autoStart: true// ,
    //     // in: { effect: 'fadeInLeft' },
    //     // out: { effect: 'fadeOutLeft' }
    // });


    $(window).bind('load', function() {
        $('.timeline-container').css('opacity',1).animate({opacity:1}, 1000);
    });

    $(window).load(function() {
        animate_content();
        progress_year();
    });



    Reveal.initialize({
      history: true,
      progress: false,
      controls: false
      // transition: 'slide',
      // transitionSpeed: 'slow',
      // backgroundTransition: 'slide'
    });

      if (navigator.userAgent.indexOf('Mac OS X') != -1) {
        $("body").addClass("mac");
      } else {
        $("body").addClass("windows");
      }

      Reveal.configure({
        keyboard: {
          37: function(event) {
              var index = Reveal.getIndices();
              if(index.v > 0) {
                return false;
              } else {
                Reveal.left();
              }
          },
          38: function(event) {
              var index = Reveal.getIndices();
              Reveal.up();
            },
          39: function(event) {
              var index = Reveal.getIndices();
              if(index.v > 0) {
                return false;
              } else {
                Reveal.right();
              }
           },
          40: function(event) {
              var index = Reveal.getIndices();
              Reveal.down();
            }
        }
      });

      Reveal.addEventListener('ready', function( event ) {
        animate_content();
        progress_year();
        if(event.indexh == 0) {
            $(".bullet-lists-container").hide();
            $("#blc-0").show();
            $(".it-li").removeClass('selected');
            $(".it-0").addClass('selected');
            $(".arrow-up").remove();
            $(".it-0 a").prepend('<div class="arrow-up"></div>');

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-0-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }

        if(event.indexh == 1) {
            $(".bullet-lists-container").hide();
            $("#blc-1").show();
            $(".it-li").removeClass('selected');
            $(".it-1").addClass('selected');
            $(".arrow-up").remove();
            $(".it-1 a").prepend('<div class="arrow-up"></div>');
            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }

        if(event.indexh == 2) {
            $(".bullet-lists-container").hide();
            $("#blc-2").show();
            $(".it-li").removeClass('selected');
            $(".it-2").addClass('selected');
            $(".arrow-up").remove();
            $(".it-2 a").prepend('<div class="arrow-up"></div>');
            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-2-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }

        if(event.indexh == 3) {
            $(".bullet-lists-container").hide();
            $("#blc-3").show();
            $(".it-li").removeClass('selected');
            $(".it-3").addClass('selected');
            $(".arrow-up").remove();
            $(".it-3 a").prepend('<div class="arrow-up"></div>');

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-3-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-3-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }
      });

      Reveal.addEventListener('fragmentshown', function( event ) {
        if (event.fragment.id == "moveToTop") {
          Reveal.slide(Reveal.getIndices()["h"], 0);
        }
      });

      Reveal.addEventListener('slidechanged', function( event ) {
        animate_content();
        progress_year();
        if(event.indexh == 0) {
            $(".bullet-lists-container").hide();
            $("#blc-0").show();
            $(".it-li").removeClass('selected');
            $(".it-0").addClass('selected');
            $(".arrow-up").remove();
            $(".it-0 a").prepend('<div class="arrow-up"></div>');

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-0-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-0-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }

        if(event.indexh == 1) {
            $(".bullet-lists-container").hide();
            $("#blc-1").show();
            $(".it-li").removeClass('selected');
            $(".it-1").addClass('selected');
            $(".arrow-up").remove();
            $(".it-1 a").prepend('<div class="arrow-up"></div>');
            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }

        if(event.indexh == 2) {
            $(".bullet-lists-container").hide();
            $("#blc-2").show();
            $(".it-li").removeClass('selected');
            $(".it-2").addClass('selected');
            $(".arrow-up").remove();
            $(".it-2 a").prepend('<div class="arrow-up"></div>');
            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-2-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }

        if(event.indexh == 3) {
            $(".bullet-lists-container").hide();
            $("#blc-3").show();
            $(".it-li").removeClass('selected');
            $(".it-3").addClass('selected');
            $(".arrow-up").remove();
            $(".it-3 a").prepend('<div class="arrow-up"></div>');

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-3-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-3-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
            }
        }
      });
  });
