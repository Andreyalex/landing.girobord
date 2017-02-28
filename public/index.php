<?php

    $common = (object) [
        'phone' => '(068) 069-41-84',
        'address' => 'г.Харьков, ул. Ололоева, 100500'
    ];


    $discounts = false;
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <div style="position: absolute; padding: 10px;">
        <img src="img/logo.png" style="width:200px;">
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default ontop navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($discounts) { ?>
                    <li>
                        <a href="#discounts">Акции</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="#rent">Прокат</a>
                    </li>
                    <li>
                        <a href="#service">Ремонт</a>
                    </li>
                    <li>
                        <a href="#shop">Продажа</a>
                    </li>
                    <li>
                        <a href="#contacts">Контакты</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="background">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="intro-message">
                            <h1>GIROB<span class="fa fa-play-circle-o"></span>ARD</h1>
                            <h3>Заряжайся и жги!</h3>
                            <hr class="intro-divider">
                            <h4>Прокат, ремонт, продажа мини-электротранспорта</h4>
                            <ul class="list-inline intro-social-buttons col-md-2 col-md-offset-5">
                                <li class="faded-in-1 col-xs-12" style="opacity:0">
                                    <a href="https://vk.com/girobord" target="_blank" class="col-xs-6 btn btn-default btn-lg btn-social btn-block">
                                        <i class="fa fa-vk fa-fw"></i>
                                    </a>
                                </li>
                            </ul>
                            <div style="clear:both; height:60px"></div>
                            <span style="position:absolute;bottom:0px;left:40%;width:20%;font-size:150px;opacity:0.5" class="fa fa-angle-down"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Key concept -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Заряжайся и жги!</h1>
                    <br/>
                    <p class="lead">
                        Компания Giroboard предоставляет услуги по прокату, ремонту и продаже различных видов современного электрического транспорта. Мы следим за новинками на рынке и стремимся предложить клиентам самые актуальные и интересные транспортные средства. Наши профессиональные инструктора быстро обучат любого управлять гироскутером, электросамокатом, моноколесом и др. Особое внимание мы уделяем безопасности, поэтому предлагаем катающимся бесплатно использовать наши средства защиты во время езды. Мы прислушиваемся к пожеланиям и наблюдениям клиентов, регулярно проводим техосмотр и ремонт транспортных средств.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <?php if ($discounts) { ?>
    <a name="discounts" class="anchor"></a>
    <div class="content-section content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-push-6">
                    <div class="clearfix"></div>
                    <h1 class="section-heading">Акция "Теплые покатушки"</h1>
                    <p class="lead">
                        Прокат. Нужен текст.
                    </p>
                </div>
                <div class="col-lg-6 col-lg-pull-6">
                    <img class="img-responsive" src="img/action1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php } ?>


    <a name="rent" class="anchor"></a>
    <div class="content-section content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Прокат</h2>
                    <p class="lead">
                        Кто не любит веселые покатушки днем с ветерком в хорошей компании или спокойно вечером проехаться по уставшему от дневной суеты центру Харькова, любуясь закатом над Госпромом?... Кто еще не пробовал разнообразить свидание катанием на гиробордах или не дарил другу сертификат на прокат гироскутра? А корпоративы с соревнованием на различном гиротранспорте или дни рождения с веселыми заданиями на электросамокатах вы тоже ещё не отмечали ?
                        Если вы чего-то из этого ещё не пробовали, советуем поспешить к нам, дабы разнообразить досуг интересными покатушками и современными технологиями!<br/>
                        <br/>
                        Помимо различных гироскутеров, пункт проката Giroboard предоставляет клиентам возможность:<br/>
                        - освоить чудеса эквилибристики, научившись держать равновесие и кататься на моноколесе;<br/>
                        - погонять на электросамокатах;<br/>
                        - ощутить, как "плывет" асфальт под электроскейтом<br/>
                        <br/>
                        Главное, заранее бронируйте время катания и не забывайте застегивать ремни на наколенниках, налодонниках, налокотниках и шлеме!<br/>
                        <br/>
                        Кстати, защиту мы выдаем бесплатно.<br/>
                        Забронировать средство и время катания можно по тел: <nobr><?=$common->phone?></nobr>
                    </p>
                </div>
                <div class="col-lg-6">
                    <!--<div style="position:absolute;height:100%;width:100%" class="border-smooth"></div>-->
                    <img class="img-responsive" src="media/board-walk3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <a name="service" class="anchor"></a>
    <div class="content-section content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-push-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Ремонт</h2>
                    <p class="lead">
                        Многие владельцы гироскутеров и другого электрического транспорта рано или поздно сталкиваются с проблемами обслуживания и ремонта их технического средства.<br/>
                        Имея немалый опыт в обслуживании и ремонте собственных электрогаджетов, компания Giroboard, по просьбам клиентов, с этого года предоставляет услуги квалифицированных специалистов по ремонту электрических средств передвижения. Гиротранспорт - новое направление в электронике, освоенное, на данный момент, далеко не каждым специалистом по ремонту, поэтому очень важно найти мастера, разбирающегося именно в гиротехнике. Обращаясь к нам, вы можете быть уверены, что доверяете свой мини-транспорт рукам профессионалов.<br/>
                        <?php //Сервисный центр расположен по адресу <?=$common->address ?>Телефон сервисного центра <?=$common->phone?>
                    </p>
                </div>
                <div class="col-lg-6 col-lg-pull-6">
                    <img class="img-responsive" src="img/service.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <a name="shop" class="anchor"></a>
    <div class="content-section content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Продажа</h2>
                    <p class="lead">
                        У нас вы можете попробовать, выбрать и заказать электротранспорт для личного пользования. Наши менеджеры с удовольствием помогут подобрать подходящий вариант электрогаджета, удовлетворяющий вашим требованиям, техническим характеристикам и финансовым возможностям. На весь приобретенный электротранспорт предоставляется гарантийный ремонт и обслуживание.<br/>
                        Консультирование и оформление заказа по тел: <?=$common->phone?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <img class="img-responsive" src="media/board-sale.png" alt="">
                </div>
            </div>

        </div>
    </div>


    <a  name="contacts" class="anchor"></a>
    <div class="content-section content-section-b">
        <div class="container container-contacts">
            <div class="row">
                <h2 class="text-center section-heading">Контакты</h2>
                <div class="col-lg-4 text-center">
                    <div class="icon"><i class="glyphicon glyphicon-earphone" style="color: #8e8;"></i></div>
                    <span class="description"><?=$common->phone?></span>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon"><i class="glyphicon glyphicon-map-marker" style="color: #e88;"></i></div>
                    <span class="description"><?php //=$common->address ?></span>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon"><i class="fa fa-vk fa-fw" style="color: #79c;"></i></div>
                    <a class="description" href="https://vk.com/girobord" target="_blank">vk.com/girobord</a>
                </div>
            </div>
            <div class="row">
                <div id="map" style="width:600px; height: 400px; margin:20px auto">
                    <script>

                        function initMap() {
                            var myLatLng = {lat: 49.940, lng: 36.373};

                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 13,
                                center: myLatLng
                            });

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title: 'Giroboard'
                            });
                        }

                    </script>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFD2w91PRhUqR0YBSl9XPdVMDSDo7A_Es&signed_in=true&callback=initMap"></script>
<!--                    <iframe style="margin:auto" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10271.950409074874!2d36.3742445!3d49.9365739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sua!4v1487628413036" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Girodord</a>
                        </li>
                        <?php if ($discounts) { ?>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#discounts">Акции</a>
                        </li>
                        <?php } ?>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#rent">Прокат</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#service">Ремонт</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#shop">Продажа</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contacts">Контакты</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Girobord 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

        var h = $('body').outerHeight()
        $('.intro-message').height(h);

        $(function($){
            setTimeout(function(){
                $('.faded-in-1').animate({opacity:1});
            }, 1000);
        })

        $(window).scroll(function() {
            toggleNavbar();
        });

        var toggleNavbar = function () {
            var scroll = document.body.scrollTop;
            if (scroll < 160) {
                $('.navbar-default').addClass('ontop');
            } else {
                $('.navbar-default').removeClass('ontop');
            }
        }
        toggleNavbar();
    </script>

</body>

</html>
