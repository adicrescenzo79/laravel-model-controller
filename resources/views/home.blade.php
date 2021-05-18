@extends('layouts.app')
@section('content')


<main id="home">

  <div class="container flex">
    @foreach ($movies as $movie)
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h1>{{$movie['title']}}</h1>
          </div>
          <div class="flip-card-back">
            <h1>{{$movie['original_title']}}</h1>
            <p>{{$movie['nationality']}}</p>
            <p>{{$movie['date']}}</p>
            <p>{{$movie['vote']}}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</main>








@endsection
