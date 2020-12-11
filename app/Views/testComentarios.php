<?php
                foreach ($comentarios as $comment)
                {
                    echo $comment['id'];
                    echo $comment['fecha'];
                    echo $comment['autor'];
                    echo $comment['nombreUsuario'];
                    echo $comment['articulo'];
                    echo $comment['comentario'];
                    echo $comment['fueEditado'];
                    echo $comment['fechaEdicion'];
                }
            ?>