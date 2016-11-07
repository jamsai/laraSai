<!--
        Zreast the Nerazzurri

Color Palette
- http://colorpalettes.net/color-palette-3062

BackEnd Template
- https://colorlib.com/wp/free-html5-admin-dashboard-templates/

Not forget it
- http://www.siamhtml.com/%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B9%81%E0%B8%95%E0%B8%81%E0%B8%95%E0%B9%88%E0%B8%B2%E0%B8%87%E0%B8%82%E0%B8%AD%E0%B8%87-font-size-%E0%B9%81%E0%B8%9A%E0%B8%9A-percent-em-px-pt/

Current Requirement

- Add logged as user to navbar
- Log in modal

Done

# edit Header Photo to some great material
# Add Site Description
# localize CDN
# init webfont
# Pick some cool palette
# Design jamsai icon

-->

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jamsai | Easy Reward Point Gatherer</title>
    <meta name="description" content="แจ่มใส | ที่เดียวที่รวบรวมทุกแต้มสะสมร้านอาหารและร้านค้า มาร่วมสัมผัสประสบการณ์ใหม่แห่งความสะดวกสบายไปกับเรา">
    <meta name="author" content="Emily and the gang.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Bootstrap CDN -->
    <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='css/bootstrap-theme.min.css'>

    <!-- Main Design -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css"  href="assets/fonts/font.css">
    <link rel="stylesheet" href="assets/fonts/awesome/css/font-awesome.min.css">

  </head>

  <body>

    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>Jamsai</h2></a>
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs" id="logo"><a href="#header">
                <img src="assets/images/jamsai_logo.svg" alt="">
            </a></div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#story" id="Scroll2">About</a></li>
                <li><a href="#facts" id="Scroll3">Stats</a></li>
                <li><a href="#food-menu" id="Scroll4">Shops</a></li>
                <li><a href="#special-offser" id="Scroll5">Deals</a></li>
                <li><a href="#reservation" id="Scroll6">Contact</a></li>
                @if (Auth::guest())
                  <li><a href="{{ url('/login') }}"><font color="#fefa99">Log in</font></a></li>
                @else
        				  <li><a href="/home">{{ Auth::user()->name }}</a></li>
        		@endif
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <!-- Modal -->
  <div id="loginModal" class="modal fade modal-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">สมัครใช้งาน Jamsai</h2>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-xs-6">
                <div class="well">
                  <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                    <div class="form-group">
                      <label for="username" class="control-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                      <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                      <label for="password" class="control-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                      <span class="help-block"></span>
                    </div>
                    <div id="loginErrorMsg" class="alert alert-error hide">Username หรือ Password ไม่ถูกต้อง</div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember" id="remember"> Remember login
                      </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Log in</button>
                    <p><a href="/forgot/" >ลืมรหัสผ่าน ?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-xs-6">
                <p>สมัครใช้งานแจ่มใส<font color="#fefa99">ฟรี</font></p>
                <ul class="list-unstyled" style="line-height: 2">
                  <li><span class="fa fa-check text-success"></span> สะสมแต้มรางวัล</li>
                  <li><span class="fa fa-check text-success"></span> ค้นหาโปรโมชั่นใหม่ๆ</li>
                  <li><span class="fa fa-check text-success"></span> แลกของรางวัลมากมาย</li>
                  <li><span class="fa fa-check text-success"></span> สิทธิพิเศษเฉพาะผู้ใช้แจ่มใส</li>
                </ul>
                <br>
                <p><a href="/new-customer/" class="btn btn-info btn-block">Sign Up</a></p>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-right" data-dismiss="modal"><font size="4.5rem">ปิด</font></button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">
            <div class="banner">
                <h1 class="">Jamsai แจ่มใสไงจ๊ะ</h1>
            </div>
            <div class="subtitle"><h4>We do what we must, because we can.</h4></div>
        </div>
        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <!-- /#header -->

    <div id="story" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">แจ่มใสคืออะไร ?</h2>
            <p class="lead main text-center">ไม่บอก.</p>
            <div class="row text-center story">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                        <h3>EST. 2016</h3>
                        <p>แจ่มใสเพิ่งถือกำเนิดในปีนี้ และกำลังเติบโตขึ้นเรื่อยๆ !</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                        <h3>สะสมคะแนนจากร้านอาหาร</h3>
                        <p>ตรวจสอบโปรโมชั่นจากร้านโปรดของคุณ สะสมคะแนนทุกครั้งที่ใช้บริการเพื่อนำไปแลกส่วนลดหรือรางวัลพิเศษ </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                        <h3>สินค้าและบริการ</h3>
                        <p>ร้านค้า ร้านสะดวกซื้อ ร้านหนังสือ และบริการอื่นๆ ก็เป็นส่วนหนึ่งของแจ่มใส</p>
                    </div>
                </div>
            </div>
            <!-- /.services -->
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->

    <div id="facts" class="parallax parallax2 facts">
      <div class="bg-overlay"></div>
        <div class="container inner">
            <div class="row text-center services-3">
                <div class="col-sm-3">
                    <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-shopping-bag"></i> </div>
                    <h4>9796518</h4>
                    <p>ร้านค้าที่เข้าร่วมกับเรา</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-star"></i> </div>
                    <h4>5939472</h4>
                    <p>โปรโมชั่น</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-user-circle-o"></i> </div>
                    <h4>2188764</h4>
                    <p>สมาชิกที่ใช้งานแจ่มใส</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-users"></i> </div>
                    <h4>1480523</h4>
                    <p>จำนวนผู้เข้าชม</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div><!-- #facts -->

    <div id="food-menu" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">ร้านค้าที่เข้าร่วมกับแจ่มใส</h2>
            <p class="lead main text-center"></p>

                        <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                    <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>ข้าวต้มปลาหน้าเก๋ง</li>
                            <li>เจ้าดังของชลบุรี</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                    <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>ข้าวต้มปลาหน้าเก๋ง</li>
                            <li>เจ้าดังของชลบุรี</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                    <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>ข้าวต้มปลาหน้าเก๋ง</li>
                            <li>เจ้าดังของชลบุรี</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                    <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>ข้าวต้มปลาหน้าเก๋ง</li>
                            <li>เจ้าดังของชลบุรี</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>ข้าวต้มปลาหน้าเก๋ง</li>
                          <li>เจ้าดังของชลบุรี</li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>ข้าวต้มปลาหน้าเก๋ง</li>
                          <li>เจ้าดังของชลบุรี</li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>ข้าวต้มปลาหน้าเก๋ง</li>
                          <li>เจ้าดังของชลบุรี</li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop1.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">สมภพข้าวต้มปลา</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>ข้าวต้มปลาหน้าเก๋ง</li>
                          <li>เจ้าดังของชลบุรี</li>
                      </ul>
                  </div>
              </div>
            </div>

        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!--/#food-menu-->




    <div id="special-offser" class="parallax pricing">
      <div class="bg-overlay-white"></div>
        <div class="container inner">


            <h2 class="section-title text-center">โปรโมชั่นดีๆ ที่คุณห้ามพลาด!</h2>
            <p class="lead main text-center">หรือจะพลาดก็ได้มั้ง</p>

            <div class="row">
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="assets/images/deal1.jpg" alt="deal"></a>

                        <div class="pricing-item-details">

                            <h3><a href="#">ข้าวต้มฟรี</a></h3>

                            <p>ของฟรีอร่อยอยู่แล้ว</p>

                            <a class="btn btn-danger" href="#">สั่งซื้อ</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$16</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="assets/images/deal1.jpg" alt="deal"></a>

                        <div class="pricing-item-details">

                            <h3><a href="#">ข้าวต้มฟรี</a></h3>

                            <p>ของฟรีอร่อยอยู่แล้ว</p>

                            <a class="btn btn-danger" href="#">สั่งซื้อ</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$16</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="assets/images/deal1.jpg" alt="deal"></a>

                        <div class="pricing-item-details">

                            <h3><a href="#">ข้าวต้มฟรี</a></h3>

                            <p>ของฟรีอร่อยอยู่แล้ว</p>

                            <a class="btn btn-danger" href="#">สั่งซื้อ</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$16</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="assets/images/deal1.jpg" alt="deal"></a>

                        <div class="pricing-item-details">

                            <h3><a href="#">ข้าวต้มฟรี</a></h3>

                            <p>ของฟรีอร่อยอยู่แล้ว</p>

                            <a class="btn btn-danger" href="#">สั่งซื้อ</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$16</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div><!-- /#special-offser -->




    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">ร่วมเป็นส่วนหนึ่งกับแจ่มใส</h2>
            <p class="lead main text-center">เอาจริงดิ</p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" name="">
                        <div class="form-group">
                            <h4>สมัครสมาชิกกับเราเพื่อรับสิทธิประโยชน์มากมาย แน่นอนว่าฟรีไม่มีค่าใช้จ่ายใดๆ</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">first name</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="First name" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">last name</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Last name" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Phone" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">reservation date</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="reserv_date1" name="reserv_date" placeholder="Reservation date" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">number of guests</label>
                            <input class="form-control hint" type="text" id="numb_guests1" name="numb_guests" placeholder="Number of guests" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="alt_reserv_date1">time from</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="alt_reserv_date1" name="alt_reserv_date" placeholder="Time from" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="time1">time</label>
                            <input class="form-control timepicker ui-timepicker-input hint" type="text" id="time1" name="time" placeholder="Time to" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <p></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Reserve!</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">

                    <h3><i class="fa fa-info-circle fa-fw"></i>ติดต่อเรา</h3>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                    <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                    <p>ภาควิชาวิศวกรรมคอมพิวเตอร์ อาคารปฏิบัติการวิศวกรรม 2 (ECC) สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="mailto:zreast@gmail.com">zreast@gmail.com</a></p>
                    <p>Phone: +66 081-234-5678</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services -->
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #reservation -->



    <div id="chefs" class="parallax pricing">
      <div class="bg-overlay"></div>
        <div class="container inner">

            <h2 class="section-title text-center">ผู้พัฒนาแจ่มใส</h2>
            <p class="lead main text-center">ดูหน้ามันไว้</p>

            <div class="row text-center chefs">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="assets/images/dev1.jpg">
                        </div>
                        <h3>เซฟ</h3>
                        <p>ดูไม่จืด</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="assets/images/dev2.jpg">
                        </div>
                        <h3>รัก</h3>
                        <p>ดูไม่จืด</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="assets/images/dev3.jpg">
                        </div>
                        <h3>ฟ่าง</h3>
                        <p>ดูดี</p>
                    </div>
                </div>
            </div>

            <div class="row text-center chefs">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="assets/images/dev4.jpg">
                        </div>
                        <h3>เอ็ม</h3>
                        <p>ดูไม่จืด</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="assets/images/dev5.jpg">
                        </div>
                        <h3>แจ</h3>
                        <p>ดูไม่จืด</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="assets/images/dev6.jpg">
                        </div>
                        <h3>เอ</h3>
                        <p>ดูไม่จืด</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div><!-- /#chefs -->

    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Software Engineering CE KMITL 2016

                </div>
                <div class="col-sm-6">
                    <div class="social-bar">
                        <a href="#" class="fa fa-instagram tooltipped" title="instagram"></a>
                        <a href="#" class="fa fa-youtube-square tooltipped" title="youtube"></a>
                        <a href="#" class="fa fa-facebook-square tooltipped" title="facebook"></a>
                        <a href="#" class="fa fa-twitter-square tooltipped" title="twitter"></a>
                        <a href="#" class="fa fa-google-plus-square tooltipped" title="google+"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>
<script src='js/jquery.min.js'></script>
<script src='js/jquery.actual.min.js'></script>
<script src='js/jquery.scrollTo.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/modernizr.min.js'></script>
<script src="js/index.js"></script>




  </body>
</html>
