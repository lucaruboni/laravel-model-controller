@extends('layout.app')

@section('content')
<div class="container">

    <h1 class="text-center py-3">FILMONI e filmini</h1>

    <div class="row row-cols-3 gap-5 justify-content-evenly">
    

    @forelse ($movies as $movie )
    <div class="card text-center align-self-center">
      <img class="card-img-top my_card_img" src="https://www.themoviedb.org/t/p/original/pXiL2rryAS1eivuQUQOsg4kzPun.jpg" alt="Title">
      <div class="card-body">
        <h4 class="card-title">{{$movie->title}}</h4>
        <p class="card-text">{{$movie->original_title}}</p>
        <p class="card-text">{{$movie->nationality}}</p>
        <p class="card-text">release date:{{$movie->date}}</p>
        <p class="card-text">vote:{{$movie->vote}}/10</p>
      </div>
    </div>
    @empty
    <h1>No Film Yet!</h1>
    @endforelse 
    </div>
</div>



   
</ul>
@endsection