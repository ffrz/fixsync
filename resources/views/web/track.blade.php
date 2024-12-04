@extends('web.layout')

@section('content')
  <h1>Lacak Status Servis</h1>
  <section>
    <form method="post" action="{{ route('tracker.track') }}">
      @csrf
      <div>
        <label for="orderId">No Servis</label>
        <br />
        <input type="text" for="orderId">
        <br />
        <button type="submit">Cek Status</button>
      </div>
    </form>
  </section>
@endsection
