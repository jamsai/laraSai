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

		<p align="left">แต้มแจ่มใสของคุณ : {{ Auth::user()->score }} แต้ม<br>
		E-mail : {{ Auth::user()->email }}<br>
		เบอร์โทรศัพท์ : {{ Auth::user()->phonenumber }}<br>
		สมัครสมาชิกแจ่มใสเมื่อ : {{ Auth::user()->created_at }}
		</p>


	</div>

</aside>
@endsection
