<article class="post mb-3">
    <div class="container col-11 pt-2 pb-1">
        <div class="row">
            <div class="postHeader w-100">
            <!--Posiblemente se rompa la URL de los posts, cambiarlo si es necesario o insertar un campo que te permita nombrar el post-->
                <a href="<?php echo base_url(); ?>/index.php/Post/<?php foreach ($articulos as $post) {echo $post['urlArticulo'];} ?>" class="postTitle col-md-10 col-sm-7 pt-2 d-inline-block">
                    <h1 class="h2">
                        <?php
                            foreach ($articulos as $post)
                            {
                                echo $post['titulo'];
                            }
                        ?>
                    </h1>
                </a>
                <p class="postDate text-right col-sm-2 pt-3 float-right d-none d-md-block">
                    <?php
                        foreach ($articulos as $post)
                        {
                            $fechaOriginal = $post['fechaPublicacion'];
                            $fecha = date("Y-m-d", strtotime($fechaOriginal)); //Muestra sólo la fecha de publicación
                            echo $fecha;
                        }
                    ?>
                </p>
                <p class="postAuthor">
                    By:
                    <?php
                        foreach ($articulos as $post)
                        {
                            echo $post['autor'];
                        }
                    ?>
                </p>
            </div>
            <div class="postBody">
                <?php
                    foreach ($articulos as $post)
                    {
                        echo $post['id'];
                        echo $post['urlArticulo'];
                        echo $post['titulo'];
                        echo $post['autor'];
                        echo $post['fechaPublicacion'];
                        echo $post['categoria'];
                        echo $post['contenido'];
                        echo $post['cantidadComentarios'];
                        echo $post['fueEditado'];
                        echo $post['fechaEdicion'];
                    }
                ?>
            </div>
            <div class="postMetadata ml-auto mb-2">
                <p>
                    Categorías:
                </p>
                <a href="<?php echo base_url(); ?>/index.php/ControlPanel">
                    Matemáticas
                </a>|
                <a href="#">
                    Cálculo Integral
                </a>|
                <a href="#">
                    Álgebra
                </a>|
                <a href="#">
                    Geometría
                </a>
                <?php
                    if($post['fueEditado'] == 0)
                    {
                        foreach ($articulos as $post)
                        {
                            $fechaOriginal = $post['fechaEdicion'];
                            $fecha = date("Y-m-d", strtotime($fechaOriginal)); //Muestra sólo la fecha de publicación
                            echo $fecha;
                        }
                    }
                    /*foreach ($articulos as $post)
                    {
                        echo $post['id']; //
                        echo $post['urlArticulo']; // ????
                        echo $post['titulo']; //
                        echo $post['autor']; 
                        echo $post['fechaPublicacion']; //
                        echo $post['categoria'];
                        echo $post['contenido']; //
                        echo $post['cantidadComentarios'];
                        echo $post['fueEditado'];
                        echo $post['fechaEdicion'];
                    }*/
                ?>
            </div>
        </div>
    </div>
</article>