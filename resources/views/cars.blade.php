@extends('app')
@section('content')
    <body class="antialiased">
        @foreach($cars as $car)
        
        <a href="/cars/{{$car->id}}"> <h1>{{$car->title}}</h1></a>
      @endforeach
     
    </body>



