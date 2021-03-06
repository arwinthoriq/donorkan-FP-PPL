<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>donorkan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css      {{ asset('Remember/     ') }}         --> 
  <link href="{{ asset('Remember/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('Remember/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('Remember/css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('Remember/css/style.css') }}" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href=" {{ asset('Remember/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href=" {{ asset('Remember/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href=" {{ asset('Remember/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href=" {{ asset('Remember/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href=" {{ asset('Remember/ico/favicon.png') }}" />

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
              <h1><a href="index.html"><i class="icon-tint"></i> donorkan</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                @if (Route::has('login'))
                        @auth
                        <li class="nav topnav">
                            <a href="{{ url('/Home') }}">Home</a>
                        </li>
                        @else
                        <li class="nav topnav">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav topnav">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
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
    <!-- end header -->

    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">
        <h2>tetap sehat</h2>
        <h3>menjalin kebersamaan menjaga ikatan kekeluargaan</h3>
        <div>
          <a href="{{ route('darah') }}" class="btn btn-danger">Donor
          </a>
        </div>
      </div>
    </section>
    <!-- /section intro -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-info badge-circled">1</span>
                    <i class="ico icon-dropbox icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Out of the box</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am anumat lib persum sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-success badge-circled">2</span>
                    <i class="ico icon-bitbucket icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>New taste</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-warning badge-circled">3</span>
                    <i class="ico icon-rocket icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Faster load</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-important badge-circled">4</span>
                    <i class="ico icon-cut icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Cut your times</strong></h4>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="span12">
            <div class="cta-box">
              <div class="row">
                <div class="span8">
                  <div class="cta-text">
                    <h2>Special price in very <span>limited</span> times</h2>
                  </div>
                </div>
                <div class="span4">
                  <div class="cta-btn">
                    <a href="#" class="btn btn-color">Call Action <i class="icon-caret-right"></i></a>
                  </div>
                </div>

              </div>


            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="offer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <h3>Our features and pricing</h3>
                  <blockquote>
                    Lorem ipsum dolor sit amet, labores dolorum scriptorem eum an, te quodsi sanctus neglegentur eam, et lorem persecuti conclusionemque mei.
                  </blockquote>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="span3">
                <h5>Choose package and start grow</h5>
                <p>
                  Per an putent audiam adolescens, mel ceteros fierent democritum te. No ubique malorum euismod usu.
                </p>
                <p>
                  Movet facilis democritum ea quo. Est ei illum consulatu accommodare, nam dicta expetenda suavitate ad.
                </p>
              </div>

              <div class="span3">
                <div class="pricing-box-plain">
                  <div class="heading">
                    <h4>Standard</h4>
                    <span>$9 / Month</span>
                  </div>
                  <div class="desc">
                    <ul>
                      <li>For 1 Application</li>
                      <li>Free one year support</li>
                      <li>Unlimited disk spaces</li>
                    </ul>
                  </div>
                  <div class="action">
                    <a href="#" class="btn btn-inverse">Sign Up</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-plain">
                  <div class="heading">
                    <h4>Medium</h4>
                    <span>$29 / Month</span>
                  </div>
                  <div class="desc">
                    <ul>
                      <li>For 10 Applications</li>
                      <li>Free life time support</li>
                      <li>Unlimited disk spaces</li>
                    </ul>
                  </div>
                  <div class="action">
                    <a href="#" class="btn btn-inverse">Sign Up</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-plain">
                  <div class="heading">
                    <h4>Elite</h4>
                    <span>$59 / Month</span>
                  </div>
                  <div class="desc">
                    <ul>
                      <li>For unlimited appliacations</li>
                      <li>Free life time support</li>
                      <li>Unlimited disk spaces</li>
                    </ul>
                  </div>
                  <div class="action">
                    <a href="#" class="btn btn-color">Sign Up</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="works">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h3>Recent works</h3>
            <div class="row">

              <div class="grid cs-style-3">
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummies/works/1.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummies/works/2.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummies/works/3.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummies/works/4.jpg" alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html"><i class="icon-tint"></i> Remember</a></h3>
              </div>
              <address>
							  <strong>Remember company Inc.</strong><br>
  							Somestreet KW 101, Park Village W.01<br>
  							Jakarta 13426 Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">Our company</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Press release</a></li>
                <li><a href="#">What we have done</a></li>
                <li><a href="#">Our support forum</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">From flickr</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Remember Inc. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ==================================================        {{ asset('Remember/     ') }}         -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('Remember/js/jquery.js') }} "></script>
  <script src="{{ asset('Remember/js/jquery.easing.1.3.js') }} "></script>
  <script src="{{ asset('Remember/js/bootstrap.js') }} "></script>
  <script src="{{ asset('Remember/js/modernizr.custom.js') }} "></script>
  <script src="{{ asset('Remember/js/toucheffects.js') }} "></script>
  <script src="{{ asset('Remember/js/google-code-prettify/prettify.js') }} "></script>
  <script src="{{ asset('Remember/js/jquery.prettyPhoto.js') }} "></script>
  <script src="{{ asset('Remember/js/portfolio/jquery.quicksand.js') }} "></script>
  <script src="{{ asset('Remember/js/portfolio/setting.js') }} "></script>
  <script src="{{ asset('Remember/js/animate.js') }} "></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('Remember/js/custom.js') }} "></script>

</body>
       
</html>
