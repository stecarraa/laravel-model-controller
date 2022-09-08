@extends("layouts.mainContentLayout")

@section("title", "Movies")

@section("main-content")
   <h2>card film</h2>

   @forelse ($movies as $movie)

   <div>
       <h3>
           Title: {{ $movie->title }} - {{ $movie->date }}
       </h3>
       <h4>
           Original title: {{ $movie->original_title }} - {{ $movie->language }}
       </h4>
       <h4>
           Vote: {{ $movie->vote }}
       </h4>

   </div>

   @empty
       <h4>No movies found</h4>

   @endforelse
   
@endsection