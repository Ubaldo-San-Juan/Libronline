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
                                    Nombre de usuario
                                </th>
                                <th scope="col" class="d-table-cell d-lg-none">
                                    Usuario
                                </th>
                                <th class="d-none d-md-table-cell" scope="col">
                                    Correo Electrónico
                                </th>
                                <th class="d-none d-md-table-cell" scope="col">
                                    Contraseña
                                </th>
                                <th scope="col" class="d-none d-lg-table-cell">
                                    Tipo de cuenta
                                </th>
                                <th scope="col" class="d-table-cell d-lg-none">
                                    Tipo
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
                            <form action="">
                                <?php
                                    $urlbase = base_url();
                                    foreach ($usuarios as $user)
                                    {
                                        echo "<tr>";
                                        echo "<td class=\"text-center\"> <input type=\"checkbox\"> </td>";
                                        echo "<td>".$user['id']."</td>";
                                        echo "<td>".$user['nombreUsuario']."</td>";
                                        echo "<td class=\"d-none d-md-table-cell\">".$user['correo']."</td>";
                                        echo "<td class=\"d-none d-md-table-cell\">".$user['contrasena']."</td>";
                                        echo "<td>".$user['tipoCuenta']."</td>";
                                        echo "<td class=\"text-center\">
                                        <button>
                                        <a href=\"#\">
                                        <img src=\"".$urlbase."/assets/img/Edit.png\" alt=\"Editar\">
                                        </a>
                                        </button>
                                        </td>";
                                        echo "<td class=\"text-center\">
                                        <button>
                                        <a href=\"#\">
                                        <img src=\"".$urlbase."/assets/img/trash.png\" alt=\"Eliminar\">
                                        </a>
                                        </button>
                                        </td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </form>
                        </tbody>
                    </table>
                </section>
            </article>
        </div>