<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">

    <title>Materias</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>




  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    width: 100%;
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);

  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;

  }

  .btn-bd-primary {
    --bd-violet-bg: #712cf9;
    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

    --bs-btn-font-weight: 600;
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bd-violet-bg);
    --bs-btn-border-color: var(--bd-violet-bg);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: #6528e0;
    --bs-btn-hover-border-color: #6528e0;
    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
    --bs-btn-active-color: var(--bs-btn-hover-color);
    --bs-btn-active-bg: #5a23c8;
    --bs-btn-active-border-color: #5a23c8;
  }

  .bd-mode-toggle {
    z-index: 1500;
  }

  .bd-mode-toggle .dropdown-menu .active .bi {
    display: block !important;
  }

  .card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;

  }

  .card:hover .card-overlay {   /* tarjeta oscura de fondo  */
    opacity: 1;
    border-radius:15px;

  }

  .card-img-top {
    width: 100%; /* Ancho de la imagen */
    height: 500px; /* Ajusta la altura para una forma más rectangular */
    object-fit: cover; /* Asegura que la imagen cubra todo el espacio sin deformarse */
    transition: opacity 0.3s ease;
    border-radius:15px;
  }

  .card:hover .card-img-top {
    opacity: 0.3;
  }

  .card {
    margin: 0 15px; /* Añade margen lateral entre las tarjetas */
    border-radius:15px;
  }



.a12{
background-color:black;
color :black;
  }


.maini3{
    color:white;
}
.maini {
    color:white;
}

</style>





  </head>
  <body class="a12">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13 0a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm10.657 6.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 0a.5.5 0 0 1 .707 0l-1.414 1.414a.5.5 0 0 1-.707-.707l1.414-1.414zm9.193-9.193a.5.5 0 0 1-.707 0L11.343.343a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zm-9.193 0a.5.5 0 0 1 0-.707L3.88.343a.5.5 0 1 1 .707.707L3.172 2.464a.5.5 0 0 1-.707 0z"/>
      </symbol>
    </svg>






    <main class="maini">
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Como dijo Eleanor ....</h1>
            <p class="maini3">"El futuro pertenece a aquellos que creen en la belleza de sus sueños."   Eleanor Roosevelt — (1884-1962) </p>
          </div>
        </div>
      </section>






      <div class="album py-5 bg-body-tertiary">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img src="imagenes/ciudad.jpg" class="card-img-top" alt="Imagen 1">
                <div class="card-overlay">
                  <div class="card-body">
                    <p class="card-text">"Vivimos en un mundo en constante crecimiento y competencia, digitaliza tu negocio y fortalece tu presencia. Nosotros te ayudamos a crear una web que impulse tu éxito."</p>
                  </div>
                </div>
              </div>
            </div>




            <div class="col">
              <div class="card shadow-sm">
                <img src="imagenes/t11ñ.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-overlay">
                  <div class="card-body">
                    <p class="card-text"> ¿Por qué tu aldea o pueblo necesita una página web?

Promoción del turismo: Atrae visitantes mostrando la belleza y encanto de tu comunidad.
Información accesible: Proporciona a residentes y visitantes datos útiles como eventos locales y servicios disponibles.
Cultura y tradiciones: Preserva y comparte la historia y las tradiciones de tu pueblo.
Déjanos ayudarte a destacar todo lo que hace único tu lugar favorito.</p>
                  </div>
                </div>
              </div>
            </div>








            <div class="col">
              <div class="card shadow-sm">
                <img src="imagenes/futuro.jpg" class="card-img-top" alt="Imagen 2">
                <div class="card-overlay">
                  <div class="card-body">
                    <p class="card-text">“Visualiza hasta dónde puedes llegar desde tu punto de partida y hasta dónde podrías llegar con el apoyo adecuado. Si tienes una idea, nosotros la transformamos en realidad.”</p>
                  </div>
                </div>
              </div>
            </div>





            <div class="col">
            <br><br>
              <div class="card shadow-sm">
                <img src="imagenes/charlemos.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-overlay">
                  <div class="card-body">
                    <p class="card-text">“Valoramos la confianza y el trato directo. Por eso, nos dedicamos a crear sitios web a medida, pensando siempre en tus necesidades para llevar tu negocio al mundo digital de manera efectiva.”</p>
                  </div>
                </div>
              </div>
            </div>






            <div class="col">
            <br><br>
              <div class="card shadow-sm">
                <img src="imagenes/idea11.png" class="card-img-top" alt="Imagen 3">
                <div class="card-overlay">
                  <div class="card-body">
                    <p class="card-text">Esta es una breve descripción de la imagen 3.</p>
                  </div>
                </div>
              </div>
            </div>



            <div class="col">
            <br><br>
              <div class="card shadow-sm">

                <img src="imagenes/celebraciones.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-overlay">
                  <div class="card-body">
                    <p class="card-text">“Ya sea que tengas un restaurante, una tienda, un pequeño hostal, una clínica, una agencia de viajes o cualquier otro tipo de negocio, digitalízate y atrae más clientes con un sitio web a medida.”</p>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </main>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
