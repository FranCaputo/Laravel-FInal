@extends("masterPage")


@section("titulo")
  {{$peliFinal->title}}
@endsection

@section("principal")
  <h1>Detalle de peli</h1>
  <h2>{{$peliFinal->title}}</h2>
  <p>Premios: {{$peliFinal->awards}}</p>
  <p>Duración: {{$peliFinal->length}}</p>
  <p>Fecha de estreno: {{$peliFinal->release_date}}</p>
  @if($peliFinal->genero !== null)
    <p>Género: {{$peliFinal->genero->name}}</p>
  @else
    <p>Esta película no tiene definido un género</p>
  @endif
  <p>Actores:
    <ul>
      @foreach($peliFinal->actores as $actor)
        <li>
          {{$actor->getNombreCompleto()}}
        </li>
      @endforeach
    </ul>
  </p>
  <a href="/borrarPelicula/{{$peliFinal->id}}">
    <button type="button" name="button" class="btn btn-danger">Borrar</button>
  </a>
  <a href="/editarPelicula/{{$peliFinal->id}}">
    <button type="button" name="button" class="btn btn-warning">Editar</button>
  </a>
@endsection
