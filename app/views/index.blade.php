<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sample 3</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />


    <link rel="shortcut icon" href="{{ asset ('flat-ui/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset ('flat-ui/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset ('flat-ui/css/flat-ui.css') }}">
    <!-- Using only with Flat-UI (free)-->
    <link rel="stylesheet" href="{{ asset ('common-files/css/icon-font.css')}}">
    <!-- end -->
    <link rel="stylesheet" href="{{  asset ('landingpage/css/style.css') }}">
</head>

<body>
<div class="page-wrapper">
    <!-- header-11 -->
    <header class="header-11">
        <div class="container">
            <div class="row">
                <div class="navbar col-sm-12" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"></button>
                        <a class="brand" href="#"><img src="{{ asset ('landingpage/img/logo tutoreame50x50.jpg') }}"  alt=""> TutoreaME</a>
                    </div>
                    <div class="collapse navbar-collapse pull-right">
                        <ul class="nav pull-left">
                            <li class="active"><a href="#">INICIO</a></li>
                            <li><a href="#">¿COMÓ FUNCIONA?</a></li>
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#">CONTACTO</a></li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="header-11-sub bg-midnight-blue">
        <div class="background">
            &nbsp;
        </div>
        {{ Form::open(array('route' => 'sesiones.store','class' => 'form-horizontal')) }}
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Somos una red de estudiantes para estudiantes</h3>

                    <div class="signup-form">
                        <form>
                            <div class="form-group">
                                <input class="form-control" type="text" name="usuario" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-info">Ingresa</button>
                            </div>
                        </form>
                    </div>

                </div>
                {{Form::close() }}

                <div class="col-sm-7 col-sm-offset-1 player-wrapper">
                    <div class="player">
                        <iframe src="http://player.vimeo.com/video/29568236?color=3498db" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <!--<iframe src="http://www.youtube.com/embed/BCC7rFxo6QA" allowfullscreen></iframe>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- logos -->
    <section class="logos">
        <div class="container">
            <div><img src="{{ asset ('landingpage/img/logos/mashable.png') }}" alt="">
            </div>
            <div><img src="{{ asset ('landingpage/img/logos/guardian.png') }}" alt="">
            </div>
            <div><img src="{{ asset ('landingpage/img/logos/forbes.png') }}" alt="">
            </div>
            <div><img src="{{ asset ('landingpage/img/logos/red-bull.png') }}" alt="">
            </div>
            <div><img src="{{ asset ('landingpage/img/logos/ny-times.png') }}" alt="">
            </div>
        </div>
    </section>

    <!-- price-1 -->
    <section class="price-1">
        <div class="container">
            <h3>¿Como funciona tutoreaME? </h3>
            <p class="lead">
                Estos son los planes para ti
            </p>
            <div class="row plans">
                <div class="col-sm-4">
                    <div class="plan">
                        <div class="title">¿Quieres ser tutor? </div>

                        <a class="btn btn-primary" href="#">Da click aquí para comenzar</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="plan">
                        <a class="brand" href="#"><img src="{{ asset ('landingpage/img/profil_create_stage.png') }}"  alt=""> TutoreaME</a>


                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="plan">
                        <div class="title">¿Quieres una tutoría? </div>

                        <a class="btn btn-primary" href="#">Da click aquí para comenzar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- content-13  -->
    <section class="content-13 subscribe-form bg-turquoise">
        <div class="container">
            <div class="row">
                <form>
                    <div class="col-sm-8">
                        <input type="text" placeholder="Ingresa tu email" spellcheck="false">
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-large btn-primary" type="submit">
                            Suscribete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- footer-2 -->
    <footer class="footer-2 bg-midnight-blue">
        <div class="container">
            <nav class="pull-left">
                <ul>

                </ul>
            </nav>
            <div class="social-btns pull-right">
                <a href="#"><div class="fui-vimeo"></div><div class="fui-vimeo"></div></a>
                <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
                <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
            </div>
            <div class="additional-links">
                Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset ('common-files/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{ asset ('flat-ui/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('common-files/js/modernizr.custom.js') }}"></script>
<script src="{{ asset ('common-files/js/startup-kit.js') }}"></script>
<script src="{{ asset ('landingpage/js/script.js') }}"></script>
</body>
</html>