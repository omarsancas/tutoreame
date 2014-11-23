<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Social Network Template</title>

    <!-- App Styling Bundle -->
    <link href="{{ asset ('usuario/css/default.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Fixed navbar -->
<div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" data-toggle="sidebar-menu" id="toggle-sidebar-menu" class="visible-xs"><i class="fa fa-ellipsis-v"></i></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a data-toggle="sidebar-chat" class="btn btn-link navbar-btn visible-xs"><i class="fa fa-comments"></i></a>
            <a class="navbar-brand" href="index.html">TutoreaMe</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
    </div>
</div>
<div class="sidebar left hidden-xs">
    <div data-scrollable>
        <div class="sidebar-block">
            <div class="profile">
                <img src="{{ asset ('usuario/images/people/110/dulce.png')}}" alt="people" class="img-circle" />
                <h4>Dulce.</h4>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li class="category">Perfil</li>
                <li class=" active ">
                    <a href="user-private-profile.html"><i class="icon-user-1"></i> Editar perfil</a>
                </li>
                <li class="">
                    <a href="user-private-users.html"><i class="fa fa-group"></i> Profesor favorito</a>
                </li>
                <li class="">
                    <a href="user-private-messages.html"><i class="icon-comment-fill-1"></i> Messages</a>
                </li>
                <li><a href="login.html"><i class="icon-unlock-fill"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sidebar right">
    <div class="chat-search">
        <input type="text" class="form-control" placeholder="Search" />
    </div>
    <ul class="chat-filter nav nav-pills ">
        <li class="active"><a href="#" data-target="li">All</a>
        </li>
        <li><a href="#" data-target=".online">Online</a>
        </li>
        <li><a href="#" data-target=".offline">Offline</a>
        </li>
    </ul>
    <ul class="chat-contacts">
        <li class="online" data-user-id="1">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">Jonathan S.</div>
                        <small>"Free Today"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online away" data-user-id="2">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-5.jpg" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">Mary A.</div>
                        <small>"Feeling Groovy"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online" data-user-id="3">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">Adrian D.</div>
                        <small>Busy</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">Michelle S.</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</div>

<div class="chat-window-container"></div>
<div id="content">
<nav class="navbar navbar-subnav navbar-static-top" role="navigation">
    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-ellipsis-h"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="subnav">
            <ul class="nav navbar-nav">
                <li><a href="user-private-timeline.html"><i class="fa fa-fw icon-ship-wheel"></i> TutoreaME line</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.html"> Logout<i class="fa fa-fw fa-sign-out"></i></a>
                </li>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
</nav>
<div class="container-fluid">
<div class="panel panel-default">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i> Búsqueda</a>
        </li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="home">

            {{ Form::label('nom', 'Busca tu materia')}}
            {{ Form::text('q', null , ['class' => 'form-control'])}}

            <div class="form-group">
                <p>
                    <input type="submit" value="Buscar" class="btn btn-success btn-lg">
                </p>
            </div>


        </div>
        <div class="tab-pane fade" id="profile">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading panel-heading-gray">
        <i class="fa fa-bookmark"></i> Profesores
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default center-block">
                    <div class="panel-body text-center">
                        <a href="#" class="btn btn-success btn-xs pull-right"><i class="fa fa-check-circle"></i></a>
                        <a href="#" class="btn btn-primary btn-xs pull-right">Ver perfil</a>

                        <a href="#" class="h5 margin-none">Omar Sánchez</a>
                        <div class="text-muted">
                            <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                        </div>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star filled"></span>
                            <span class="star filled"></span>
                            <span class="star filled"></span>
                            <span class="star filled"></span>
                        </div>
                    </div>
                    <a href="#">
                        <img src="{{ asset ('usuario/images/people/110/guy-1.jpg')}}" alt="image" class="img-responsive" />
                    </a>
                    <div class="panel-body">
                        <p>Hola estudie en el IPN, soy estudiante de ingeniería y te puedo ayudar en algebra 1....</p>
                        <div>
                            <a href="#" class="btn btn-primary btn-xs pull-right">Conectar</a>
                            <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <a href="#" class="btn btn-success btn-xs pull-right"><i class="fa fa-check-circle"></i></a>
                        <a href="#" class="h5 margin-none">Omar Sánchez</a>
                        <div class="text-muted">
                            <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                        </div>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star filled"></span>
                            <span class="star filled"></span>
                            <span class="star filled"></span>
                            <span class="star filled"></span>
                        </div>
                    </div>
                    <a href="#">
                        <img src="{{ asset ('usuario/images/people/110/guy-1.jpg')}}" alt="image" class="img-responsive" />
                    </a>
                    <div class="panel-body">
                        <p>Hola estudie en el IPN, soy estudiante de ingeniería y te puedo ayudar en algebra 1....</p>
                        <div>
                            <a href="#" class="btn btn-primary btn-xs pull-right">Conectar</a>
                            <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<!-- Footer -->
<div class="footer">
    TutoreaME &copy; Copyright Notice
</div>

<!-- // Footer -->
</div>

<!-- // Content -->

<!-- Vendor Scripts Bundle --><script src="js/vendor.min.js"></script>

<!-- App Scripts Bundle -->
<script src="usuario/js/scripts.min.js"></script>
</body>
</html>