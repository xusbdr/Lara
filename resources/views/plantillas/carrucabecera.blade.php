<style>
    /* Alargar el carrusel verticalmente */
    .custom-carousel-img {
        height: 600px; /* Ajusta la altura según tus necesidades */
        width: 100%; /* Corrige a 100% para evitar desbordamiento */
        object-fit: cover; /* Ajusta para cubrir el área sin distorsionar la imagen */
    }

    /* Quitar esquinas redondeadas */
    .custom-carousel-img {
        border-radius: 0;
    }
</style>

<div id="myCarouselee" data-ride="carousel">


  <!-- Slides del carrusel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/t3.jpg" alt="Imagen 1">
      <div class="carousel-caption">
        <h3>Título de la imagen 1</h3>
        <p>Descripción de la imagen 1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/t1.jpg" alt="Imagen 2">
      <div class="carousel-caption">
        <h3>Título de la imagen 2</h3>
        <p>Descripción de la imagen 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagenes/t2.jpg" alt="Imagen 3">
      <div class="carousel-caption">
        <h3>Título de la imagen 3</h3>
        <p>Descripción de la imagen 3</p>
      </div>
    </div>
  </div>

</div>
