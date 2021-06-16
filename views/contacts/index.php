<?php include ROOT . '/views/layouts/header.php'; ?>




<div class="contacts">
    <div class="container-fluid">
        <div class="row">
            <div class="cont col-12  center-block">
                <h1 class="center-block">Наши контакты</h1>
            </div>
        </div>
        <div class="row">
            <div class="media contact-info col-12">
                <div class="icon">
                    <span class="contact-info__icon"><i class="ti-home"></i>Адрес:</span>
                </div>
                <div class="media-body">
                    <h3>Алтайский край, Барнаул, Социалистический проспекст, 128</h3>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="media contact-info col-12">
                <span class="contact-info__icon"><i class="ti-tablet"></i>Телефон:</span>
                <div class="media-body">
                    <h3>+7‒913‒098‒50‒00</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="media contact-info col-12">
                <span class="contact-info__icon"><i class="ti-email"></i>Почта:</span>
                <div class="media-body">
                    <h3>support@colorlib.com</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="map col-12 ">
                <a class="dg-widget-link" href="http://2gis.ru/barnaul/firm/70000001043831066/center/83.7651300430298,53.34955224678227/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Барнаула</a>
                <div class="dg-widget-link"><a href="http://2gis.ru/barnaul/firm/70000001043831066/photos/70000001043831066/center/83.7651300430298,53.34955224678227/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div>
                <div class="dg-widget-link"><a href="http://2gis.ru/barnaul/center/83.765132,53.34931/zoom/16/routeTab/rsType/bus/to/83.765132,53.34931╎Любитель мёда, эко-лавка?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Любитель мёда, эко-лавка</a></div>
                <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                <script charset="utf-8">
                    new DGWidgetLoader({
                               "width": 1000,
                              "height": 600, 
                        "borderColor": "#a3a3a3",
                        "pos": {
                            "lat": 53.34955224678227,
                            "lon": 83.7651300430298,
                            "zoom": 16
                        },
                        "opt": {
                            "city": "barnaul"
                        },
                        "org": [{
                            "id": "70000001043831066"
                        }]
                    });
                </script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </div>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>