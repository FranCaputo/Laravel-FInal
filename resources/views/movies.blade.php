@extends("masterPage")

@section("titulo")
  Listado de películas del género seleccionado
@endsection

@section("principal")
  <h1>Usted ha seleccionado: {{$genero->name}}</h1>
  <h4>Películas que pertenecen a este género:</h4>
  <ul>
    @forelse($genero->peliculas as $pelicula)
      <li>
        <a href="/pelicula/{{$pelicula->id}}">
          {{$pelicula->title}}
        </a>
      </li>
    @empty
      <p>
        No hay películas para este género
      </p>
    @endforelse
  </ul>
@endsection
