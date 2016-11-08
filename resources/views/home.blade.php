@extends('layouts.app')
<link rel="stylesheet" href="css/homestyle.css">
@section('content')

<div class="accordion-wrap">
	<br><br><br><br>
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
		<a href="#">Inbox <span class="pull-right alert-numb">11</span></a>
		<a href="#">Important <span class="pull-right alert-numb">10</span></a>
		<a href="#">Sent</a>
		<a href="#">Draft</a>
		<a href="#">Trash</a>
		<a href="#">All messages</a>
	</div>
	<a href="#"><i class="fa fa-get-pocket"></i>&nbsp;&nbsp;ใส่โค้ดโปรโมชั่นที่นี่</a>
	<div class="sub-nav">
		<div class="html chat">
			<div class="user user-khadkamhn clearfix">
				<span class="text-msg pull-right">I'm so unhappy :(</span>
			</div>
			<div class="user user-khadkamhn clearfix">
				<span class="text-msg pull-right">I have no invitation in dribbble yet. why?</span>
			</div>
			<div class="user user-dribble clearfix">
				<span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
				<span class="text-msg">Don't worry dude!</span>
			</div>
			<div class="user user-dribble clearfix">
				<span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
				<span class="text-msg">Some awesome people may find you and invite you soon.... :)</span>
			</div>
		</div>
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
