<html>
<head>

    <?php

    require_once("header.php"); ?>

</head>
<body id="pageBody">

<?php require_once("main.php"); ?>

<div id="decorative1" style="position:relative">
    <div class="container">

        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">

                    <div id="headerSeparator"></div>

                    <div id="divHeaderText" class="page-content">
                        <!--<div id="divHeaderLine1">Your Header Text Here!</div><br />
                        <div id="divHeaderLine2">2nd line header text for calling extra attention to featured content..</div><br />-->
                        <!--Строка закомментирована<div id="divHeaderLine3"><a class="btn btn-large btn-default" href="about.php">О нас</a></div>-->
                    </div>

                    <div id="headerSeparator2"></div>

                </div>
            </div>

        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="row-fluid">

            <div class="span12" id="divMain">

                <div class="lead">
                    <h2>Тарифы 4G беспроводной интернет</h2>
                    <h3>Беспроводной 4G модем 4 в 1</h3>
                    <h3>Бесплатное подключение</h3>
                    <h3>Ночью трафик бесплатен </h3>
                    <a href="4g.php" title="">Перейти</a>
                </div>

                <hr style="margin:45px 0 35px"/>

                <div class="lead">
                    <h2>Зона покрытия</h2>
                    <h3>г. Душанбе, р-н Рудаки, города Вахдат, Худжанд, Бустон и прилегающие к городам районы до 5-6
                        км.</h3>
                    <a href="4g_zone.php" title="">Карта зоны покрытия г. Душанбе</a>
                </div>

                <hr style="margin:45px 0 35px"/>

                <div class="lead">

                    <br><br>Для того ,чтобы подключиться просто оставьте заявку <a href="#win2"
                                                                                   class="button button-red">Здесь</a> в
                    любое время , или позвоните по номеру 2217095,427800099 с 9 до 18 ч</h3>
                    <!-- блок кнопок на вызов модальных окон -->
                    <div style="text-align: center;">
                        <a href="#win2" class="button button-red">ФОРМА ЗАЯВКИ</a>
                    </div>


                    <!-- Модальное окно 2 -->
                    <a href="#x" class="overlay" id="win2"></a>
                    <div class="popup">
                        <h2 style="text-align: center;">ФОРМА ЗАЯВКИ!</h2>
                        <div style="text-align: center;font-size: 18px;">
                            <?php

                            if ($_GET['mess'] == "OK") {
                                echo "<p style='color:forestgreen;'>Сообщение успешно отправлено, свами скоро свяжуться</p>";
                            } elseif ($_GET['mess'] == "ERROR") {
                                echo "<p style='color:red;'>Сообщение не отправилось, пожалуйста попробуйте позже</p>";
                            }
                            ?>
                        </div>
                        <p style="text-align: center;">
                            Заполните заявку и наши специалисты прибудут к вам для установки,или тестирования ,
                            после которго вы примите решение о подключении
                            ТЕСТОВЫЙ ВЫЗОВ АБСОЛЮТНО БЕСПЛАТНЫЙ!
                        </p>
                        <div>
                            <form class="contact_form" action="contact-form.php" method="post">
                                <div>
                                    <label for="name">Имя*:</label>
                                    <input type="text" name="name" placeholder="Введите ваше имя" required/>
                                </div>
                                <div>
                                    <label for="tel">номер телефона*:</label>
                                    <input type="tel" name="tel" placeholder="Введите номер телефона" required/>
                                </div>
                                <div>
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" placeholder="Введите электронный адрес"/>
                                </div>

                                <div>
                                    <label for="address">Адресс подключения:</label>
                                    <input type="text" name="address" placeholder="Адресс подключения">
                                </div>
                                <div>
                                    <label for="text">Желательное время:</label>
                                    <input type="date" name="datetime" placeholder="Желательное время"/>
                                </div>
                                <div>
                                    <label for="message">Вопрос или коментарий:</label>
                                    <input type="text" name="message" placeholder="Комментарий"/>
                                </div>
                                <div>
                                    <label for="message"> Вы желаете подключиться через :</label>

                                    <input type="radio" value="домашнее беспроводное устройство" name="type"> домашнее
                                    беспроводное устройство 4 в 1 (WiFi,NGN,4 портовый свич ,4G) /
                                    <input type="radio" value="11 dbi" name="type"> внешняя антенна 11 dbi /
                                    <input type="radio" value="19 dbi" name="type"> внешняя антенна 19 dbi
                                </div>
                                <div>
                                    <label for="message"> Напишите результат вычисления:</label>
                                    2+9 = <input type="text" name="result" style="width: 100px;"
                                                 placeholder="Результат"/>

                                </div>
                                <div style="text-align: center;">
                                    <button class="submit" type="submit">Отправить сообщение</button>
                                </div>
                            </form>
                        </div>


                        <p style="text-align: center;">
                            Заявки на беспроводное 4G подключение принимаются из г Душанбе,района Рудаки ,Вахдат В
                            ближайшее время будут другие зоны покрытия
                        </p>

                        <a class="close" title="Закрыть" href="#close"></a>
                    </div>
                </div>
                <div class="lead">
                    <hr style="margin:45px 0 35px"/>

                    <h2>Отзывы</h2>

<!--
                    <video class="mediaPlayer" controls="controls" poster="images/reklama.jpg">
                        <source src="video/intercom.ogv" type='video/ogg; codecs="theora, vorbis"'>
                        Ваш браузер не поддерживает проигрывние видео. Установите браузер <a
                            href="https://www.google.ru/intl/ru/chrome/?brand=CHBD&ds_kid=43700027443936350&gclid=Cj0KCQiAzrTUBRCnARIsAL0mqcwOYveX9r_5k-bAKGJ6ZQLYOwMYWIUwdU7-VL95EVjSHB_E3EUdYzsaArYoEALw_wcB&gclsrc=aw.ds&dclid=CKam-4HOuNkCFRKCGQodovgN7A"
                            target="_blank">Google Chrome</a>
                        или <a href="https://www.mozilla.org/ru/firefox/new/" target="_blank">Mozilla FireFox</a> для
                        просмотра этого видео.<br>
                        <a href="http://77.244.146.133:8980/files/raznoe/Reklama.flv">Скачайте видео</a>
                        <a style="color: " #3ca05b"; margin-top:0px;" href="http://www.speedtest.net/result/7057184168">
                        <h3>ТЕСТ СОЕДИНЕНИЯ</h3></a>
                    </video>-->
                    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                           poster="images/reklama.jpg" data-setup="{}">
                        <source src="video/intercom.mp4" type='video/mp4'>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                    <!--<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                           poster="images/reklama.jpg" data-setup="{}">
                        <source src="video/intercom.mp4" type='video/mp4'>
                        <source src="video/intercom.flv" type='video/flv'>
                        <source src="video/intercom.ogv" type='video/ogg; codecs="theora, vorbis"'>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                        Ваш браузер не поддерживает проигрывние видео. Установите браузер <a
                            href="https://www.google.ru/intl/ru/chrome/?brand=CHBD&ds_kid=43700027443936350&gclid=Cj0KCQiAzrTUBRCnARIsAL0mqcwOYveX9r_5k-bAKGJ6ZQLYOwMYWIUwdU7-VL95EVjSHB_E3EUdYzsaArYoEALw_wcB&gclsrc=aw.ds&dclid=CKam-4HOuNkCFRKCGQodovgN7A"
                            target="_blank">Google Chrome</a>
                        или <a href="https://www.mozilla.org/ru/firefox/new/" target="_blank">Mozilla FireFox</a> для
                        просмотра этого видео.<br>
                        <a href="http://77.244.146.133:8980/files/raznoe/Reklama.flv">Скачайте видео</a>
                        <a style="color: " #3ca05b"; margin-top:0px;" href="http://www.speedtest.net/result/7057184168">
                        <h3>ТЕСТ СОЕДИНЕНИЯ</h3></a>
                    </video> -->
                </div>

                <!--Акция на Навруз закомментирована<div class="lead">
                <hr style="margin:45px 0 35px" />
                            <center><img src="images/navruz.jpg" class="img-polaroid" style="margin:12px 0px;">
                            <h2>При подключении с 18 по 31 марта <br> 1 месяц интернета <strong>БЕСПЛАТНО!</strong></h2>(пакет 10Гб днем и ночной трафик с 24<sup>00</sup> до 7<sup>00</sup> бесплатно.)<br>
                <h3>Встречайте весну с новой моделью 4G модема "кексик" с высокоскоростным беспроводным доступом к интернет до 15 мбит/с . Просто поставьте 4G модем со встроенным wi-fi роутером рядом с окном и ваша квартира, дом, офис будет покрыт wi-fi с возможностью подключения до 32 устройств (телефоны, планшеты, ноутбуки).
                            <br>Стоимость модема 4 в 1 - 712с.
                </div>-->
            </div>

        </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<?php require_once("footer.php"); ?>


</body>
</html>