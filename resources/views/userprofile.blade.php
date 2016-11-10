@extends('layouts.app')
<link rel="stylesheet" href="css/homestyle.css">
@section('content')

<div class="accordion-wrap">
	<br><br><br>
<div class="accordion">
	<a href="#" class="active" style="font-weight: bold;"><i class="fa fa-user"></i> Profile</a>
	<div class="sub-nav active">
		<div class="html about-me">
			<div class="photo">
				<div class="photo-overlay">
					<span class="plus">+</span>
				</div>
			</div>
			<h4>{{ Auth::user()->name }}</h4>
			<br>
				<table style="width:100%; font-size:2.2rem;">
				  <tr>
				    <td><font style="font-weight: bold;" color="#b98eb1">Username</font></td>
				    <td>{{ Auth::user()->username }}</td>
				  </tr>
				  <tr>
				    <td><font style="font-weight: bold;" color="#b98eb1">E-mail</font></td>
				    <td>{{ Auth::user()->email }}</td>
				  </tr>
					<tr>
				    <td><font style="font-weight: bold;" color="#b98eb1">เบอร์โทรศัพท์</font></td>
				    <td>{{ Auth::user()->phonenumber }}</td>
				  </tr>
					<tr>
				    <td><font style="font-weight: bold;" color="#b98eb1">สมัครสมาชิกแจ่มใสเมื่อ</font></td>
				    <td>{{ Auth::user()->created_at }}</td>
				  </tr>
				</table>

			<div class="social-link">
			</div>
		</div>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-star"></i>&nbsp;&nbsp;แต้มแจ่มใสของคุณ <span class="pull-right alert-numb">{{ Auth::user()->score }}</span></a>
	<div class="sub-nav">
		<a href="#" data-toggle="modal" data-target="#infoModal1">แต้มแจ่มใสคืออะไร ?</a>
		<a href="#" data-toggle="modal" data-target="#infoModal2">แต้มแจ่มใส สามารถทำอะไรได้บ้าง ?</a>
		<a href="#" data-toggle="modal" data-target="#infoModal3">ใช้แต้มแจ่มใสได้ที่ไหน ?</a>
		<a href="#" data-toggle="modal" data-target="#infoModal4">จะได้รับแต้มแจ่มใสจากไหนบ้าง ?</a>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-get-pocket"></i>&nbsp;&nbsp;ใส่โค้ดรับแต้มแจ่มใส</a>
	<div class="sub-nav">
		<form action='userRedeem' method='get'>
		  <br><p>&nbsp;&nbsp;นำโค้ดที่ได้รับจากร้านค้ามากรอกที่นี่ เพื่อรับแต้มแจ่มใส</p>
		  <label>
		    <p>&nbsp;&nbsp;&nbsp;Jamsai Redeem Code <i class="fa fa-check-square"></i><br></p>
		    &nbsp;&nbsp;	<input name='redeemCode' type='text'>
		  </label>

		  <input type='submit'>
		</form>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-exchange"></i>&nbsp;&nbsp;ใช้แต้มแลกรางวัล</a>
	<div class="sub-nav">
		<form action='userExchageReward' method='get'>
		  <br><p>&nbsp;&nbsp;กรอก Promotion ID ที่คุณต้องการแลกของรางวัล</p>
		  <label>
		    <p>&nbsp;&nbsp;&nbsp;Promotion ID <i class="fa fa-search"></i><br></p>
		    &nbsp;&nbsp;	<input name='promotionID' type='text'>
		  </label>
		  <input type='submit'>
		</form>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-gear"></i>&nbsp;&nbsp;แก้ไขข้อมูลส่วนตัว</a>
	<div class="sub-nav">
		<div class="html invite">
			<p>I would like to join <span class="dribbble">dribbble</span> community</p>
			<p>Could you please invite me?</p>
			<a class="btn" href="http://dribbble.com/khadkamhn/" target="_blank">Draft Me</a>
		</div>
	</div>
</div>
</div>

<div class="modal fade" id="infoModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <font color="#b98eb1" style="font-weight: bold;">แต้มแจ่มใส</font> เป็นแต้มที่เพิ่มความสะดวกให้ผู้ใช้งาน เรารวบรวมร้านค้าที่เข้าร่วมกับแจ่มใสและใช้แต้มนี้ร่วมกัน เพื่อสิทธิประโยชน์ในการแลกของรางวัล และส่วนลดมากมาย
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="infoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        สมาชิกสามารถใช้แต้มแจ่มใสแลกรับ<font color="#b98eb1" style="font-weight: bold;">โปรโมชั่น/ส่วนลด</font>ภายในเว็บไซต์แจ่มใส หรือแลกของรางวัลกับทางร้านค้าโดยตรง โดยใช้ ID/เบอร์โทรศัพท์ในการยืนยันตัวตน
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="infoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        สมาชิกสามารถใช้แต้มแจ่มใสได้ในหน้านี้ ที่ปุ่ม <font color="#b98eb1"><i class="fa fa-exchange"></i> ใช้แต้มแลกรางวัล</font> แล้วกรอก ID ของโปรโมชั่นที่ต้องการแลกของรางวัล หรือสามารถเลือกดูโปรโมชั่น/ส่วนลดที่คุณต้องการได้ที่<a href="/#special-offser">หน้าหลักของเว็บไซต์</a>
			</div>
    </div>
  </div>
</div>

<div class="modal fade" id="infoModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <font style="font-weight: bold;">แต้มแจ่มใสมีวิธีได้มาหลายวิธี</font><br>
				<i class="fa fa-check"></i> จากร้านค้าที่เข้าร่วมกับแจ่มใส เมื่อคุณใช้บริการตรงตามเงื่อนไข พนักงานจะถาม ID/เบอร์โทรศัพท์คุณเพื่อสะสมคะแนน<br>
				<i class="fa fa-check"></i> จากการนำโค้ดมากรอกในหน้านี้ ที่ปุ่ม <font color="#b98eb1"><i class="fa fa-exchange"></i> ใช้แต้มแลกรางวัล</font> โดยโค้ดจะได้จากการร่วมกิจกรรมจากทางร้านค้า หรืออื่นๆ<br>
				<i class="fa fa-check"></i> 100 แต้ม ทันทีที่สมัครสมาชิก<br>
				<i class="fa fa-check"></i> 50 แต้ม สำหรับการ<a href="/#reservation">ส่งข้อเสนอแนะ/ปรับปรุงให้กับทางแจ่มใส</a>

      </div>
    </div>
  </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/home.js"></script>


@endsection
