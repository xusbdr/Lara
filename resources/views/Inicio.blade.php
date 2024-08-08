<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>


        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />



<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
        body, html {
            margin: 0;
            padding: 0;
            height: auto;
            overflow: auto; /* Permite el desplazamiento vertical si es necesario */
            display: flex;
            flex-direction: column;
            background-color: black; /* Fondo de la página en negro */
        }

        .button-container {
            display: flex;
            padding-right: 30px;
            align-items: center; /* Centra los botones verticalmente */
            background-image: url('imagenes/m2.jpg'); /* Ruta de la imagen */
            padding: 20px; /* Espacio interior del contenedor */
            width: 100%; /* Abarca todo el ancho de la pantalla */
            background-size: cover; /* Esta línea asegura que la imagen cubra todo el contenedor */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
        }

        .button-wrapper {
            display: flex;
            gap: 10px; /* Espacio entre los botones */
        }

        .boton {
            font-size: 18px; /* Tamaño de la letra ajustado para mejor legibilidad */
            color: black; /* Color del texto */
            background-color: transparent;
            border: none; /* Sin borde */
            cursor: pointer; /* Cursor de mano al pasar por encima */
            padding: 10px 20px; /* Espacio interior del botón */
        }

        .boton a {
            color: white; /* Color del texto del enlace */
            text-decoration: none; /* Sin subrayado en el enlace */
        }

        .image-text-container {
            display: flex;
            align-items: center; /* Alinea verticalmente la imagen y el texto */
            justify-content: left; /* Centra horizontalmente el contenido */
            gap: 20px; /* Espacio entre la imagen y el texto */
            padding: 20px;
            margin: 20px; /* Añade margen alrededor del contenedor */
        }

        .image-container {
            flex: 1;
            display: flex;
            justify-content: right; /* situa la imagen dentro del contenedor */
        }

        .image-container img {
            max-width: 30%; /* Aumenta el tamaño de la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
            object-fit: contain; /* Ajusta el tamaño de la imagen sin distorsionarla */
        }

        .text-content {
            flex: 1;
            max-width: 450px; /* Limita el ancho del texto */
            padding:60px;
            text-align: left; /* Alinea el texto a la izquierda */
            color:white;
        }

        .text-content h2 {
            font-size: 2.25rem; /* Tamaño del título ajustado */
            margin-bottom: 10px; /* Espacio debajo del título */
        }

        .text-content p {
            font-size: 1.3rem; /* Tamaño del texto del párrafo más pequeño */
            line-height: 1.4; /* Espacio entre líneas para mejorar la legibilidad */
        }

        .section-content {
           background-image: url('imagenes/p.jpg');/* Ruta de la imagen */
           background-size: cover; /* Esta línea asegura que la imagen cubra todo el contenedor */
           background-repeat: no-repeat; /* Evita que la imagen se repita */
           padding: 40px 20px; /* Espacio vertical en la sección */
           text-align: center; /* Centra el texto en la sección */
           width: 100%; /* Abarca todo el ancho de la pantalla */
        }

        .img {
            display: flex;
            justify-content: center; /* Centra la imagen horizontalmente en el contenedor */
            align-items: center; /* Centra la imagen verticalmente en el contenedor */
            width: 100%; /* Asegura que el contenedor ocupe el ancho completo disponible */
            height: 100%; /* Asegura que el contenedor ocupe el alto completo disponible (opcional) */
        }

        .img img {
            max-width: 60%; /* Asegura que la imagen se ajuste al tamaño del contenedor sin desbordar */
            height: auto; /* Mantiene la proporción de la imagen */
            object-fit: contain; /* Ajusta el tamaño de la imagen sin distorsionarla */
            border-radius: 15px; /* Bordes redondeados opcionales */
        }

        .footer-container {
            padding: 0; /* Elimina el padding del contenedor */
            margin: 0; /* Elimina el margin del contenedor */
            text-align: left; /* Asegura que el texto esté alineado a la izquierda */
        }

        .footer-container p {
            margin: 0; /*  margin de los párrafos */
            padding-left: 10px; /* Añade padding a la izquierda para los párrafos */
        }

        .b2 {
            width: 100%; /* Asegura que el contenedor abarque todo el ancho */
            display: flex; /* Para centrar la imagen si es necesario */
            justify-content: center; /* Centra la imagen horizontalmente */
            margin-bottom: 20px; /* Espacio inferior si es necesario */
        }

        .b2 img {
            max-width: 100%; /* Asegura que la imagen no se agrande más de su tamaño natural */
            height: auto; /* Mantiene la proporción de la imagen */
            object-fit: contain; /* Ajusta el tamaño de la imagen sin distorsionarla */
            border-radius: 15px; /* Aplica esquinas redondeadas a la imagen */
        }

        .vie {
            background-color: transparent;
            font-size: 20px;
            color: white;
        }


   .codo {
    padding: 0 20px; /* Agrega espacios a los lados del contenido */
    max-width: 1260px; /* Limita el ancho del texto */
    margin: auto; /* Centra el contenedor horizontalmente */
    text-align: center; /* Centra el texto horizontalmente */
    color: white; /* Color del texto en blanco */
}

.codo h2 {
    font-size: 2.55rem; /* Tamaño del título */
    margin-bottom: 15px; /* Espacio debajo del título */
}

.codo p {
    font-size: 1.3rem; /* Tamaño del texto */
    line-height: 1.8; /* Espacio entre líneas */
}

.as{
    color:white;
}

    </style>


</head>

<body>
    <div class="button-container">
        <div class="vie"><h2>MindPulser</h2></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="button-wrapper">
            <button class="boton">
                <a href="{{ $url_base }}/Bienvenido">Entrar</a>
            </button>

            <button class="boton">
                <a class="as">Sobre nosotros</a>
            </button>

            <button class="boton">
                <a href="{{ $url_base }}/Contacto">Contacto</a>
            </button>
        </div>
    </div>

 @include("plantillas.carrunabo")

 <br><br><br>

    <section class="section-content">
        <h1 class="fw-light">Sobre Nosotros</h1>
        <p class="lead text-body-secondary">MindPulse es una empresa especializada en el desarrollo de soluciones web personalizadas para comercios. Nuestro objetivo es potenciar la presencia en línea de negocios a través de sitios web diseñados a medida que no solo capturan la esencia de tu marca, sino que también atraen y convierten a tus clientes potenciales. Desde páginas web elegantes y funcionales hasta sistemas de comercio electrónico robustos, ofrecemos un servicio integral que abarca desde el diseño y desarrollo hasta la optimización y el mantenimiento continuo.</p>
    </section>

    <br><br> <br><br>

    <div class="image-text-container">
        <div class="img">
            <img src="{{ asset('imagenes/idea222.png') }}" alt="Imagen">
        </div>

        <div class="img">
            <img src="{{ asset('imagenes/idea11.png') }}" alt="Imagen">
        </div>

        <div class="img">
            <img src="{{ asset('imagenes/alcance.png') }}" alt="Imagen">
        </div>
    </div>


    <br><br> <br><br><br><br><br><br><br>
<section class="codo">
    <h1 class="fw-light">Transforma tu negocio con un sitio web a medida y a un precio imbatible</h1>
    <p>
        En MindPulse, entendemos que tu negocio necesita destacar en un mundo digital cada vez más competitivo. Es por eso que nos especializamos en ofrecerte soluciones web personalizadas que no solo reflejan la esencia única de tu marca, sino que también están diseñadas para captar la atención y convertir visitantes en clientes leales.

        Obtendrás una plataforma potente y eficaz que optimiza tu presencia online, te ayuda a llegar a más clientes y te diferencia de la competencia.

    </p>
</section>



<br><br><br><br><br><br><br><br><br>


    @include("plantillas.tr")




<br><br>


<br><br>
<br><br><br><br>




@include("plantillas.derechos")









    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
