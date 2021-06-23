
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
     </div>
   </div>
 </main>

@endsection