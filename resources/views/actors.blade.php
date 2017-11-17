@extends("masterPage")

@section("titulo")
  Listado de actor seleccionado
@endsection

@section("principal")
  <h1>Usted ha seleccionado: {{$actor->getNombreCompleto()}}</h1>
  <h2>Rating: {{$actor->rating}}</h2>
  <h4>Películas que protagonizó el actor:</h4>
  <ul>
    @forelse($actor->peliculas as $pelicula)
      <li>
        <a href="/pelicula/{{$pelicula->id}}">
          {{$pelicula->title}}
        </a>
      </li>
    @empty
      <p>
        Este actor no ha estado en nada :(
      </p>
    @endforelse
  </ul>
@endsection
