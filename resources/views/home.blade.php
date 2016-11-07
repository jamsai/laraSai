<link rel="stylesheet" href="css/homestyle.css">
@extends('layouts.app')

@section('content')
<aside class="profile-card">

	<header>

		<!-- here’s the avatar -->
		<a href="#">
			<img src="http://victory-design.ru/sandbox/codepen/profile_card/avatar.svg" />
		</a>

		<!-- the username -->
		<h1>{{ Auth::user()->username }}</h1>

		<!-- and role or location -->
		<h2>{{ Auth::user()->name }}</h2>

	</header>

	<!-- bit of a bio; who are you? -->
	<div class="profile-bio">

		<p align="left"><font color="#b98eb1">แต้มของคุณ</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{ Auth::user()->score }} แต้ม<br>
		<font color="#b98eb1">E-mail</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	 {{ Auth::user()->email }}<br>
		<font color="#b98eb1">เบอร์โทรศัพท์</font>&nbsp&nbsp&nbsp&nbsp {{ Auth::user()->phonenumber }}<br>
		<font color="#b98eb1">สมัครสมาชิกเมื่อ</font> {{ Auth::user()->created_at }}
		</p>


	</div>

</aside>
@endsection
