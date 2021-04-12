<?php	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1300px">-->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
       <b>Если показывает ошибку в lessc.inc.php то нужно понизить версию PHP до 7.3</b>
        <div id="mobile-menu">
            <div class="block">
                <ul>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                </ul>
            </div>
        </div>

        <header>
            <div class="container">
                <div class="block">
                    <a class="logo" href="">
                        LOGO
                    </a>
                    <div class="menu">
                        <!-- Кнопка Мобильного Меню -->
                        <button id="burger-menu">
                            <div class="box box_item1"></div>
                            <div class="box box_item2"></div>
                            <div class="box box_item3"></div>
                        </button>
                        <!-- Кнопка Мобильного Меню -->
                        <ul>
                            <li><a href=""><span>Link</span></a></li>
                            <li><a href=""><span>Link</span></a></li>
                            <li><a href=""><span>Link</span></a></li>
                            <li><a href=""><span>Link</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section class="help">
            <div class="container">
                <div class="tabs">
                    <ul class="tabs__caption">
                        <li class="active">Таб 1</li>
                        <li class="">Таб 2</li>
                        <li class="">Таб 3</li>
                    </ul>
                    <div class="tabs__content active">
                        Контент 1 таба
                    </div>
                    <div class="tabs__content">
                        Контент 2 таба
                    </div>
                    <div class="tabs__content">
                        Контент 3 таба
                    </div>
                </div>
                <hr>
                <button class="md-trigger" data-modal="modal-1">Модальное окно</button>
                <hr>
                <div class="clock"></div>
            </div>
        </section>
    </div>
    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <h3>Модальные окна</h3>
            <div>
                <p> Это модальное окно. Вы можете выполнять следующие действия с ним:</p>
                <ul>
                    <li><strong>Читать:</strong> модальные окна, вероятно, несут важную текстовую информацию, так что не забудьте прочитать то, что в них написано.</li>
                    <li><strong>Смотреть:</strong> модальные окна несут визуальную информацию, на которую приятно смотреть.</li>
                    <li><strong>Закрыть:</strong> нажмите на кнопку, чтобы закрыть модальное окно.</li>
                </ul>
                <button class="md-close">Закрыть!</button>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div><!-- the overlay element -->

    <link rel="stylesheet" href="./assets/css/animate.css" type="text/css" />

    <!-- FOR MODAL -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>
    <script>
        var polyfilter_scriptpath = './assets/js/';

    </script>
    <script src="./assets/js/cssParser.js"></script>
    <script src="./assets/js/css-filters-polyfill.js"></script>
    <!-- FOR MODAL -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/jquery.maskedinput.js"></script>
    <script src="./assets/js/wow.min.js"></script>

    <!-- Counter -->
    <script src="./assets/js/counter/jquery.cookie.js"></script>
    <script src="./assets/js/counter/jquery.plugin.js"></script>
    <script src="./assets/js/counter/jquery.countdown.js"></script>
    <script src="./assets/js/counter/jquery.countdown-ru.js"></script>
    <script>
        var endDateTime = new Date();
        var nowDateTime = new Date(3600 * 24 * 1000);

    </script>
    <!-- End Counter -->

    <script src="./assets/js/script.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        /*
        var swiper = new Swiper('.slider', {
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: '.btn-next',
                prevEl: '.btn-prev',
            },
        });
        
        */

    </script>
</body>

</html>
