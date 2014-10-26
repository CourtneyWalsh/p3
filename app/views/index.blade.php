@extends('_master')

@section('title')
  Developer's Best Friend
@stop

@section('head')
@stop

<body>
@section('header')
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <h1>A Developers Best Friend</h1>
                <a href="/generate_ipsum" class="page-scroll btn btn-xl">Lorem Ipsum Generator</a>
                <a href="/generate_user" class="page-scroll btn btn-xl">Random User Generator</a>
            </div>
        </div>
    </header>

@section('content')
	<div class="container">
	<div class="col-md-6">
		<h2>What Is Lorem Ipsum?</a></h2>
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
		</p>
	</div>
	<div class="col-md-6">
		<h2>What Is A User Generator?</a></h2>
		<p>
			Similar to the Lorem Ipsum Generator, this application allows you to generate a number of fake users to test your own applications. It also gives you the option to generate users with addresses and filler text of their own. This project is based on http://randomuser.me/ which was designed and developed by Aarron Hunt and Keith Armstrong.  
		</p>
	</div>
	</div>
</body>
 @yield('footer')

@stop
