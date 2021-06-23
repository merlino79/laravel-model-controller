
@extends('layouts.main')

@section('content')

 <main>
   <div class="container">
     <div class="row">
       <div class="col">
         @foreach ($movies as $movie )
           <li>
             title:
              {{ $movie['title']}}
           </li>
           <li>
             titolo originale:
              {{ $movie['original_title']}}
           </li>
         @endforeach
       </div>
       <div class="col">
         <p>ricerca titolo:
           {{ $movies1[0]['title']}}</p>
        
       </div>
       <div class="col">
         @foreach ($movies4 as $film )
           <p>{{ $film['original_title']}}</p>
         @endforeach
         
       </div>
     </div>
   </div>
 </main>

@endsection