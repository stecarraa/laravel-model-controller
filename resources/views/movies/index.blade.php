@extends("layouts.mainContentLayout")

@section("title", "Movies")

@section("main-content")
  <div class="container text-center">
    <h2>Movies</h2>

    @forelse ($movies as $movie)



   <div class="container">
    <div class="card border border-primary shadow-0 mb-3">
        <div class="card-header">Title: {{ $movie->title }} - {{ $movie->date }}</div>
        <div class="card-body text-primary">
          <h5 class="card-title">Vote: {{ $movie->vote }}</h5>
          <p class="card-text"> Original title: {{ $movie->original_title }} - {{ $movie->nationality }}</p>
        </div>
      </div>
   </div>
 
    @empty
        <h4>No movies found</h4>
 
    @endforelse
  </div>
   
@endsection