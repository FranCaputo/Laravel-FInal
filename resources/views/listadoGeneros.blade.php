@extends("masterPage")

@section("titulo")
  Listado de Géneros
@endsection

@section("principal")
  <h1>Mis Géneros</h1>
  <ul>
    @if (count($generos) > 0)
      @foreach($generos as $key => $genero)
        <li>
          <a href="/genero/{{$genero->id}}">
            {{$genero->name}}
          </a>
        </li>
      @endforeach
    @else
      <p>
        No hay géneros
      </p>
    @endif
  </ul>
@endsection
