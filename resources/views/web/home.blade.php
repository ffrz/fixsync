@extends('web.layout')

@section('content')
  <h1>Selamat datang di Service Manager</h1>
  <ul>
    <li><a href="{{ route('track-service-order') }}">Lacak Status Servis</a></li>
    <li><a href="#">Ingin punya aplikasi ini?</a></li>
    <li><a href="#">Info Tempat Servis</a></li>
  </ul>
  <section>
    <h2>Servis Manager</h2>
    <p>
      Servis Manager adalah aplikasi pengelolaan data servis
      berbasis web yang dapat membantu Anda dalam mengelola data servis
      secara online.
    </p>
  </section>
@endsection
