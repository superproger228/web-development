<!DOCTYPE html>
<html lang="ru">

  <head>
    <title>Page about me</title>
    <link rel="stylesheet" href="css/main_style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic"
          rel="stylesheet"/>
    <meta charset="UTF-8"/>
  </head>

  <body>
    <div class="container">
      <header>
        <div class="menu">
          <a href=#profile>
            <span class="about_me">Обо мне</span>
          </a>
          <a href=#hobby>
            <span class="my_hobby">Мое хобби</span>
          </a>
          <a href=#films>
            <span class="favourite_films">Любимые фильмы</span>
          </a>
        </div>
      </header>
      <div class="profile" id="profile">
        <img src="images/my_photo.png" alt="Моя фотография" class="my_photo"/>
        <div class="quote">
          <p class="citation">
            Мы берем на себя много, потому что<br/> мало чего боимся
          </p>
          <p class="author">
            — Том Демарко. Deadline
          </p>
        </div>
      </div>
      <div class="about_info">
        <div class="main_info">
          <h1>Jane Doe</h1>
          <img class="img_line" src="images/line.png" alt="Линия"/>
          <p class="text_about_me">
            В 1930-е годы прошлого века физик Джордж Гамоу из университета штата Колорадо начал публиковать мини-сериал
            рассказов о неком мистере Томпкинсе, банковском клерке средних лет. Мистер Томпкинс, как явствовало из этих
            историй, интересовался современной наукой.
          </p>
          <h2 id="hobby">Мое хобби</h2>
          <p class="text_about_me">
            Он регулярно посещал вечерние лекции местного профессора и, разумеется, всегда засыпал на самом интересном
            месте.А когда просыпался, то обнаруживал себя в каком-нибудь параллельном мире, где один из основных законов
            физики действовал не так, как в его мире.
          </p>
          <a href="https://vk.com/id58690866" class="vk_link">
            <span class="vk_link_underline">Напиши мне</span>->
          </a>
        </div>
        <div class="lists">
          <h2>Любимые писатели:</h2>
          <ul class="favourite">
            <li>Айзек Азимов</li>
            <li>Говард Лавкрафт</li>
            <li>Дмитрий Глуховский</li>
            <li>Чак Паланик</li>
          </ul>
          <h2>Любимые фильмы:</h2>
          <ol class="favourite">
            <li>Шоу Трумэна</li>
            <li>Малхолланд Драйв</li>
            <li>Семь жизней</li>
            <li>Гравитация</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="big_container">
      <h2 id="films">Любимые фильмы</h2>
      <div class="about_films">
        <div class="first_film">
          <img src="images/film_escape.jpg" alt="Фильм"/>
          <h4 class="film_name">Побег из Шоушенка</h4>
          <p class="description">
            Успешный банкир Энди Дюфрейн обвинен в убийстве собственной жены и ее любовника. Оказавшись в тюрьме
            под названием Шоушенк, он сталкивается с жестокостью и беззаконием, царящими по обе стороны решетки.
            Каждый, кто попадает в эти стены, становится их рабом до конца жизни. Но Энди, вооруженный живым
            умом и доброй душой, отказывается мириться с приговором судьбы и начинает разрабатывать невероятно
            дерзкий план своего освобождения.
          </p>
        </div>
        <div class="second_film">
          <img src="images/film_anesthesia.jpg" alt="Фильм"/>
          <h4 class="film_name">Наркоз</h4>
          <p class="description">
            Клай Бересфорд вынужден лечь под нож. Однако в процессе операции на сердце он неожиданно приходит в
            себя. Находясь в парализованном состоянии, будучи не в силах пошевелить ни рукой, ни ногой, он, тем
            не менее, чувствует каждое касание скальпеля к своей плоти…
          </p>
        </div>
        <div class="third_film">
          <img src="images/film_astral.jpg" alt="Фильм"/>
          <h4 class="film_name">Астрал</h4>
          <p class="description">
            Джош и Рене переезжают со своими детьми в новый дом, но не успевают толком распаковать вещи, как
            начинаются странные события. Необъяснимо перемещаются предметы, в детской звучат странные звуки… Но
            в настоящий ужас приходят родители, когда их десятилетний сын Далтон впадает в кому. Все усилия
            врачей в больнице помочь мальчику безуспешны
          </p>
        </div>
        <div class="fourth_film">
          <img src="images/film_gravitation.jpg" alt="Фильм"/>
          <h4 class="film_name">Гравитация</h4>
          <p class="description">
            Доктор Райан Стоун, блестящий специалист в области медицинского инжиниринга, отправляется в свою
            первую космическую миссию под командованием ветерана астронавтики Мэтта Ковальски, для которого этот
            полет — последний перед отставкой. Но во время, казалось бы, рутинной работы за бортом случается
            катастрофа.<br/>Шаттл уничтожен, а Стоун и Ковальски остаются совершенно одни; они находятся в
            связке друг с другом, и все, что они могут, — это двигаться по орбите в абсолютно черном
            пространстве без всякой связи с Землей и какой-либо надежды на спасение.
          </p>
        </div>
      </div>
      <button class="green_button">Все фильмы</button>
    </div>
      <?php include 'form.tpl.php' ?>
    <footer>
      <p>
        © 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»
      </p>
    </footer>
  </body>

</html>
