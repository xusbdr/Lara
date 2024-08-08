<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .carousel-container {
            width: 100%;
            max-width: 1760px;
            margin: 0 auto;
            padding-top: 30px;


        }

        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;

        }


.excuse{
    background-color:black;
}

    </style>





</head>
<body class="excuse">

<div class="carousel-container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="3500"  >


        <!-- Slides del carrusel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <img src="imagenes/d4.jpeg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="col-md-4">
                        <img src="imagenes/d2.jpeg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="col-md-4">
                        <img src="imagenes/d1.jpeg" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
            </div>




            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <img src="imagenes/t3.jpg" class="d-block w-100" alt="Imagen 4">
                    </div>
                    <div class="col-md-4">
                        <img src="imagenes/t1.jpg" class="d-block w-100" alt="Imagen 5">
                    </div>
                    <div class="col-md-4">
                        <img src="imagenes/t2.jpg" class="d-block w-100" alt="Imagen 6">
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



    <!--          ------------------------------                 -->






    </div>
</div>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
