var $ = jQuery;

$(document).ready(function () {
  // $('.announcement-close').on("click", function (){
  //   $('.announcement').addClass('hide');
  // });

  // UAE REQUIRED FIELD FOR PRECHECKLIST INTL

  if ($(".iti__selected-flag .iti__flag").hasClass("iti__ae")) {
    $("#wpforms-790-field_124-container").css("display", "block");
    $("#wpforms-790-field_124-container label").html(
      "Residence Visa <span class='wpforms-required-label'>*</span>"
    );
    $("#wpforms-790-field_124").prop("required", true);
  } else {
    $("#wpforms-790-field_124-container").css("display", "none");
    $("#wpforms-790-field_124-container label").html("Residence Visa");
    $("#wpforms-790-field_124").prop("required", false);
  }

  $("#wpforms-790-field_41").focusout(function (e) {
    if ($(".iti__selected-flag .iti__flag").hasClass("iti__ae")) {
      $("#wpforms-790-field_124-container").css("display", "block");
      $("#wpforms-790-field_124-container label").html(
        "Residence Visa <span class='wpforms-required-label'>*</span>"
      );
      $("#wpforms-790-field_124").prop("required", true);
    } else {
      $("#wpforms-790-field_124-container").css("display", "none");
      $("#wpforms-790-field_124-container label").html("Residence Visa");
      $("#wpforms-790-field_124").prop("required", false);
    }
  });

  $("#wrapper").css("marginBottom", $(".fixed-footer").outerHeight() + "px");

  $("nav > ul > li").on("mouseenter", function (e) {
    //console.log($(this).find("ul.sub-menu").outerHeight());
  });

  // $(window).scroll(function(e){
  //   var top = $(document).scrollTop();
  //   if(top > 0){
  //     $("header").addClass("sticky");
  //   }else{
  //     $("header").removeClass("sticky");
  //   }
  // });

  let leftOffset = $(".container").offset().left;
  $(window).on("resize", function () {
    leftOffset = $(".container").offset().left;
    $(".feature-section").css("paddingLeft", leftOffset + "px");
  });

  $(".feature-section").css("paddingLeft", leftOffset + "px");

  $(".feature-scroller").each(function (i) {
    $(this).waypoint(
      function (direction) {
        if (direction == "down") {
          var fid = $(this.element).data("id");
          $(".feature-section").removeClass("sactive");
          $(".feature-media").removeClass("mactive");
          $("#feature-" + fid).addClass("sactive");
          $("#feature-media-" + fid).addClass("mactive");
        }
      },
      {
        offset: "100%",
      }
    );

    $(this).waypoint(
      function (direction) {
        if (direction == "up") {
          var fid = $(this.element).data("id");
          $(".feature-section").removeClass("sactive");
          $(".feature-media").removeClass("mactive");
          $("#feature-" + fid).addClass("sactive");
          $("#feature-media-" + fid).addClass("mactive");
        }
      },
      {
        offset: "20%",
      }
    );
  });

  $(".feature-two-scroller").each(function () {
    $(this).waypoint(
      function (direction) {
        if (direction == "down") {
          var fid = $(this.element).data("id");
          $(".feature-two-section").removeClass("mactive");
          $(".feature-two-media").removeClass("mactive");
          $(".feature-two-number").removeClass("mactive");
          $("#feature-two-section-" + fid).addClass("mactive");
          $("#feature-two-media-" + fid).addClass("mactive");
          $("#feature-two-number-" + fid).addClass("mactive");
        }
      },
      {
        offset: "100%",
      }
    );

    $(this).waypoint(
      function (direction) {
        if (direction == "up") {
          var fid = $(this.element).data("id");
          $(".feature-two-section").removeClass("mactive");
          $(".feature-two-media").removeClass("mactive");
          $(".feature-two-number").removeClass("mactive");
          $("#feature-two-section-" + fid).addClass("mactive");
          $("#feature-two-media-" + fid).addClass("mactive");
          $("#feature-two-number-" + fid).addClass("mactive");
        }
      },
      {
        offset: "20%",
      }
    );
  });

  $(".mp-file-label").on("click", function () {
    $(this).closest(".input-wrapper").find("input[type='file']").click();
  });

  $("input[type='file']").on("change", function (e) {
    $(this)
      .closest(".input-wrapper")
      .find(".mp-file-label")
      .html(e.target.files[0].name);
  });

  $("#pricing-country").on("change", function (e) {
    $("#apm-cp, .apm-cp").addClass("d-none");
    $("#apm-ew, .apm-ew").addClass("d-none");
    $("#apm-bt, .apm-bt").addClass("d-none");
     $("#premium-rate,.premium-field h4").addClass("d-none");
    $("#uk-cards,.uk-cards h4").addClass("d-none");

    $(".apm-title, .apm-container").removeClass("d-none");

    var country = $(this).val();
    if (country != "") {
      if (country == "other") {
        window.location.href = $("option:selected", this).data("redirect");
      }
      if (country == "United Kingdom") {
         $(".uk-cards h4").html("EEA Cards ");

      }else{
           $(".uk-cards h4").html("UK Cards ");
      }
      var local = $("option:selected", this).data("local");
      var premium = $("option:selected", this).data("premium");
      var ucards = $("option:selected", this).data("cards");

      var international = $("option:selected", this).data("international");
      var specs = $("option:selected", this).data("specs");
      var apm = $("option:selected", this).data("apm");
      var terms = $("option:selected", this).data("terms");

      var specs_html = "";
      if (specs) {
        specs.forEach(function (item, index) {
          specs_html +=
            '<li data-id="' +
            index +
            '" class=""><span><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.8198 6.19526C20.0601 6.45561 20.0601 6.87772 19.8198 7.13807L9.9736 17.8047C9.73328 18.0651 9.34364 18.0651 9.10332 17.8047L4.18024 12.4714C3.93992 12.2111 3.93992 11.7889 4.18024 11.5286C4.42056 11.2682 4.8102 11.2682 5.05053 11.5286L9.53846 16.3905L18.9495 6.19526C19.1898 5.93491 19.5794 5.93491 19.8198 6.19526Z" fill="#1EAAE6"/></svg></span>';
          specs_html += item.title;
          specs_html += "</li>";
        });
      }
      // Accepted Payment Methods
      var apm_cp = "";
      var apm_ew = "";
      var apm_bt = "";
      for (var key in apm) {
        if (Array.isArray(apm[key])) {
          apm[key].forEach(function (item) {
            if (key == "cards_payment") {
              apm_cp +=
                '<div class="price-apm"><img src="https://montypay.com/wp-content/uploads/2023/03/' +
                item +
                '.png" width="100%"/></div>';
            } else if (key == "e-wallets") {
              apm_ew +=
                '<div class="price-apm"><img src="https://montypay.com/wp-content/uploads/2023/03/' +
                item +
                '.png" width="100%"/></div>';
            }
          });
        } else {
          if (apm[key]) {
            apm_bt +=
              '<div class="price-apm price-apm-bt"><svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22" cy="22" r="22" fill="url(#paint0_linear_1815_4480)"/><path d="M32.2256 13.2344L16.6881 28.7719L11.7725 23.8648C11.4029 23.4953 10.81 23.4953 10.449 23.8648C10.0795 24.2344 10.0795 24.8273 10.449 25.1883L16.0264 30.7656C16.2068 30.9461 16.4475 31.0406 16.6881 31.0406C16.9287 31.0406 17.1693 30.9461 17.3498 30.7656L33.549 14.5664C33.9186 14.1969 33.9186 13.6039 33.549 13.243C33.1795 12.8734 32.5865 12.8734 32.2256 13.2344Z" fill="white"/><defs><linearGradient id="paint0_linear_1815_4480" x1="44" y1="44" x2="44" y2="0" gradientUnits="userSpaceOnUse"><stop stop-color="#4CB8C4"/><stop offset="1" stop-color="#3CD3AD"/></linearGradient></defs></svg> Bank transfer available</div>';
          }
        }
      }
      if (apm_cp != "") {
        $("#apm-cp, .apm-cp").removeClass("d-none");
        $("#apm-cp").html(apm_cp);
      }
      if (apm_ew != "") {
        $("#apm-ew, .apm-ew").removeClass("d-none");
        $("#apm-ew").html(apm_ew);
      }
      if (apm_bt != "") {
        $("#apm-bt, .apm-bt").removeClass("d-none");
        $("#apm-bt").html(apm_bt);
      }
      $("#specs").html(specs_html);
      $("#terms").html(terms);
      $("#local-rate").html(local);
     if (premium != "") {
        $("#premium-rate").removeClass("d-none");
        $(".premium-field h4").removeClass("d-none");

        $("#premium-rate").html(premium);
      }
      if (ucards != "") {
        $("#uk-cards").removeClass("d-none");
        $(".uk-cards h4").removeClass("d-none");

        $("#uk-cards").html(ucards);
      }

      $("#international-rate").html(international);
    } else {
        $("#local-rate").html("");
  

        $("#premium-rate").html("");
      
      

        $("#uk-cards").html("");
   

      $("#international-rate").html("");
      $(".apm-title, .apm-container").addClass("d-none");
    }
  });

  $(".m-menu > ul > li.menu-item-has-children > a").on("click", function (e) {
    e.preventDefault();
    if ($(this).attr("href") == "#") {
      open_sub($(this).parent());
    }
  });

  $(".menu-toggle").on("click", function () {
    var par = $(this).parent();
    open_sub(par);
  });

  $(".menu-overlay").on("click", function () {
    $(".mobile-menu-wrapper").removeClass("open");
  });

  $(".menu-selector").on("click", function () {
    $(".mobile-menu-wrapper").addClass("open");
  });

  $(".menu-close").on("click", function () {
    $(".mobile-menu-wrapper").removeClass("open");
  });

  $(".footer-links a, .header-content a").on("click", function (e) {
    if ($(this).attr("href") == "#") {
      e.preventDefault();
    }
  });

  $(".search-icon").on("click", function () {
    $("#search").addClass("open");
  });

  $("#search-close").on("click", function () {
    $("#search").removeClass("open");
    $("#search input[type='text']").val("");
  });

  function open_sub(par) {
    var sub = par.children("ul.sub-menu");
    var mh = par.children(".menu-toggle");
    if (par.hasClass("opened")) {
      par.css("height", "55px").removeClass("opened");
      mh.html("+");
    } else {
      par
        .css("height", sub.outerHeight() + par.height() + "px")
        .addClass("opened");
      mh.html("-");
    }
  }

  $("input[name=country]").on("change", function () {
    var country_code = $(".country-select .country.active").data(
      "country-code"
    );
  });

  // var page = 1;
  // $(".wpforms-page-button").click(function(){
  //   $(".wpforms-page").css("display","none");
  //   if($(this).hasClass("wpforms-page-next")){
  //     page++;
  //   }
  //   else if($(this).hasClass("wpforms-page-prev")){
  //     page--;
  //   }
  //   $(".wpforms-page-" + page).css("display","block")
  // })

  $(".counter").counterUp({
    delay: 10,
    time: 2000,
  });

  $(".open-modal").click(function () {
    $(".modal").css("display", "block");
  });

  $(".close-modal").click(function () {
    $(".modal").css("display", "none");
  });

  // $('.circle-chart').waypoint(function() {
  //   $('.circle-chart').addClass("is-active");
  // }, {
  //   offset: '100%'
  // });

  // $('.bars-chart').waypoint(function() {
  //   $('.bars-chart').addClass("is-active");
  // }, {
  //   offset: '100%'
  // });

  $(".laptop-gif").load(function () {
    $(".laptop-gif-loader").addClass("d-none");
    $(this).removeClass("d-none");
  });

  let tickerSpeed = 0.5;
  let options = {};
  const slideshowEls = document.querySelectorAll(".js-slideshow");

  const update = (flickity) => {
    if (flickity.isPaused) return;
    if (flickity.slides) {
      flickity.x = (flickity.x - tickerSpeed) % flickity.slideableWidth;
      flickity.selectedIndex = flickity.dragEndRestingSelect();
      flickity.updateSelectedSlide();
      flickity.settle(flickity.x);
    }
    window.requestAnimationFrame(() => update(flickity));
  };

  const pause = (flickity) => {
    flickity.isPaused = true;
  };

  const play = (flickity) => {
    if (flickity.isPaused) {
      flickity.isPaused = false;
      window.requestAnimationFrame(() => update(flickity));
    }
  };

  for (let i = 0; i < slideshowEls.length; i++) {
    const slideshowEl = slideshowEls[i];
    if (slideshowEl.classList.contains("benefits-slider")) {
      options = {
        autoPlay: false,
        imagesLoaded: true,
        cellAlign: "left",
        prevNextButtons: false,
        pageDots: false,
        draggable: true,
        wrapAround: true,
        selectedAttraction: 0.015,
        friction: 0.25,
      };
    } else if (slideshowEl.classList.contains("connectors-slider")) {
      options = {
        autoPlay: false,
        imagesLoaded: true,
        cellAlign: "left",
        prevNextButtons: false,
        pageDots: false,
        draggable: true,
        wrapAround: true,
        selectedAttraction: 0.015,
        friction: 0.25,
        groupCells: 4.5,
      };
    }

    const flickity = new Flickity(slideshowEl, options);
    flickity.isPaused = false;
    flickity.x = 0;

    slideshowEl.addEventListener("mouseenter", () => pause(flickity), false);
    slideshowEl.addEventListener("focusin", () => pause(flickity), false);
    slideshowEl.addEventListener("mouseleave", () => play(flickity), false);
    slideshowEl.addEventListener("focusout", () => play(flickity), false);

    flickity.on("dragStart", () => {
      flickity.isPaused = true;
    });

    window.requestAnimationFrame(() => update(flickity));
  }
});
