<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>donorkan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css    {{ asset('Remember/     ') }}     -->
  <link href="{{ asset('Remember/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('Remember/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('Remember/css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('Remember/css/style.css') }}" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('Remember/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('Remember/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('Remember/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('Remember/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href="{{ asset('Remember/ico/favicon.png') }}" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="{{ url('/Home') }}"><i class="icon-tint"></i> donorkan</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                  @if (Route::has('login'))
                      @auth
                          <li><a href="{{ url('/Home') }}">Home</a></li>
                        @else
                          <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                          <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                      @endauth
                  @endif
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header                  -->

    <section id="content">
      <div class="container">
        <div class="row">
          @foreach($data as $dt)
          <div class="span3">
            <div class="pricing-box-wrap">
            <div class="pricing-heading">
                <h3>{{ $dt->golongan_darah }}</h3>
              </div>
              <div class="pricing-content">
                <ul>
                  <li>{{ $dt->nama }}</li>
                  <li>{{ $dt->riwayat_penyakit }}</li>
                  <li> {{ date("d F Y", strtotime($dt->created_at)) }}</li>
                </ul>
              </div>
              <div class="pricing-action">
             
              @auth
                @if($dt->pasien_id == Auth::user()->id)
                      <a href="{{ url('/Home') }}" class="btn btn-medium btn-primary">Home</a>
                @else
                      <a href="{{ url('/Home/Customer/Transaksi/Donor',['id'=>Crypt::encrypt($dt->id)]) }}" class="btn btn-medium btn-danger"> Donor</a>
                @endif
              @else
              <a href="{{ url('/Home/Customer/Transaksi/Donor',['id'=>Crypt::encrypt($dt->id)]) }}" class="btn btn-medium btn-danger"> Donor</a>
              @endauth

              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <footer>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; All right reserved 2020 | donorkan</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript       {{ asset('Remember/     ') }}
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('Remember/js/jquery.js') }}"></script>
  <script src="{{ asset('Remember/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('Remember/js/bootstrap.js') }}"></script>
  <script src="{{ asset('Remember/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('Remember/js/toucheffects.js') }}"></script>
  <script src="{{ asset('Remember/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('Remember/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('Remember/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('Remember/js/portfolio/setting.js') }}"></script>
  <script src="{{ asset('Remember/js/animate.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('Remember/js/custom.js') }}"></script>

</body>

</html>
