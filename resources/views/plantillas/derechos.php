

<style>

.footer-container {
   background-image: url('imagenes/m2.jpg');
   background-size: cover; /* Esta línea asegura que la imagen cubra todo el contenedor */
   background-repeat: no-repeat; /* Evita que la imagen se repita */
   text-align: left; /* Alinea el texto a la izquierda */
   padding: 20px; /* Espaciado interno */
   width: 100%; /* Abarca todo el ancho de la pantalla */
   box-sizing: border-box; /* Incluye padding y border en el ancho total */
   display: flex; /* Usa Flexbox */
   flex-direction: column; /* Alinea los elementos en columna */
}

.footer-container .container {
   display: flex;
   flex-direction: column; /* Alinea los elementos en columna */
   align-items: flex-start; /* Alinea los elementos a la izquierda */
   width: 100%; /* Abarca todo el ancho del contenedor */
}

.mb {
    color: white;
    text-align: left; /* Alinea el texto a la izquierda */
    margin: 0; /* Elimina el margen */
}

.footer-container p {
    margin: 0; /* Elimina el margen */
    padding-left: 10px; /* Añade padding a la izquierda */
    text-align: left; /* Alinea el texto a la izquierda */
}

.footer-container a {
    color: blue; /* Color de los enlaces, ajustable según preferencia */
    text-decoration: none; /* Elimina el subrayado */
}

.footer-container a:hover {
    text-decoration: underline; /* Subrayado al pasar el cursor */
}


</style>



<footer class="footer-container">
    <div class="container">
        <p class="mb">Página con derechos reservados &copy; MindPulse</p>
        <p class="mb">
            <a href="Politica">Sobre nosotros</a> Derechos de uso
            <a href="Politica">Politica de uso</a>.
        </p>
    </div>
</footer>
