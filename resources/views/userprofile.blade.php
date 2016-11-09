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
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="stylesheet" type="text/css"  href="assets/fonts/font.css">
    <link rel="stylesheet" href="assets/fonts/awesome/css/font-awesome.min.css">

  </head>

  <body>
		<br><br><br><br><br><br><br><br>
		<div align="center">
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Modal1">
				ใช้แต้ม
			</button>
		</div>
		
		
		<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">ยืนยัน</h4>
		      </div>
		      <div class="modal-body">
					แน่ใจปะ
		      </div>
		      <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Just Do It</button>
		      </div>
		    </div>
		  </div>
		</div>
		

		<script src='js/jquery.min.js'></script>
		<script src='js/jquery.actual.min.js'></script>
		<script src='js/jquery.scrollTo.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<script src='js/modernizr.min.js'></script>
		<script src="js/index.js"></script>
		<script src="js/backtotop.js"></script>




  </body>
</html>
