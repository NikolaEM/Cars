    @extends('app')
    <body class="antialiased">
    @section('content')
      <ul>
          
          <li>{{$cars->title}}</li>
          <li>{{$cars->producer}}</li>
          
      </ul>

    </body>
@endsection
