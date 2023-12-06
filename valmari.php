<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style_valmari.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Valmari</title>
</head>

<body>

    <!-- header -->
    <?php require("./layout/header.php") ?>
    <!-- ----- -->

    <div class="sec_1">
        <div class="container">
            <p class="text_1">Бесплатный вебинар</p>
            <p class="text_2">ПРОФЕССИЯ КОСМЕТОЛОГ</p>
            <p class="text_3">
                Приглашаем на бесплатный вебинар для профессиональных косметологов и
                интересующихся этой профессией
            </p>

            <div class="block_btns">
                <button class="btn btn_green">Зарегистрироваться</button>
                <button class="btn btn_trnsprnt">Узнать подробнее</button>
            </div>
        </div>
        <img class="woman" src="./img/woman.png" alt="woman" />
    </div>

    <div class="sec_2">
        <div class="container">
            <div class="block">
                <div class="item">
                    <div class="digit">4000+</div>
                    <div class="text">
                        Сертификатов <br />
                        мы выдали
                    </div>
                </div>
                <div class="item">
                    <div class="digit">3500+</div>
                    <div class="text">
                        Моделей <br />
                        в нашей базе
                    </div>
                </div>
                <div class="item">
                    <div class="digit">1500+</div>
                    <div class="text">
                        Специалистов <br />
                        мы обучили
                    </div>
                </div>
                <div class="item">
                    <div class="digit">5500+</div>
                    <div class="text">
                        Довольных <br />
                        клиентов
                    </div>
                </div>
            </div>

            <div class="title_course">Курсы обучения</div>
        </div>

        <div class="container">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card card_indigo">
                            <img class="bird" src="./img/icons/bird.svg" alt="bird" />
                            <div class="container_2">
                                <div class="t1">Курс для медиков</div>
                                <div class="t2">
                                    Канюльные <br />
                                    техники
                                </div>
                                <div class="t3">Оффлайн</div>
                                <div class="t4">1 - 4 мая</div>
                                <div class="block_t5">
                                    <p class="text">
                                        Краткое описание Что-то о курсе Пару фактов Краткое
                                        описание
                                    </p>
                                    <img class="face" src="./img/face_1.png" alt="face" />
                                </div>
                                <div class="t6">Свободно 2 из 15 мест</div>
                            </div>

                            <div class="block_reg">
                                <a class="reg" href="#">Зарегистрироваться</a>
                                <a class="description" href="./course.php">Подробнее</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card card_green">
                            <img class="bird" src="./img/icons/bird.svg" alt="bird" />
                            <div class="container_2">
                                <div class="t1">Курс для медиков</div>
                                <div class="t2">Мезотерапия <br />и биоревителизация</div>
                                <div class="t3">Онлайн</div>
                                <div class="t4">15 - 20 мая</div>
                                <div class="block_t5">
                                    <p class="text">
                                        Краткое описание Что-то о курсе Пару фактов Краткое
                                        описание
                                    </p>
                                    <img class="face" src="./img/face_1.png" alt="face" />
                                </div>
                                <div class="t6">Свободно 2 из 15 мест</div>
                            </div>

                            <div class="block_reg">
                                <a class="reg" href="#">Зарегистрироваться</a>
                                <a class="description" href="./course.php">Подробнее</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card card_blue">
                            <img class="bird" src="./img/icons/bird.svg" alt="bird" />
                            <div class="container_2">
                                <div class="t1">Курс для медиков</div>
                                <div class="t2">
                                    Биогель - новое <br />
                                    в косметологии
                                </div>
                                <div class="t3">Мастер-класс</div>
                                <div class="t4">2 - 5 августа</div>
                                <div class="block_t5">
                                    <p class="text">
                                        Краткое описание Что-то о курсе Пару фактов Краткое
                                        описание
                                    </p>
                                    <img class="face_2" src="./img/face_2.png" alt="face" />
                                </div>
                                <div class="t6">Свободно 2 из 15 мест</div>
                            </div>

                            <div class="block_reg">
                                <a class="reg" href="#">Зарегистрироваться</a>
                                <a class="description" href="./course.php">Подробнее</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card card_indigo">
                            <img class="bird" src="./img/icons/bird.svg" alt="bird" />
                            <div class="container_2">
                                <div class="t1">Курс для медиков</div>
                                <div class="t2">
                                    Канюльные <br />
                                    техники
                                </div>
                                <div class="t3">Оффлайн</div>
                                <div class="t4">1 - 4 мая</div>
                                <div class="block_t5">
                                    <p class="text">
                                        Краткое описание Что-то о курсе Пару фактов Краткое
                                        описание
                                    </p>
                                    <img class="face" src="./img/face_1.png" alt="face" />
                                </div>
                                <div class="t6">Свободно 2 из 15 мест</div>
                            </div>

                            <div class="block_reg">
                                <a class="reg" href="#">Зарегистрироваться</a>
                                <a class="description" href="./course.php">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need pagination -->
                <div class="pagination swiper-pagination-custom"></div>
            </div>

            <!-- If we need navigation buttons -->
            <img class="slider__back" src="./img/back.png" alt="back" />
            <img class="slider__next" src="./img/next.png" alt="next" />
        </div>
    </div>

    <div class="sec_3">
        <div class="container">
            <div class="block">
                <div class="wrapper_img">
                    <img src="./img/Rectangle.png" alt="img" />
                </div>
                <div class="wrapper_text">
                    <div class="up">
                        <div class="t1">О нас</div>
                        <h3 class="t2">
                            <span>VALMARI</span> <br />
                            ВЕДУЩИЙ УЧЕБНЫЙ ЦЕНТР ЭСТЕТИЧЕСКОЙ КОСМЕТОЛОГИИ
                        </h3>
                        <div class="wrapper_t3">
                            <p class="t3">Описание может быть любое.</p>
                            <p class="t3">
                                Ведущий учебный центр эстетической косметологии.
                            </p>
                            <p class="t3">
                                Более 5 лет мы проводим курсы сертифицированные курсы
                                профессионального образования в области косметологии и
                                индустрии красоты, здоровья и молодости
                            </p>
                        </div>
                    </div>
                    <div class="down">
                        <a class="information" href="./about.php">Подробнее</a>
                        <a class="next" href="#"><img src="./img/Arrow.svg" alt="next" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sec_4">
        <div class="container">
            <h2 class="title">Обучение косметологов</h2>

            <div class="block">
                <div class="card card_1">
                    <a href="./courses.php">
                        <div class="text">
                            курсы <br />
                            косметологии
                        </div>
                        <div class="dark_fone">
                            <div class="description_course down">
                                <ul>
                                    <li>- эстетическая косметология</li>
                                    <li>- инъекционная косметология</li>
                                    <li>- лазерная косметология</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card card_2">
                    <a href="./courses.php">
                        <div class="text">онлайн обучение</div>
                        <div class="dark_fone">
                            <div class="description_course up">
                                <ul>
                                    <li>- эстетическая косметология</li>
                                    <li>- инъекционная косметология</li>
                                    <li>- лазерная косметология</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card card_3">
                    <a href="./courses.php">
                        <div class="text">мастер-классы</div>
                        <div class="dark_fone">
                            <div class="description_course up">
                                <ul>
                                    <li>- эстетическая косметология</li>
                                    <li>- инъекционная косметология</li>
                                    <li>- лазерная косметология</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card card_4">
                    <a href="./calendar.php">
                        <div class="text">расписание</div>
                        <div class="dark_fone">
                            <div class="description_course down">
                                <ul>
                                    <li>- эстетическая косметология</li>
                                    <li>- инъекционная косметология</li>
                                    <li>- лазерная косметология</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card card_5">
                    <a href="./sales.php">
                        <div class="text">акции</div>
                        <div class="dark_fone">
                            <div class="description_course up">
                                <ul>
                                    <li>- эстетическая косметология</li>
                                    <li>- инъекционная косметология</li>
                                    <li>- лазерная косметология</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="sec_5">
        <div class="container">
            <div class="block">
                <div class="block_text">
                    <div class="block_t">
                        <h3 class="t1">ВЕДЕМ НАБОР МОДЕЛЕЙ</h3>
                        <p class="t2">Мы предлагаем свои услуги для моделей.</p>
                        <p class="t2">
                            Выберите процедуру или несколько процедур и наш менеджер
                            проконсультирует васи назовет ближайшую дату, когда вы сможете
                            получить эту процедуру.
                        </p>
                    </div>
                    <div class="wrapper_btn">
                        <button>Стать моделью</button>
                    </div>
                </div>
                <div class="block_img">
                    <img src="./img/Rectangle_6.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="sec_6">
        <div class="container">
            <h3 class="t1">Мастер-классы</h3>
            <div class="t2">
                Мероприятия для повышения квалификации косметологов
            </div>
            <div class="wrapper">
                <div class="swiper_2">
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <div class="swiper-slide">
                            <div class="card">
                                <div class="master_wrapper">
                                    <img src="./img/Rectangle_7.png" alt="img_6" />
                                </div>
                                <div class="block_text">
                                    <div class="text">
                                        <div class="t3">3 ноября, 10:00-12:00</div>
                                        <p class="t4">
                                            10 возможностей неодимового лазера. Лазерный пилинг,
                                            удаление тату/татуажа
                                        </p>
                                        <div class="t5">Тренер: Юлия Щукина</div>
                                    </div>
                                    <div class="link_wrap">
                                        <div class="price">2000 руб</div>
                                        <div class="link">
                                            <a href="./courses.php">
                                                <img src="./img/arrow_19.svg" alt="next" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card">
                                <div class="master_wrapper">
                                    <img src="./img/Rectangle_8.png" alt="img_8" />
                                </div>
                                <div class="block_text">
                                    <div class="text">
                                        <div class="t3">20 ноября, 12:00-17:00</div>
                                        <p class="t4">
                                            Профессия косметолог. Семинар для новичков и
                                            профессионалов
                                        </p>
                                        <div class="t5">
                                            Спикеры: Марина Спивак, Алина Ядчишина, Елена
                                            Белогурова, Юлия Щукина
                                        </div>
                                    </div>
                                    <div class="link_wrap">
                                        <div class="price">Бесплатно</div>
                                        <div class="link">
                                            <a href="./courses.php">
                                                <img src="./img/arrow_19.svg" alt="next" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card">
                                <div class="master_wrapper">
                                    <img src="./img/Rectangle_7.png" alt="img_6" />
                                </div>
                                <div class="block_text">
                                    <div class="text">
                                        <div class="t3">3 ноября, 10:00-12:00</div>
                                        <p class="t4">
                                            10 возможностей неодимового лазера. Лазерный пилинг,
                                            удаление тату/татуажа
                                        </p>
                                        <div class="t5">Тренер: Юлия Щукина</div>
                                    </div>
                                    <div class="link_wrap">
                                        <div class="price">2000 руб</div>
                                        <div class="link">
                                            <a href="./courses.php">
                                                <img src="./img/arrow_19.svg" alt="next" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card">
                                <div class="master_wrapper">
                                    <img src="./img/Rectangle_8.png" alt="img_8" />
                                </div>
                                <div class="block_text">
                                    <div class="text">
                                        <div class="t3">20 ноября, 12:00-17:00</div>
                                        <p class="t4">
                                            Профессия косметолог. Семинар для новичков и
                                            профессионалов
                                        </p>
                                        <div class="t5">
                                            Спикеры: Марина Спивак, Алина Ядчишина, Елена
                                            Белогурова, Юлия Щукина
                                        </div>
                                    </div>
                                    <div class="link_wrap">
                                        <div class="price">Бесплатно</div>
                                        <div class="link">
                                            <a href="./courses.php">
                                                <img src="./img/arrow_19.svg" alt="next" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card">
                                <div class="master_wrapper">
                                    <img src="./img/Rectangle_7.png" alt="img_6" />
                                </div>
                                <div class="block_text">
                                    <div class="text">
                                        <div class="t3">3 ноября, 10:00-12:00</div>
                                        <p class="t4">
                                            10 возможностей неодимового лазера. Лазерный пилинг,
                                            удаление тату/татуажа
                                        </p>
                                        <div class="t5">Тренер: Юлия Щукина</div>
                                    </div>
                                    <div class="link_wrap">
                                        <div class="price">2000 руб</div>
                                        <div class="link">
                                            <a href="./courses.php">
                                                <img src="./img/arrow_19.svg" alt="next" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination swiper-pagination-custom"></div>
                    <img class="slider__back slider__back_2" src="./img/back.png" alt="back" />
                    <img class="slider__next slider__next_2" src="./img/next.png" alt="next" />
                </div>
            </div>
        </div>
    </div>

    <div class="sec_7">
        <div class="container">
            <h3 class="t1">Почему мы</h3>
            <div class="block_card">
                <div class="card">
                    <div class="title_card">Преподаватели</div>
                    <div class="text_card">
                        <p>
                            Наши преподаватели имеют многолетний опыт в сфере косметологии и
                            совмещают преподовательскую деятельность с практической работой
                            в салонах красоты и других специализированных центрах.
                        </p>
                    </div>
                    <div class="num_card">01</div>
                </div>

                <div class="card card_green">
                    <div class="title_card">Сертификаты</div>
                    <div class="text_card">
                        <p>
                            Удостоверение, сертификат и свидетельство полученные у нас по
                            окончанию курсов, работают как лучшая "рекомендация" при приеме
                            на работу
                        </p>
                    </div>
                    <div class="num_card">02</div>
                </div>

                <div class="card">
                    <div class="title_card">Повышение квалификации</div>
                    <div class="text_card">
                        <p>
                            Ежегодно, больше 2000 косметологов повышают квалификацию и
                            уровень профессионализма в просторных кабинетах нашего центра.
                        </p>
                    </div>
                    <div class="num_card">03</div>
                </div>
            </div>
        </div>
    </div>

    <div class="sec_8">
        <div class="container">
            <h3 class="t1">Специальные предложения</h3>
            <div class="wrapper">
                <div class="swiper_3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="./sales.php"><img src="./img/Rectangle_9.png" alt="img_9" /></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="./sales.php"><img src="./img/Rectangle_10.png" alt="img_10" /></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="./sales.php"><img src="./img/Rectangle_11.png" alt="img_11" /></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="./sales.php"><img src="./img/Rectangle_9.png" alt="img_9" /></a>
                            </div>
                        </div>
                    </div>

                    <!-- If we need pagination -->
                    <div class="pagination swiper-pagination-custom"></div>

                    <!-- If we need navigation buttons -->
                    <img class="slider__back slider__back_3" src="./img/back.png" alt="back" />
                    <img class="slider__next slider__next_3" src="./img/next.png" alt="next" />
                </div>
            </div>
        </div>
    </div>

    <div class="sec_9">
        <div class="container">
            <?php require("./blocks/form.php") ?>
        </div>
    </div>

    <!-- footer -->
    <?php require("./layout/footer.php") ?>
    <!-- ----- -->

    <script src="./js/swiper.js"></script>
</body>

</html>