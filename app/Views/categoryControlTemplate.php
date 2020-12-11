                <section class="controlPanelGrid mt-3">
                    <table class="table table-striped shadow table-responsive-lg">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">
                                    <input type="checkbox">
                                </th>
                                <th scope="col">
                                    ID
                                </th>
                                <th scope="col" class="d-none d-lg-table-cell">
                                    Nombre de la categoría
                                </th>
                                <th scope="col" class="d-table-cell d-lg-none">
                                    Categoría
                                </th>
                                <th class="d-none d-md-table-cell" scope="col">
                                    Descripción
                                </th>
                                <th scope="col" class="d-none d-md-table-cell">
                                    No. de Artículos
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
                            foreach ($categorias as $category)
                            {
                                echo "<tr>";
                                echo "<td class=\"text-center\"> <input type=\"checkbox\"> </td>";
                                echo "<td>".$category['id']."</td>";
                                echo "<td>".$category['nombre']."</td>";
                                echo "<td class=\"d-none d-md-table-cell\">".$category['descripcion']."</td>"; //Truncar texto
                                echo "<td class=\"d-none d-md-table-cell\">".$category['cantidadArticulos']."</td>";
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