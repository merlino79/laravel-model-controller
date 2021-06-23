
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
     </div>
   </div>
 </main>

@endsection