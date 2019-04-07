<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Analytics | Patty@Flights Hackathon</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Google Fonts
		============================================ -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css" />
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css" />
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css" />
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link
      rel="stylesheet"
      href="css/scrollbar/jquery.mCustomScrollbar.min.css"
    />
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css" />
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css" />
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css" />
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->

    <div class="left-sidebar-pro">
      <nav id="sidebar" class="">
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
          <nav class="sidebar-nav left-sidebar-menu-pro">
            <ul class="metismenu" id="menu1">
              <li class="active">
                <a class="has-arrow" href="index.php">
                  <i class="icon nalika-home icon-wrap"></i>
                  <span class="mini-click-non">Ecommerce</span>
                </a>
                <ul class="submenu-angle" aria-expanded="true">
                  <li>
                    <a title="Dashboard" href="index.php"
                      ><span class="mini-sub-pro">Dashboard</span></a
                    >
                  </li>
                  <li>
                    <a title="Product List" href="product-list.php"
                      ><span class="mini-sub-pro">Product List</span></a
                    >
                  </li>
                  <li>
                    <a title="Analytics" href="analytics.php"
                      ><span class="mini-sub-pro">Analytics</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
      <!-- Single pro tab start-->
      <!-- income order visit user Start -->
      <div class="income-order-visit-user-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="income-dashone-total reso-mg-b-30">
                <div class="income-dashone-pro">
                  <div class="income-rate-total">
                    <div class="price-nalika-rate">
                      <h3><span>$</span><span class="counter">7500</span></h3>
                    </div>
                    <div class="price-graph">
                      <span id="sparkline1"></span>
                    </div>
                  </div>
                  <div class="income-range">
                    <p>Total income</p>
                    <span class="income-percentange bg-green"
                      ><span class="counter">95</span>%
                      <i class="fa fa-bolt"></i>
                    </span>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="income-dashone-total reso-mg-b-30">
                <div class="income-dashone-pro">
                  <div class="income-rate-total">
                    <div class="price-nalika-rate">
                      <h3><span class="counter">6400</span></h3>
                    </div>
                    <div class="price-graph">
                      <span id="sparkline6"></span>
                    </div>
                  </div>
                  <div class="income-range order-cl">
                    <p>New Orders</p>
                    <span class="income-percentange bg-red"
                      ><span class="counter">65</span>%
                      <i class="fa fa-level-up"></i>
                    </span>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="income-dashone-total reso-mg-b-30 res-mg-t-30">
                <div class="income-dashone-pro">
                  <div class="income-rate-total">
                    <div class="price-nalika-rate">
                      <h3><span class="counter">4500</span></h3>
                    </div>
                    <div class="price-graph">
                      <span id="sparkline2"></span>
                    </div>
                  </div>
                  <div class="income-range visitor-cl">
                    <p>New Visitor</p>
                    <span class="income-percentange bg-blue"
                      ><span class="counter">75</span>%
                      <i class="fa fa-level-up"></i>
                    </span>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="income-dashone-total res-mg-t-30">
                <div class="income-dashone-pro">
                  <div class="income-rate-total">
                    <div class="price-nalika-rate">
                      <h3><span class="counter">235400</span></h3>
                    </div>
                    <div class="price-graph">
                      <span id="sparkline5"></span>
                    </div>
                  </div>
                  <div class="income-range low-value-cl">
                    <p>In first month</p>
                    <span class="income-percentange bg-purple"
                      ><span class="counter">35</span>%
                      <i class="fa fa-level-down"></i>
                    </span>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- income order visit user End -->
      <div class="dashtwo-order-area mg-tb-30">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-nalika-wrap ant-res-b-30 reso-mg-b-30">
                <div class="skill-content-3 analytics-nalika">
                  <div class="skill">
                    <div class="progress">
                      <div class="lead-content">
                        <h3><span class="counter">95</span>%</h3>
                        <p>Server down 4:32 pm</p>
                      </div>
                      <div
                        class="progress-bar wow fadeInLeft"
                        data-progress="95%"
                        style="width: 95%;"
                        data-wow-duration="1.5s"
                        data-wow-delay="1.2s"
                      >
                        <span>95%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-nalika-wrap reso-mg-b-30">
                <div class="skill-content-3 analytics-nalika analytics-nalika4">
                  <div class="skill">
                    <div class="progress">
                      <div class="lead-content">
                        <h3>85%</h3>
                        <p>Server down 8:32 pm</p>
                      </div>
                      <div
                        class="progress-bar wow fadeInLeft"
                        data-progress="85%"
                        style="width: 85%;"
                        data-wow-duration="1.5s"
                        data-wow-delay="1.2s"
                      >
                        <span>85%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-nalika-wrap reso-mg-b-30 res-mg-t-30">
                <div class="skill-content-3 analytics-nalika analytics-nalika3">
                  <div class="skill">
                    <div class="progress progress-bt">
                      <div class="lead-content">
                        <h3>80%</h3>
                        <p>Server down 10:32 pm</p>
                      </div>
                      <div
                        class="progress-bar wow fadeInLeft"
                        data-progress="80%"
                        style="width: 80%;"
                        data-wow-duration="1.5s"
                        data-wow-delay="1.2s"
                      >
                        <span>80%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-nalika-wrap res-mg-t-30">
                <div class="skill-content-3 analytics-nalika analytics-nalika2">
                  <div class="skill">
                    <div class="progress progress-bt">
                      <div class="lead-content">
                        <h3>93%</h3>
                        <p>Server down 10:32 pm</p>
                      </div>
                      <div
                        class="progress-bar wow fadeInLeft"
                        data-progress="93%"
                        style="width: 93%;"
                        data-wow-duration="1.5s"
                        data-wow-delay="1.2s"
                      >
                        <span>93%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="analytics-sparkle-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-sparkle-line reso-mg-b-30">
                <div class="analytics-content">
                  <h5>Visits in last 24h</h5>
                  <h2 class="counter">5600</h2>
                  <div id="sparkline22"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-sparkle-line reso-mg-b-30">
                <div class="analytics-content">
                  <h5>Visits week</h5>
                  <h2 class="counter">3400</h2>
                  <div id="sparkline23"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-sparkle-line reso-mg-b-30 res-mg-t-30">
                <div class="analytics-content">
                  <h5>Last month</h5>
                  <h2 class="counter">3300</h2>
                  <div id="sparkline24"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-sparkle-line res-mg-t-30">
                <div class="analytics-content">
                  <h5>Avarage time</h5>
                  <h2>00:06:40</h2>
                  <div id="sparkline25"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="analysis-rounded-area mg-tb-30">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-rounded reso-mg-b-30">
                <div class="analytics-rounded-content">
                  <h5>Percentage distribution</h5>
                  <h2><span class="counter">40</span>/20</h2>
                  <div class="text-center">
                    <div id="sparkline51"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-rounded reso-mg-b-30">
                <div class="analytics-rounded-content">
                  <h5>Percentage division</h5>
                  <h2>
                    <span class="counter">140</span>/<span class="counter"
                      >54</span
                    >
                  </h2>
                  <div class="text-center">
                    <div id="sparkline52"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-rounded reso-mg-b-30 res-mg-t-30">
                <div class="analytics-rounded-content">
                  <h5>Percentage Counting</h5>
                  <h2>2345/311</h2>
                  <div class="text-center">
                    <div id="sparkline53"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analytics-rounded res-mg-t-30">
                <div class="analytics-rounded-content">
                  <h5>Percentage Sequence</h5>
                  <h2>780/56</h2>
                  <div class="text-center">
                    <div id="sparkline54"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="analysis-progrebar-area mg-b-30">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analysis-progrebar reso-mg-b-30">
                <div class="analysis-progrebar-content">
                  <h5>Usage</h5>
                  <h2><span class="counter">90</span>%</h2>
                  <div class="progress progress-mini">
                    <div style="width: 68%;" class="progress-bar"></div>
                  </div>
                  <div class="m-t-sm small">
                    <p>Server down since 1:32 pm.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analysis-progrebar reso-mg-b-30">
                <div class="analysis-progrebar-content">
                  <h5>Memory</h5>
                  <h2><span class="counter">70</span>%</h2>
                  <div class="progress progress-mini">
                    <div style="width: 78%;" class="progress-bar"></div>
                  </div>
                  <div class="m-t-sm small">
                    <p>Server down since 12:32 pm.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analysis-progrebar reso-mg-b-30 res-mg-t-30">
                <div class="analysis-progrebar-content">
                  <h5>Data</h5>
                  <h2><span class="counter">50</span>%</h2>
                  <div class="progress progress-mini">
                    <div
                      style="width: 38%;"
                      class="progress-bar progress-bar-danger"
                    ></div>
                  </div>
                  <div class="m-t-sm small">
                    <p>Server down since 8:32 pm.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="analysis-progrebar res-mg-t-30">
                <div class="analysis-progrebar-content">
                  <h5>Space</h5>
                  <h2><span class="counter">40</span>%</h2>
                  <div class="progress progress-mini">
                    <div
                      style="width: 28%;"
                      class="progress-bar progress-bar-danger"
                    ></div>
                  </div>
                  <div class="m-t-sm small">
                    <p>Server down since 5:32 pm.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer-copy-right">
                <p>
                  Copyright © 2018
                  <a href="https://colorlib.com/wp/templates/">Colorlib</a> All
                  rights reserved.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/chart/peity-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
  </body>
</html>
