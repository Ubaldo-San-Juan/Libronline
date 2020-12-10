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