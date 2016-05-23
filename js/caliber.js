
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
                Reveal.slide(index.h-1, 0, 0);
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
              Reveal.next();
            }
        }
      });

      var slideProccessor = function( event ) {
        animate_content();
        if(event.indexh == 0) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-0").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-0").addClass('selected');
            $(".arrow-up").remove();
            $(".it-0 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

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
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-1").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-1").addClass('selected');
            $(".arrow-up").remove();
            $(".it-1 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-1").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-1").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-1-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-1").css({opacity: 1});
            }
        }

        if(event.indexh == 2) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-2").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-2").addClass('selected');
            $(".arrow-up").remove();
            $(".it-2 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-2").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-2").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-2-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-2").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-2-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-2").css({opacity: 1});
            }
        }

        if(event.indexh == 3) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-3").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-3").addClass('selected');
            $(".arrow-up").remove();
            $(".it-3 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-3").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-3-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-3").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-3").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-3-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-3").css({opacity: 1});
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-3-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-3").css({opacity: 1});
            }
        }

        if(event.indexh == 4) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-4").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-4").addClass('selected');
            $(".arrow-up").remove();
            $(".it-4 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-4-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-4").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-4-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-4").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-4-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-4").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-4-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-4").css({opacity: 1});
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-4-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-4").css({opacity: 1});
            }
        }

        if(event.indexh == 5) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-5").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-5").addClass('selected');
            $(".arrow-up").remove();
            $(".it-5 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-5-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-5").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-5-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-5").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-5-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-5").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-5-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-5").css({opacity: 1});
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-5-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-5").css({opacity: 1});
            }
        }

        if(event.indexh == 6) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-6").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-6").addClass('selected');
            $(".arrow-up").remove();
            $(".it-6 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-6-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-6").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-6-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-6").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-6-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-6").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-6-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-6").css({opacity: 1});
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-6-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-6").css({opacity: 1});
            }
        }

        if(event.indexh == 7) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-7").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-7").addClass('selected');
            $(".arrow-up").remove();
            $(".it-7 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-7-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-7").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-7-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-7").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-7-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-7").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-7-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-7").css({opacity: 1});
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-7-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-7").css({opacity: 1});
            }
        }

        if(event.indexh == 8) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-8").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-8").addClass('selected');
            $(".arrow-up").remove();
            $(".it-8 a").prepend('<div class="arrow-up"></div>');
            $("#tt9tostart").hide();
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-8-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-8").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-8-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-8").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-8-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-8").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-8-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-8").css({opacity: 1});
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-8-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $(".tt-8").css({opacity: 1});
            }
        }

        if(event.indexh == 9) {
            $(".bullet-lists-container").css({"display": "none"});
            $("#blc-9").css({"display": "table"});
            $(".it-li").removeClass('selected');
            $(".it-9").addClass('selected');
            $(".arrow-up").remove();
            $(".it-9 a").prepend('<div class="arrow-up"></div>');
            $(".timeline-title").css({opacity: 0});

            if(event.indexv == 0) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-9-0").addClass('selected');
                $(".to-top-scroller").hide();
                $(".interactive-timeline-container").show();
                $(".tt-9").css({opacity: 0});
            }

            if(event.indexv == 1) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-9-1").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $("#tt9default").show();
                $("#tt9tostart").hide();
                $(".tt-9").css({opacity: 1});
            }

            if(event.indexv == 2) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-9-2").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $("#tt9default").show();
                $("#tt9tostart").hide();
                $(".tt-9").css({opacity: 1});
            }

            if(event.indexv == 3) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").removeClass('gray-fill');
                $("#slide-9-3").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $("#tt9default").show();
                $("#tt9tostart").hide();
                $(".tt-9").css({opacity: 1});
            }

            if(event.indexv == 4) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-9-4").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $("#tt9default").show();
                $("#tt9tostart").hide();
                $(".tt-9").css({opacity: 1});
            }

            if(event.indexv == 5) {
                $(".slider-bullets").removeClass('selected');
                $(".slider-bullets").addClass('gray-fill');
                $("#slide-9-5").addClass('selected');
                $(".to-top-scroller").show();
                $(".interactive-timeline-container").hide();
                $("#tt9default").hide();
                $("#tt9tostart").show();
                $(".tt-9").css({opacity: 1});

            }
        }
      };

      Reveal.addEventListener('ready', slideProccessor);

      Reveal.addEventListener('slidechanged', slideProccessor);

  });
