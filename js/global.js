// Full Height
$(document).ready(function() {
  function setHeight() {
    windowHeight = $(window).innerHeight();
    BannerTextHeight = $('#header-info').innerHeight();
    $('#header').css('min-height', windowHeight);
    //$('#header-info').css('margin-top', -BannerTextHeight/2);
  };
  setHeight();
  
  $(window).resize(function() {
    setHeight();
  });

  function contentImage() {
    contentHeight = $('#home-intro .content-area').outerHeight();
    $('#home-intro .bg').css('height', contentHeight);
    var viewport = $ (window);
    if (viewport.width() < 975) {
      $('#home-intro .bg').css('height', 0);
    }
    aboutContentHeight = $('#about-intro .content-area').outerHeight();
    $('#about-intro .bg').css('height', aboutContentHeight);
    if (viewport.width() < 975) {
      $('#about-intro .bg').css('height', 0);
    }
    secondAboutContentHeight = $('#about-outro .content-area').outerHeight();
    $('#about-outro .bg').css('height', secondAboutContentHeight);
    if (viewport.width() < 975) {
      $('#about-outro .bg').css('height', 0);
    }
    contactHeight = $('#contact-me .content-area').outerHeight();
    $('#contact-me .bg').css('height', contactHeight);
    if (viewport.width() < 975) {
      $('#contact-me .bg').css('height', 0);
    }
  }
  contentImage();
  $(window).resize(function() {
    contentImage();
  });
});

// scroll nav fade in on scroll
$(function() {
  //caches a jQuery object containing the header element
  var header = $('.scrolled-header');
  var innerHeader = $('.inner-scrolled-header'); 
  var innerBannerHeight =$('#inner-banner').innerHeight();
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= windowHeight) {
      header.addClass('opacity');
    } else {
      header.removeClass('opacity');
    };
    if (scroll >= innerBannerHeight) {
      innerHeader.addClass('opacity');
    } else {
      innerHeader.removeClass('opacity');
    };
  });
});

// Smooth Scroll
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1100);
        return false;
      }
    }
  });
});

$(document).ready(function () {
    var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
        intputElements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                if (e.target.name == "name") {
                    e.target.setCustomValidity("Sorry, I didn't catch your name. Awkward!");
                }
                else if (e.target.name == "email_address") {
                    e.target.setCustomValidity("Psst, I can't get back to you if I don't know your email address.");
                }
            }
        };
    }
    var textareaElements = document.getElementsByTagName("TEXTAREA");
    for (var i = 0; i < textareaElements.length; i++) {
        textareaElements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                if (e.target.name == "message") {
                    e.target.setCustomValidity("Sooo... What should we talk about?");
                }
            }
        };
    }
})
