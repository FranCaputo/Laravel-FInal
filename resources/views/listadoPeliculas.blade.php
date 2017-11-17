@extends("masterPage")

@section("titulo")
  Listado de películas
@endsection

@section("principal")
  <h1>Mis películas</h1>
  <ul>
    @forelse($filtrados as $key => $pelicula)
      <li>
        <a href="/pelicula/{{$pelicula->id}}">
          {{$pelicula->title}}
        </a>
      </li>
      <li>
        <span>
          Premios x minuto: {{$premiosPorMinuto[$key]}}
        </span>
      </li>
      <br>
    @empty
      <p>
        No hay películas
      </p>
    @endforelse
  </ul>
@endsection
