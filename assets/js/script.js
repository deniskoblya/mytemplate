// начало код срабатывания бургер меню на чистом javascript
var burgerCtr = document.querySelector("#burger-menu");
var menuCtr = document.querySelector("#mobile-menu");
burgerCtr.addEventListener("click", function () {
    this.classList.toggle("active");
    menuCtr.classList.toggle("show_mobile_menu");
});
// конец бургера

// ---------------------------------------------------------------------

$(document).click(function (e) { // скрипт для клика по элементу и вне его
    if ($(e.target).closest(".pop-up").length) {
        // вместо .pop-up ставим свой клас
        // клик по элементу .pop-up
        return;
    }
    // условие по клику снаружи элемента
});


// ---------------------------------------------------------------------

$(document).ready(function () {
    $(".phone").mask("+380 (99) 999-99-99"); // маска для всех инпутов с классом .phone

    // ---------------------------------------------------------------------

    // AJAX FORM
    $(".send-form").click(function () {
        // указываем класс по которому будет идти клик
        var form = $(this).closest("form"); // заганяем ближайшую форму в переменную

        if (form.valid()) {
            // проверяем форму на валидность
            form.css("opacity", ".5"); // сделаем ее полупрозрачной на момент
            var actUrl = form.attr("action");

            $.ajax({
                url: actUrl,
                type: "post",
                dataType: "html",
                data: form.serialize(),
                success: function (data) {
                    form.html(data);
                    form.css("opacity", "1"); // вернем видимость
                    //form.find('.status').html('форма отправлена успешно');
                    //$('#myModal').modal('show') // для бутстрапа
                },
                error: function () {
                    form.find(".status").html("серверная ошибка");
                },
            });
        }
    });
    // END AJAX FORM

    // ---------------------------------------------------------------------

    // начало скрипт табов //
    $("ul.tabs__caption").on("click", "li:not(.active)", function () {
        $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .closest("div.tabs")
            .find("div.tabs__content")
            .removeClass("active")
            .eq($(this).index())
            .addClass("active");
    });
    // конец скрипт табов //

    // ---------------------------------------------------------------------

    //  Плавный скролл к секции. Пример: <a href="#" class="scroll" data-target=".slide-1">Slide</a>
    $(".scroll").click(function (e) {
        e.preventDefault();
        var target = $(this).data("target");

        // на случай закрытия бургер меню: $('#burger-menu').click();

        $("html, body").animate({
                scrollTop: $(target).offset().top - 30,
            },
            400
        );
    });

    // ---------------------------------------------------------------------

    // Counter -----------------------
    /*
      var timeSpend = 86400000 * 50;

      if ($.cookie('firstOpen') != undefined) {
          var interval = ((new Date()).getTime() - $.cookie('firstOpen'));
          if (interval > timeSpend) {
              timeSpend = 0;
          } else {
              timeSpend -= interval;
          }
      } else {
          $.cookie('firstOpen', (new Date()).getTime());
      }

      $('.clock').countdown({
          until: timeSpend / 1000,
          format: 'DHMS'
      });
      */

    /*
      //var now = new Date();
      //var tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate()+1);
      
      var now = parseInt(nowDateTime);
      var end = parseInt(endDateTime);
      
      if ( now > end ) {
      	hideBlock();
      }

      var diff = end - now;
      var timeSpend = Math.round(diff);

      $('.clock').countdown({until: timeSpend, format: 'DHM', onExpiry: hideBlock});
      */
});

/*
	900 		- 200
	screeHeight	- X
*/
var screeHeight = $(window).height();
var offSet = 200;

if (screeHeight > 930) {
    offSet = 200;
} else {
    offSet = (screeHeight * 200) / 900;
    offSet = offSet.toFixed();
}

wow = new WOW({
    animateClass: "animated",
    offset: offSet,
    callback: function (box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
    },
});

wow.init();

// ---------------------------------------------------------------------


// ниже идет скрипт ютуб плеера, пример вставки: <div class="video-bl" data-video="zpOULjyy-n8"></div>
/*
var players = new Array();

$(document).ready(function () {
  $(document).on("click", ".yt-toggle-play", function () {
    var playBtn = $(this);
    var plBlock = playBtn.closest(".video-bl");
    var videoBlockId = plBlock.find(".embed-responsive-item").attr("id");

    playBtn.addClass("in-process");

    // Сначала останавливаем все плееры
    $(players).each(function () {
      let state = this.getPlayerState();

      if (state === 1) {
        this.pauseVideo();
      }

      $("#" + this.videoBlockId)
        .closest(".video-bl")
        .find(".yt-toggle-play")
        .removeClass("c-hide");
    });

    // Если плеер уже инициализирован
    if (plBlock.find("iframe").length) {
      $(players).each(function () {
        if (this.videoBlockId == videoBlockId) {
          var state = this.getPlayerState();

          if (state === 1) {
            this.pauseVideo();
            playBtn.removeClass("c-hide");
          } else {
            playBtn.addClass("c-hide");
            this.playVideo();
          }
        }
      });
      playBtn.removeClass("in-process");

      // Иначе инициализируем
    } else {
      var videoID = plBlock.data("video");

      var player = new YT.Player(videoBlockId, {
        playerVars: {
          controls: 0,
          showinfo: 0,
          rel: 0,
          autoplay: 0,
        },
        videoId: videoID,
      });

      player.videoBlockId = videoBlockId;

      players.push(player);

      var playVideoInt = setInterval(function () {
        $(players).each(function () {
          if (this.videoBlockId == videoBlockId && this.getPlayerState()) {
            clearInterval(playVideoInt);

            playBtn.addClass("c-hide");

            var state = this.getPlayerState();

            if (state === 1) {
              this.pauseVideo();
            } else {
              this.playVideo();
            }
          }
        });
        playBtn.removeClass("in-process");
      }, 200);
    }
  });
});

function onYouTubeIframeAPIReady() {
  $(".video-bl").each(function (key) {
    let videoID = $(this).data("video");
    let bgImage = $(this).data("bg");
    let videoBlockId = "player" + key;

    if (!videoID) {
      return false;
    }

    if (bgImage) {
      var bgImageUrl = bgImage;
    } else {
      var bgImageUrl = "https://img.youtube.com/vi/" + videoID + "/0.jpg";
    }

    $(this).html(
      '<div class="embed-responsive embed-responsive-16by9"><div class="embed-responsive-item" id="' +
        videoBlockId +
        '"></div><div class="yt-toggle-play" style="background-image: url(' +
        bgImageUrl +
        ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="play-icn"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></div></div>'
    );
  });
}

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
*/
