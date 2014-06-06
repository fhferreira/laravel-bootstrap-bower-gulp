<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">

  <title></title>

  <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
  <link rel="icon" href="assets/favicon.png">

  <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->

  <!-- styles, meta -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/css/app.min.css">

</head>
<body>
  <a id="top" name="top"></a>

  <header id="header">
    <div class="container">

      <div class="row">
        <div class="header-col header-brand col-sm-6">
          <a title="" href=""><img class="image-responsive" src="//placehold.it/250x85" alt=""></a>
        </div>
        <div class="header-col header-aux col-sm-6">
          <ul class="list-inline">
            <li><i class="fa fa-fw fa-user"></i> @lang('header.user.area')</li>
            <li><i class="fa fa-fw fa-phone"></i> {{ Config::get('setting.company.phone') }}</li>
          </ul>
        </div>
      </div>

    </div>
  </header>

  <nav class="navbar navbar-default" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="nav-main">
        <ul class="nav navbar-nav">
          <li><a href="#"><i class="fa fa-fw fa-home"></i> @lang('nav.main.home')</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-info-circle"></i> @lang('nav.main.information') <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">@lang('nav.main.information.sub.about')</a></li>
              <li><a href="#">@lang('nav.main.information.sub.contact')</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-fw fa-search"></i> @lang('nav.main.search')</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->

  <div id="content">
    <div class="container">

      @yield('content')

    </div><!-- .container -->
  </div><!-- #content -->

  <footer id="footer">
    <div class="container">

      <p><strong>@lang('footer.newsletter')</strong>: @lang('footer.subscribe')</p>

      <form id="footer-news-form" class="news-form" action="" method="post">
        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-4 col-center">
            <div class="input-group">
              <input type="email" class="form-control email required" id="footer-news-email" name="email" required placeholder="@lang('footer.email.placeholder')" value="" />
              <span class="input-group-btn">
                <button class="btn btn-app-light" type="submit"><i class="fa fa-envelope fa-fw"></i> @lang('footer.newsletter.submit')</button>
              </span>
            </div><!-- .input-group -->
          </div><!-- .col -->
        </div><!-- .row -->
      </form><!-- news-form -->

      <br>

      <!-- footer.social nav -->

      <!-- footer.primary nav -->

      <p class="footer-meta">
          &copy; {{ date('Y') }} <strong>{{ Config::get('setting.company.name') }}</strong>
          <br>
          {{ Config::get('setting.company.description') }}
      </p>

      <hr class="soften">

      <!-- footer.secondary nav (policies etc) -->

      <p class="footer-meta nmb">
        <!-- small attributions -->
      </p>

    </div><!-- .container -->
  </footer>

  <!-- scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/js/app.min.js"></script>

</body>
</html>
