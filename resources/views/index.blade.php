<!--
        Zreast the Nerazzurri

Jamsai | Easy Reward Piont Gatherer

BETA Version 1.0

Developer :
Zreast, pongsakm2007, Halloweenrr, Anurak, Clavis, Sweetyblack
as Computer Engineering KMITL

part of Software Engineering class

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
                @if (Auth::guest())
                <a class="navbar-brand" href="/login"><h2>Jamsai</h2></a>
                @else
                <a class="navbar-brand" href="/home"><h2><font color=#fefa99>{{ Auth::user()->username }}</font></h2></a>
                @endif
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs" id="logo">
                @if (Auth::guest())
                <a href="/login"><img src="assets/images/jamsai_logo.svg" alt=""></a>
                @else
                <a href="/home"><img src="assets/images/jamsai_logo.svg" alt=""></a>
                @endif
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#story" id="Scroll2">About</a></li>
                <li><a href="#facts" id="Scroll3">Stats</a></li>
                <li><a href="#food-menu" id="Scroll4">Shops</a></li>
                <li><a href="#special-offser" id="Scroll5">Deals</a></li>
                <li><a href="#reservation" id="Scroll6">Contact</a></li>
                @if (Auth::guest())
                  <li><a href="{{ url('/login') }}"><font color="#fefa99">Log In</font></a></li>
                @else
        				  <li><a href="{{ url('/logout') }}"><font color="#fefa99">Log Out</font></a></li>
        		    @endif
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>
            </ul>
        </div><!--/.navbar-collapse -->

        <div class="fab-container">
            @if (Auth::check())
            <a href="/home"><div tooltip="View My Profile" class="profile fab"></div></a>
            @else
            <a href="/login"><div tooltip="Log In" class="profile fab"></div></a>
            @endif
          <div tooltip="Back To Top" class="top fab"></div>
        </div>



        </div><!-- container -->
    </div><!-- menu -->



    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">
            <div class="banner" id="buttonoverlay">
                <h1>JAMSAI | แจ่มใส</h1>
            </div>
            <div class="subtitle"><h4>All-In-One Easy Reward Point Gatherer</h4></div>
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
            <p class="lead main text-center"></p>
            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แจ่มใส คือการรวมตัวของร้านค้า บริการ ร้านอาหาร และอีกมากมาย เพื่อนำเสนอโปรโมชั่น และสิทธิพิเศษให้แก่คุณลูกค้า โดยมี <strong>แต้มแจ่มใส</strong> เป็นตัวกลาง คุณลูกค้าสามารถสะสมแต้มแจ่มใสได้จากการใช้บริการร้านค้าที่เข้าร่วมกับแจ่มใส และนำแต้มมาใช้แลกสิทธิประโยชน์ได้มากมาย

            @if (Auth::guest())
              <br><br><br>
            <div align="center" id="buttonoverlay">
              <a href="/register" class="action-button shadow animate purple" style="font-size: 3.5rem;">ร่วมเป็นส่วนหนึ่งกับแจ่มใส</a>
            </div>
            <div align="center">
              <p><br><font size="5rem"><font color="#ff3e5a">พิเศษ</font> สมัครแจ่มใสวันนี้ <font color="#800080">รับฟรี 100 แต้มทันที</font></font></p>
            </div>

            @endif

            <br><br>
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
                    <h4>{{ DB::table('users')->where('type', 2)->count() }}</h4>
                    <p>ร้านค้าที่เข้าร่วมกับเรา</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-star"></i> </div>
                    <h4>{{ DB::table('promotions')->count() }}</h4>
                    <p>โปรโมชั่น</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-user-circle-o"></i> </div>
                    <h4>{{ DB::table('users')->where('type', 1)->count() }}</h4>
                    <p>สมาชิกที่ใช้งานแจ่มใส</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-users"></i> </div>
                    <h4>
                      <script language="JavaScript">var fhsh = document.createElement('script');var fhs_id_h = "3199478";
                        fhsh.src = "//s1.freehostedscripts.net/ocount.php?site="+fhs_id_h+"&name=&a=1";
                        document.head.appendChild(fhsh);document.write("<span id='h_"+fhs_id_h+"'></span>");
                        </script>
                    </h4>
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
                            <li>ข้าวต้มปลาหน้าเก๋ง<br>
                            เจ้าดังของชลบุรี</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="assets/images/shop2.jpg" alt="Shop"></div>
                    <div class="menu-titles"><h1 class="">ร้านหนังสือดอกหญ้า</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>หนังสือ นิตยสาร วรรณกรรมเยาวชน จากสำนักพิมพ์ดอกหญ้า</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="assets/images/shop3.jpg" alt="Shop"></div>
                    <div class="menu-titles"><h1 class="">สนองโอษฐ์</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>Coffee Shop หวาน นุ่ม ละมุน พระจอมเกล้าลาดกระบัง</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="menu-images "><img src="assets/images/shop4.jpg" alt="Shop"></div>
                    <div class="menu-titles"><h1 class="">ชาชักโกอิน</h1></div>
                    <div class="menu-items ">
                        <ul>
                            <li>เกกี 4 ลาดกระบัง ชิมชาใต้ สบายๆกับเพลงเพื่อชีวิต</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop5.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">The Snowcap Bingsoo</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>ใครไม่ซู บิงซู ,อยู่ลาดกระบัง</li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop6.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">Hikaru</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>Japanese Fusion พาซีโอ้ ลาดกระบัง</li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop7.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">พี่วิ ไข่เจียว</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>ใครไม่เจียว พี่วิเจียว ,ไข่เจียว เจียวดาว ถ้าจะเอาไข่ดาวไปทอดเอง</li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-3 col-md-3">
                  <div class="menu-images "><img src="assets/images/shop8.jpg" alt="Shop"></div>
                  <div class="menu-titles"><h1 class="">Wine Connection</h1></div>
                  <div class="menu-items ">
                      <ul>
                          <li>International Food with Great Wine @Paseo Ladkrabang</li>
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

                            <p>สมภพข้าวต้มปลา ร่วมเป็นส่วนหนึ่งแสดงความยินดี แลกรับข้าวต้มฟรีได้เลยที่ร้าน</p>

                            <a class="action-button shadow animate red" href="#">ดูรายละเอียด</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">50pt</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="assets/images/deal2.jpg" alt="deal"></a>

                        <div class="pricing-item-details">

                            <h3><a href="#">กือโป๊ะรูสมิแล</a></h3>

                            <p>หัวข้าวเกรียบปลาแท้ กินคู่กับชา วันนี้ที่ชาชักโกอิน ฟรีทันทีเมื่อสั่งชาชัก 1 แก้ว</p>

                            <a class="action-button shadow animate red" href="#">ดูรายละเอียด</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">30pt</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="assets/images/deal3.jpg" alt="deal"></a>

                        <div class="pricing-item-details">

                            <h3><a href="#">สตรอว์เบอรี่บิงซู 1 แถม 1</a></h3>

                            <p>เมื่อสั่งสตรอว์เบอรี่บิงซู 1 ถ้วย แถมฟรีทันที 1 ถ้วย เฉพาะลูกค้าแจ่มใสเท่านั้น</p>

                            <a class="action-button shadow animate red" href="#">ดูรายละเอียด</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">100pt</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="assets/images/deal4.jpg" alt="deal"></a>

                        <div class="pricing-item-details">

                            <h3><a href="#">หนังสือ เลี้ยงลูกให้เป็นคนปกติ ราคาพิเศษ</a></h3>

                            <p>จากไม่รู้กี่บาท เหลือเพียง 39 บาทเท่านั้นเมื่อซื้อที่ร้านหนังสือดอกหญ้าทุกสาขา</p>
                              
                            <a class="action-button shadow animate red" href="#">ดูรายละเอียด</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">50pt</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <br><br>
            @if (Auth::user())
            <div align="center" id="buttonoverlay">
              <a href="/promotions" class="action-button shadow animate yellow" style="font-size: 3.5rem;">ดูโปรโมชั่นทั้งหมด</a>
            </div>
            @endif
        </div>
        <!-- /.container -->
    </div><!-- /#special-offser -->




    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">ติดต่อ สอบถาม และคำถามที่พบบ่อย</h2>
            <p class="lead main text-center"> </p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" name="">
                            <h2><i class="fa fa-question-circle" aria-hidden="true"></i><strong> FAQ :</strong></h4>
                <strong>Q : แต้มแจ่มใสคืออะไร ?</strong><br>
                &nbsp;&nbsp;&nbsp;แต้มแจ่มใส เป็นแต้มที่เพิ่มความสะดวกให้ผู้ใช้งาน เรารวบรวมร้านค้าที่เข้าร่วมกับแจ่มใสและใช้แต้มนี้ร่วมกัน เพื่อสิทธิประโยชน์ในการแลกของรางวัล และส่วนลดมากมาย<br><br>
                <strong>Q : สามารถได้แต้มแจ่มใสจากไหนบ้าง ?</strong><br>
                &nbsp;&nbsp;&nbsp;แต้มแจ่มใสมีวิธีได้มาหลายวิธี<br>
        				<i class="fa fa-check"></i> จากร้านค้าที่เข้าร่วมกับแจ่มใส เมื่อคุณใช้บริการตรงตามเงื่อนไข พนักงานจะถาม ID/เบอร์โทรศัพท์คุณเพื่อสะสมคะแนน<br>
        				<i class="fa fa-check"></i> จากการนำโค้ดมากรอกใน Profile ที่ปุ่ม <font color="#b98eb1"><i class="fa fa-exchange"></i> ใช้แต้มแลกรางวัล</font> โดยโค้ดจะได้จากการร่วมกิจกรรมจากทางร้านค้า หรืออื่นๆ<br>
        				<i class="fa fa-check"></i> 100 แต้ม ทันทีที่สมัครสมาชิก<br><br>
                <strong>Q : นำแต้มไปแลกโปรโมชั่นอย่างไร ?</strong><br>
                &nbsp;&nbsp;&nbsp;แลกได้ที่หน้าโปรโมชั่น โดยเมื่อแลกแล้ว กรุณาแจ้ง ID หรือเบอร์โทรศัพท์ พร้อมชื่อโปรโมชั่นที่ใช้ เพื่อยืนยันกับทางร้านค้า<br>

                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">

                    <h3><i class="fa fa-info-circle fa-fw"></i>ติดต่อเรา</h3>
                    <p>Mon to Sat: 10:00 AM -  7:00 PM<br>Sun: 12:30 PM - 9:00 PM</p>

                    <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                    <p>ภาควิชาวิศวกรรมคอมพิวเตอร์ อาคารปฏิบัติการวิศวกรรม 2 (ECC) สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: info@jamsai.arcanaforce.net</p>
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
<script src="js/backtotop.js"></script>




  </body>
</html>
