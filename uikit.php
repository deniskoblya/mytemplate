<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<meta name="viewport" content="width=1200px">-->

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

  <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />

  <style>
    .w50 {
      border: 1px solid #dcd8d8;
      width: 50%;
      padding: 30px;
    }

    .yellow {
      background: yellow;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div id="mobile-menu">
      <div class="block df">
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
            UIkit
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
    <section class="ui-kit">
      <div class="container">
        <div class="ui-kit-block">
          <div class="df">
            <div class="w50 ui-title">Код</div>
            <div class="w50 ui-title">Результат</div>
          </div>
          <div class="ui-line df">
            <div class="w50">
              <xmp>
<div class="custom-select" style="width:200px;">
  <select>
    <option value="0">Select car:</option>
    <option value="1">Audi</option>
    <option value="2">BMW</option>
    <option value="3">Citroen</option>
  </select>
</div>
              </xmp>
            </div>
            <div class="w50">
              <p class="yellow">
                Данный код будет преобразовывать select в div со всеми значениями option, стили проаисаны в
                <b>less/helpclass.less</b>
              </p>
              <div class="custom-select" style="width:200px;">
                <select>
                  <option value="0">Select car:</option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                </select>
              </div>
            </div>
          </div>



          <div class="df">
            <div class="w50">
              <xmp>
<div class="tabs">
  <ul class="tabs__caption">
    <li class="tabs__item">Таб 1</li>
    <li class="tabs__item">Таб 2</li>
    <li class="tabs__item">Таб 3</li>
  </ul>
  <div class="tabs__content">
    Контент 1 таба
  </div>
  <div class="tabs__content">
    Контент 2 таба
  </div>
  <div class="tabs__content">
    Контент 3 таба
  </div>
</div>
              </xmp>
            </div>
            <div class="w50">
              <div class="tabs">
                <ul>
                  <li class="tabs__item">Таб 1</li>
                  <li class="tabs__item">Таб 2</li>
                  <li class="tabs__item">Таб 3</li>
                </ul>
                <div class="tabs__content">
                  Контент 1 таба
                </div>
                <div class="tabs__content">
                  Контент 2 таба
                </div>
                <div class="tabs__content">
                  Контент 3 таба
                </div>
              </div>
            </div>
          </div>
          <div class="df">
            <div class="w50">
              <xmp>
<div class="accordeon">
  <div class="accordeon__line">
    Мой вопрос 1
  </div>
  <div class="accordeon__content">
    Мой ответ 1
  </div>
  <div class="accordeon__line">
    Мой вопрос 2
  </div>
  <div class="accordeon__content">
    Мой ответ 2
  </div>
  <div class="accordeon__line">
    Мой вопрос 3
  </div>
  <div class="accordeon__content">
    Мой ответ 3
  </div>
</div>
              </xmp>
            </div>
            <div class="w50">
              <div class="accordeon">
                <div class="accordeon__line">
                  Мой вопрос 1
                </div>
                <div class="accordeon__content">
                  Мой ответ 1
                </div>
                <div class="accordeon__line">
                  Мой вопрос 2
                </div>
                <div class="accordeon__content">
                  Мой ответ 2
                </div>
                <div class="accordeon__line">
                  Мой вопрос 3
                </div>
                <div class="accordeon__content">
                  Мой ответ 3
                </div>
              </div>
            </div>
          </div>
          <div class="df">
            <div class="w50">
              <xmp>
<button class="md-trigger" data-modal="modal-1">
  Модальное окно
</button>
              </xmp>
            </div>
            <div class="w50">
              <p class="yellow">
                Модальные окна реализованы таким образом что каждое модально екно создается в файле <b>modal.php</b> у
                каждого модального окна
                должен быть свой id, а кнопка которая его вызывает имеет в себе <b>data-modal="он равен идентификатору
                  модального окна"</b> (смотри код слева) + класс <b>md-trigger</b>, как
                строить окна читай далее в <b>modal.php</b>
              </p>
              <button class="md-trigger" data-modal="modal-1">Модальное окно</button>
            </div>
          </div>
          <div class="df">
            <div class="w50">
              <xmp>
<a href="#" class="scroll" data-target=".wrapper">
  Slide
</a>
              </xmp>
            </div>
            <div class="w50">
              <p class="yellow">Для слайда к определенной секции должен быть класс scroll, а в data-target указан тот
                класс к которому должно слайдить</p>
              <a href="#" class="scroll" data-target=".wrapper">Slide</a>
            </div>
          </div>
          <div class="df">
            <div class="w50">
              <xmp>
                код
              </xmp>
            </div>
            <div class="w50">
              результат
            </div>
          </div>

          <div class="df">
            <div class="w50">
              <xmp>
                код
              </xmp>
            </div>
            <div class="w50">
              результат
            </div>
          </div>

          <div class="df">
            <div class="w50">
              <xmp>
                код
              </xmp>
            </div>
            <div class="w50">
              результат
            </div>
          </div>

          <div class="df">
            <div class="w50">
              <xmp>
                код
              </xmp>
            </div>
            <div class="w50">
              результат
            </div>
          </div>

          <div class="df">
            <div class="w50">
              <xmp>
                код
              </xmp>
            </div>
            <div class="w50">
              результат
            </div>
          </div>

          <div class="df">
            <div class="w50">
              <xmp>
                код
              </xmp>
            </div>
            <div class="w50">
              результат
            </div>
          </div>


        </div>
      </div>
    </section>

  </div>
  <?php require "modal.php"?>
  <?php require "footer.php"?>