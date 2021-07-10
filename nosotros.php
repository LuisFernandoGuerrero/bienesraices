<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros contenedor">
            <div class="imagen-nosotros">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp"> 
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg"> 
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="informacion-nosotros">
                <blockquote>
                25 años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, explicabo voluptates! Tenetur possimus praesentium blanditiis ad laboriosam dolor dolore doloribus sunt fugiat cupiditate. Possimus iure aliquid cumque facilis molestias maiores?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates laboriosam, sequi voluptatem cumque cum beatae voluptatum nulla quisquam accusamus. Autem saepe doloribus nostrum harum in quaerat possimus itaque ut dicta. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit ipsa molestias reprehenderit sequi voluptatum ea? Nesciunt autem possimus vel cumque error animi soluta minus ipsum, aliquid, asperiores in ab vitae.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas quos soluta voluptas? Neque, id. Nostrum maiores earum at facilis, repellendus cupiditate, eaque laboriosam corporis aliquam cumque nisi ex sed sit!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas quos soluta voluptas? Neque, id. Nostrum maiores earum at facilis, repellendus cupiditate, eaque laboriosam corporis aliquam cumque nisi ex sed sit!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas quos soluta voluptas? Neque, id. Nostrum maiores earum at facilis, repellendus cupiditate, eaque laboriosam corporis aliquam cumque nisi ex sed sit!</p>
            </div>
        </div>
    </section>

    <?php 
    incluirTemplate('footer');
    ?>