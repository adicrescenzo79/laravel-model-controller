@extends('layouts.app')
@section('content')


<main id="home">

  <div class="container flex">
    @foreach ($movies as $movie)
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front flex">
            <h1>{{$movie['title']}}</h1>
          </div>
          <div class="flip-card-back flex">
            <h1><span>Titolo originale:</span><br> {{$movie['original_title']}}</h1>
            <p><span>Nazione:</span>  {{$movie['nationality']}}</p>
            <p><span>Uscita:</span> {{date('Y', strtotime($movie['date']))}}</p>
            <p><span>Voto:</span> {{$movie['vote']}}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</main>








@endsection
