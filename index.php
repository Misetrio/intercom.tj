﻿﻿<html>
<head>

    <?php

    require_once("header.php"); ?>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter47360869 = new Ya.Metrika2({
                        id: 47360869,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/47360869" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
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
<table border="0"><tr>
						<td class="ontent"><h2 align="center"><font color="#224E97"><b><strong>Добро пожаловать в мир Интернет!</strong></font></b></h2>
						</td>
					</tr>
					<tr>
						<td class="ontent"><center><!-- Акция в честь Навруза закомментирована<img width="630" height="518" src="images/navruz.jpg" class="img-polaroid" style="margin:12px 0px;">-->
			<font color="red"><h1>АКЦИЯ!!!</h1></font><br>
			<h2>При подключении с 15 мая по 15 июня <br> <strong><font color="red">10ГБ интернета БЕСПЛАТНО!</font></strong></h2><br></cenetr>
                        <h3 align="justify">4G-Модем с высокоскоростным беспроводным доступом к интернет до 15 мбит/с. Просто поставьте 4G модем со встроенным wi-fi роутером рядом с окном и ваша квартира, дом, офис будет покрыт wi-fi с возможностью подключения до 32 устройств (телефоны, планшеты, ноутбуки). 
			<br>Стоимость модема 4 в 1 - 712с.Если Вам необходим выделенный канал или стабильная и высокая скорость, то мы рекомендуем Вам установку внешней антенны<h3></td>
					</tr>
					</table>


                <div class="lead">
                    <h2>Тарифы 4G беспроводной интернет</h2>
                    <h3>Беспроводной 4G модем 4 в 1</h3>
                    <h3>Бесплатное подключение</h3>
                    <h3>Ночью трафик бесплатен </h3>
		<h3>Предоставляем устройства до 3-х дней для теста</h3>
		<h3>В течении 3-х дней Вы можете протестировать скорость и качество связи!!!</h3>

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

                    <video id="my-video" class="video-js" controls  width="640" height="264"
                           poster="images/reklama.jpg" data-setup="{}">
                        <source src="http://intercom.tj/video/5a6f46b993317.mp4" type='video/mp4'>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>

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

    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
</div>


<?php require_once("footer.php"); ?>

</body>
</html>