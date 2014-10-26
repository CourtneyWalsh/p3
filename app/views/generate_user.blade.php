@extends('_master')

@section('title')
  Developer's Best Friend
@stop

@section('head')
@stop

@section('header')
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <h1>Random User Generator</h1>
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
  {{ Form::open(array('url' => '/generate_user')) }}
    {{ Form::label('total_users', 'The Total Number of Users (Max: 99)') }}
    {{ Form::text('total_users', 5, ['maxlength' => 2]) }}
    
    <br>
    
    
    {{ Form::label('address', 'Location') }}
    {{ Form::checkbox('address') }}


<br><br>

    {{ Form::submit('Generate') }} 
{{ Form::close(); }}


@if (Request::isMethod('post'))
    @foreach ($users as $user)
      <p>{{ $user["name"] }}
      @if ($user["address"])
        <br>{{ $user["address"] }}
      @endif
      </p>
    @endforeach
  @endif
  </center>
@stop