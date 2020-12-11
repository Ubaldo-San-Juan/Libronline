                <section class="controlPanelGrid mt-3">
                    <table class="table table-striped shadow table-responsive-lg">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">
                                    <input type="checkbox">
                                </th>
                                <th scope="col" class="d-none d-lg-table-cell">
                                    Título del artículo
                                </th>
                                <th scope="col" class="d-table-cell d-lg-none">
                                    Artículo
                                </th>
                                <th scope="col">
                                    Autor
                                </th>
                                <th class="d-none d-md-table-cell" scope="col">
                                    Fecha de publicación
                                </th>
                                <th scope="col" class="d-none d-md-table-cell">
                                    Categoría
                                </th>
                                <th scope="col" class="d-none d-md-table-cell">
                                    Cantidad de comentarios
                                </th>
                                <th scope="col" class="text-center">
                                    &nbsp;
                                </th>
                                <th scope="col" class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/trash.png" alt="Eliminar">
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $urlbase = base_url();
                            foreach ($articulos as $post)
                            {
                                $fechaPublicacionOriginal = $post['fechaPublicacion'];
                                $fechaPublicacion = date("Y-m-d", strtotime($fechaPublicacionOriginal));
                                echo "<tr>";
                                echo "<td class=\"text-center\"> <input type=\"checkbox\"> </td>";
                                echo "<td> <a href=\"".$urlbase."/index.php/Post/".$post['urlArticulo']."\">".$post['titulo']."</a></td>";
                                echo "<td>".$post['autor']."</td>";
                                echo "<td class=\"d-none d-md-table-cell\">".$fechaPublicacion."</td>";
                                echo "<td class=\"d-none d-md-table-cell\">".$post['categoria']."</td>";
                                echo "<td class=\"d-none d-md-table-cell\">".$post['cantidadComentarios']."</td>";
                                echo "<td class=\"text-center\">
                                        <a href=\"#\">
                                            <img src=\"".$urlbase."/assets/img/Edit.png\" alt=\"Editar\">
                                        </a>
                                    </td>";
                                    echo "<td class=\"text-center\">
                                        <a href=\"#\">
                                            <img src=\"".$urlbase."/assets/img/trash.png\" alt=\"Eliminar\">
                                        </a>
                                    </td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </section>
            </article>
        </div>