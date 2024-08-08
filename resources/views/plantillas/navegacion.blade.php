

    <style>

      body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: auto;
    display: flex;
    flex-direction: column;
}

.button-container {
    display: flex;
    justify-content: space-between; /* Asegura que el espacio se distribuya entre los botones */
    padding-right: 30px;
    align-items: center;
    background-image: url('imagenes/m2.jpg'); /* Ruta de la imagen */
    padding: 20px;
    width: 100%;
    background-size: cover; /* Esta línea asegura que la imagen cubra todo el contenedor */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
}

.button-wrapper {
    display: flex;
    gap: 10px;
}

.boton, .boton1 {
    font-size: 18px;
    color: black;
    background-color: transparent;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
}

.boton a, .boton1 a {
    color: white;
    text-decoration: none;
}

.boton1-container {
    display: flex;
    justify-content: flex-end; /* Alinea el botón a la derecha */
    flex: 1;
}

.image-text-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    margin: 20px;
}

.image-container {
    flex: 1;
    display: flex;
    justify-content: left;
}

.image-container img {
    max-width: 40%;
    height: auto;
    object-fit: contain;
}

.text-content {
    flex: 1;
    max-width: 450px;
    padding: 60px;
    text-align: left;
}

.text-content h2 {
    font-size: 2.25rem;
    margin-bottom: 10px;
}

.text-content p {
    font-size: 1.3rem;
    line-height: 1.4;
}

.section-content {
    background-color: #f8f9fa;
    padding: 40px 20px;
    text-align: center;
    width: 100%;
}

.img {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

.img img {
    max-width: 70%;
    height: auto;
    object-fit: contain;
    border-radius: 15px;
}

.footer-container {
    padding: 0;
    margin: 0;
    text-align: left;
}

.footer-container p {
    margin: 0;
    padding-left: 10px;
}

.b2 {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.b2 img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    border-radius: 15px;
}

.vie {
    font-size: 20px;
    background-color: transparent;
    color: white;
}

.boton1-wrapper {
    display: flex;
    gap: 10px;
}

.boton1  {
    color: white;
    text-decoration: none;
}

.as{
    color:white;
}

    </style>


    <div class="button-container">
        <div class="vie"><h2>MindPulser</h2></div>&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="button-wrapper">




            <button class="boton">
                <a class="as">Sobre nosotros</a>
            </button>
            <button class="boton">
                <a href="{{ $url_base }}/Contacto">Contacto</a>
            </button>



        </div>

        <div class="boton1-container">
        <button class="boton1" onclick="history.back()">Volver</button>
    </div>

    </div>



































