
<nav class="navbar navbar-expand-lg navbar-light bg-dark px-4">
    <a class="navbar-brand text-white" href="#">✨Appstro✨</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ">
          <li class="nav-item active mx-3">
             <a class="nav-link text-white" href="#">Inicio</a>
          </li>
          <li class="nav-item mx-3">
             <a class="nav-link text-white" href="{{route('login')}}">Usuarios</a>
          </li>
          <li class="nav-item mx-3">
             <a class="nav-link text-white" href="{{route('planetas')}}">Planetas</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-white" href="{{route('tipos_astros')}}">Tipos de Astros</a>
          </li>
       </ul>
    </div>
 </nav>
 
<style>

nav ul {
    list-style: none;

}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

nav ul li a {

    transition: font-size 0.2s ease-in-out;
}

nav ul li a:hover {
    font-size: 24px;
}
</style>
 