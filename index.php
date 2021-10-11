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
                <div class="block df jb">
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
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1">
            <div class="container">

            </div>
        </section>
        <section class="sec2">
            <div class="container">

            </div>
        </section>
        <section class="sec3">
            <div class="container">

            </div>
        </section>
        <section class="sec4">
            <div class="container">

            </div>
        </section>
        <section class="sec5">
            <div class="container">
                
            </div>
        </section>
        <section class="help">
            <div class="container">
                <div class="tabs">
                    <ul class="tabs__caption">
                        <li class="tabs__item active">Таб 1</li>
                        <li class="tabs__item">Таб 2</li>
                        <li class="tabs__item">Таб 3</li>
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
            </div>
        </section>
        <footer>
            <div class="container">
                <p>footer</p>
            </div>
        </footer>
    </div>

    <?php require "modal.php"?>
    <?php require "footer.php"?>