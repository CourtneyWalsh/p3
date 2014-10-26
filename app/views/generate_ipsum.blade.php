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
                <h1>Loreum Ipsum Generator</h1>
                <a href="/generate_ipsum" class="page-scroll btn btn-xl">Lorem Ipsum Generator</a>
                <a href="/generate_user" class="page-scroll btn btn-xl">Random User Generator</a>
            </div>
        </div>
    </header>
	<br>
	<br>
	<br>
@section('content')
		<div class="container">
		<center>

	{{ Form::open(array('url' => '/generate_ipsum')) }}
		{{ Form::label('total_paragraphs', 'The Total Number of paragraphs (Max: 99)') }}
		{{ Form::text('total_paragraphs', 5, ['maxlength' => 2]) }}
		
		<br><br>
		
		{{ Form::submit('Generate') }}
	{{ Form::close() }}
</div>
		@if (Request::isMethod('post'))
		@foreach ($ipsum as $paragraph)
			<p>{{ $paragraph }}</p>
		@endforeach
	@endif
	</center>
</body>
@stop