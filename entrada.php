<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen Destacada">
        </picture>

        <div class="resumen-propiedad">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident alias, deserunt voluptatum sed esse corrupti aliquid velit voluptas eligendi vitae, sequi aliquam necessitatibus quia tenetur aspernatur facere ipsum odio rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vel explicabo autem voluptatem quibusdam? Maiores repellat iusto provident optio. Unde officia assumenda eaque. Voluptatem fuga, iusto perferendis commodi vitae excepturi!
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi placeat mollitia illo ducimus eius at quasi. Eaque sapiente odit rem eligendi optio eum quo, iste at mollitia laborum libero culpa!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dolorem quo molestiae nesciunt suscipit saepe sunt, voluptatem facere tenetur voluptatum temporibus quibusdam perferendis atque recusandae fuga aperiam, harum, repellat earum.
            </p>
        </div>

    </main>

    <?php 
    incluirTemplate('footer');
    ?>