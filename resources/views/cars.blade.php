@extends('app')
@section('content')
    <body class="antialiased">
        @foreach($cars as $car)
        
      <h1>{{$car->title}}</h1>
      @endforeach
      <a href="/cars/{{$car->id}}">Cars page</a>
    </body>

@endsection

