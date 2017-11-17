<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield("titulo")
    </title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body> 
  @if(isset($url))
    <h2>Inicio</h2>
  @endif  
    <header>
    @if(session('usuario') && isset($url))
    <li>Hola {{session('usuario')->name}}</li>
    @endif 
      <nav>
        <ul>
          <li>
            <a href="/peliculas">
              Películas
            </a>
          </li>
          <li>
            <a href="/generos">
              Géneros
            </a>
          </li>
          <li>
            <a href="/actores">
              Actores
            </a>
          </li>
          <li>
            <a href="/pelisBuenRating">
              ¡Películas con mejor Rating!
            </a>
          </li>
        </ul>
      </nav>
      @if(!isset($url))
        <a href="http://localhost:8000/miSitio">Volver a home</a>
      @endif  
    </header>
    <section id="principal" class="container">
      @yield("principal")
    </section>
    <footer class="text-muted">
      Franco Caputo Movies, 2017
    </footer>
  </body>
</html>
