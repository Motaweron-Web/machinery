$(document).ready(function () {
  
    // toggle to link active nav
    $(".navbar-nav .nav-item a").click(function () {
        $(this).addClass("active").parent().siblings().find("a").removeClass("active")
       
    })
    // toggle to langue
    function toggleLangue() {
        $(".langueButton .Ar").click(function () {
            $(this).removeClass("active")
            $(".En").addClass("active")
            
        })
        $(".langueButton .En").click(function () {
            $(this).removeClass("active")
            $(".Ar").addClass("active")
            
        })
    }
    toggleLangue();
    
    
    // swiper to banner
    var swiper = new Swiper(".mySwiper", {
          
        autoplay: true,
        speed: 900,
      });
      // cartDetailsswiper
      var swiper = new Swiper(".thumbsSliderA", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        autoplay: true,
        autoplaySpeed: 1500,
        
      });
      // thumbsSlider
      var swiper2 = new Swiper(".cartDetailsswiper", {
        loop: true,
        spaceBetween: 10,
        autoplay: true,
        autoplaySpeed: 1500,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    //   to project
    var swiper = new Swiper(".projectSwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        autoplay: true,
        autoplaySpeed: 3500,
        loop:true,
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          576: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          991: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 4,
          },
        },
      });
      $(window).scroll(function () {
        if ($(window).scrollTop() >=432) {
            $(".scrollTop ").addClass("active")
        } else {
            $(".scrollTop ").removeClass("active")
        }
      })
      $(".scrollTop i").click(function () {
        $(window).scrollTop(0)
      })
    //   swiperTeam
    var swiper = new Swiper(".swiperTeam", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        autoplay: true,
        autoplaySpeed: 2000,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          576: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
  //  
  var swiper = new Swiper(".thumbsSlider", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    autoplay: true,
    autoplaySpeed: 1500,
    
  });
  // thumbsSlider
  var swiper2 = new Swiper(".projectDetailsswiper", {
    loop: true,
    spaceBetween: 10,
    autoplay: true,
    autoplaySpeed: 1500,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
  // Fancybox.bind('[data-fancybox="gallery"]', {
    
  // });
  // to share job
  $(".socialJob").click(function () {
    $(".jobSocialMedia").fadeToggle(500)
    $(this).toggleClass("active")
  })
  // to show form job
  $(".UPload").click(function () {
    $(".jobForm").slideToggle(500)
    $(this).toggleClass("active")
  })
  // dropify Ar
  $(".dropify").dropify({
    messages: {
      default: 'قم بسحب وإسقاط سيرتك الذاتية هنا أو انقر',
      replace: 'قم بالسحب والإفلات أو النقر للاستبدال',
      remove:  'حذف',
      error:   'عفوًا ، تم إلحاق شيء خاطئ.'
      
  }
  })
  // dropify En
  $(".dropifyEn").dropify({
    messages: {
      default: 'Drag and drop your resume here or click',
      replace: 'Drag and drop or click to replace',
      remove:  'Delete',
      error:   'Oops, something was wrongly appended.'
      
  }
  })
  // 
  // Filter
  // $(this).data('Filter')
  
  $(".headFilter li a").on("click", function (e) {
    e.preventDefault();
    $(this).addClass("active").parent().siblings().find("a").removeClass("active");
    $("#" + $(this).data("show")).fadeIn(500).siblings().hide()
    
    console.log($("#" + $(this).data("show")));
  });
  
  

})