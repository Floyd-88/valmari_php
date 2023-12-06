<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style_calendar.css"/>

    <title>Расписание</title>
  </head>
  <body>
   <!-- header -->
   <?php require("./layout/header.php") ?>
  <!-- ----- -->

    <div class="sec_1">
      <div class="container">
        <div class="t1">Рассписание</div>

        <div class="block">
          <div class="tab">
            <div class="tab_1">
              <ul>
                <li class="active">Курсы обучения</li>
                <li>Вебинары</li>
              </ul>
            </div>

            <div class="tab_2">
              <ul>
                <li class="active">Москва</li>
                <li>Краснодар</li>
                <li>Астрахань</li>
                <li>Элиста</li>
                <li>Смоленск</li>
                <li>Иркустк</li>
              </ul>
            </div>
          </div>

          <div class="google_calendar">
            <img src="./img/google.png" alt="google_calendar" />
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php require("./layout/footer.php") ?>
    <!-- ----- -->
  </body>
</html>
