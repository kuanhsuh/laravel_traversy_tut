@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
      <h1>{{ $title }}</h1>
      <p>this is the laravel app from youtube</p>
      <p>
      <a href="/login" class="btn btn-primary btn-lg">Login</a>
      <a href="/register" class="btn btn-success btn-lg">Register</a>

      </p>
</div>
@endsection