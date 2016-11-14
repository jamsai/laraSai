@extends('layouts.app')

<link rel="stylesheet" href="css/homestyle.css">

@section('content')

<div class="accordion-wrap">
	<br><br><br>
<div class="accordion">
	<a href="#" class="active" style="font-weight: bold;"><i class="fa fa-user"></i> Jamsai Shop Control</a>
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
	<a href="#" style="font-weight: bold;"><i class="fa fa-gear"></i>&nbsp;&nbsp;ยืนยันการใช้โปรโมชั่น - Verify Promotions</a>
	<div class="sub-nav">
		<a href="/rewards"><i class="fa fa-sliders"></i> <font style="font-weight: bold;">Verify Management</font></a>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-users"></i>&nbsp;&nbsp;ลูกค้าแจ่มใสของคุณ - Your Customer <span class="pull-right alert-numb">{{ DB::table('users')->where('type', 1)->count() }}</span></a>
	<div class="sub-nav">
      <a href="/users"><i class="fa fa-sliders"></i> <font style="font-weight: bold;">Customer Management</font></a>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-star"></i>&nbsp;&nbsp;โปรโมชั่นของร้าน - Shop Promotions <span class="pull-right alert-numb">{{ DB::table('promotions')->count() }}</span></a>
	<div class="sub-nav">
      <a href="/promotions"><i class="fa fa-sliders"></i> <font style="font-weight: bold;">Promotion Management</font></a>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-link"></i>&nbsp;&nbsp;โค้ดแจ่มใสของร้าน - Your Redeem Codes <span class="pull-right alert-numb">{{ DB::table('redeemcodes')->count() }}</span></a>
	<div class="sub-nav">
      <a href="/redeemcodes"><i class="fa fa-sliders"></i> <font style="font-weight: bold;">Redeem Code Management</font></a>
	</div>
	<a href="#" style="font-weight: bold;"><i class="fa fa-gear"></i>&nbsp;&nbsp;แก้ไขข้อมูลส่วนตัว</a>
	<div class="sub-nav">
		<a href="{{ URL::to('users/' . Auth::user()->id . '/edit') }}"><i class="fa fa-sliders"></i> <font style="font-weight: bold;">Profile Setting</font></a>
	</div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/home.js"></script>


@endsection
