@extends('layouts.app')
<link rel="stylesheet" href="css/homestyle.css">
@section('content')

<div class="accordion-wrap">
	<br><br><br>
<div class="accordion">
	<a href="#" class="active"><i class="fa fa-user"></i> Profile</a>
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
				    <td><font color="#b98eb1">Username</font></td>
				    <td>{{ Auth::user()->username }}</td>
				  </tr>
				  <tr>
				    <td><font color="#b98eb1">E-mail</font></td>
				    <td>{{ Auth::user()->email }}</td>
				  </tr>
					<tr>
				    <td><font color="#b98eb1">เบอร์โทรศัพท์</font></td>
				    <td>{{ Auth::user()->phonenumber }}</td>
				  </tr>
					<tr>
				    <td><font color="#b98eb1">สมัครสมาชิกแจ่มใสเมื่อ</font></td>
				    <td>{{ Auth::user()->created_at }}</td>
				  </tr>
				</table>

			<div class="social-link">
				<a class="link link-twitter" href="http://twitter.com/khadkamhn/" target="_blank"><i class="fa fa-twitter"></i></a>
				<a class="link link-codepen" href="http://codepen.io/khadkamhn/" target="_blank"><i class="fa fa-codepen"></i></a>
				<a class="link link-facebook" href="http://facebook.com/khadkamhn/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a class="link link-dribbble" href="http://dribbble.com/khadkamhn" target="_blank"><i class="fa fa-dribbble"></i></a>
			</div>
		</div>
	</div>
	<a href="#"><i class="fa fa-star"></i>&nbsp;&nbsp;แต้มแจ่มใสของคุณ <span class="pull-right alert-numb">{{ Auth::user()->score }}</span></a>
	<div class="sub-nav">
		<a href="#">แต้มแจ่มใสคืออะไร ?</a>
		<a href="#">แต้มแจ่มใส สามารถทำอะไรได้บ้าง ?</a>
		<a href="#">ใช้แต้มแจ่มใสได้ที่ไหน ?</a>
		<a href="#">จะได้รับแต้มแจ่มใสจากไหนบ้าง ?</a>
	</div>
	<a href="#"><i class="fa fa-get-pocket"></i>&nbsp;&nbsp;ใส่โค้ดรับแต้มแจ่มใส</a>
	<div class="sub-nav">
		<form action='userRedeem' method='get'>
		  <br><p>&nbsp;นำโค้ดที่ได้รับจากร้านค้ามากรอกที่นี่ เพื่อรับแต้มแจ่มใส</p>
		  <label>
		    <p align="center">&nbsp;Jamsai Redeem Code :
		    <input name='redeemCode' type='text'>
		  </label>

		  <input type='submit'></p>
		</form>
	</div>
	<a href="#"><i class="fa fa-exchange"></i>&nbsp;&nbsp;ใช้แต้มแลกรางวัล</a>
	<div class="sub-nav">
		<form action='userExchageReward' method='get'>
		  <br><p>&nbsp;กรอก Promotion ID ที่คุณต้องการแลกของรางวัล</p>
		  <label>
		    <p align="center">&nbsp;Promotion ID :
		    <input name='promotionID' type='text'>
		  </label>
		  <input type='submit'></p>
		</form>
	</div>
	<a href="#"><i class="fa fa-gear"></i>&nbsp;&nbsp;แก้ไขข้อมูลส่วนตัว</a>
	<div class="sub-nav">
		<div class="html invite">
			<p>I would like to join <span class="dribbble">dribbble</span> community</p>
			<p>Could you please invite me?</p>
			<a class="btn" href="http://dribbble.com/khadkamhn/" target="_blank">Draft Me</a>
		</div>
	</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/home.js"></script>
<script src="js/gradient.js"></script>


@endsection
