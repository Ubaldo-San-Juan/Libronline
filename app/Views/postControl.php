<article class="controlPanelTableContainer col-11">
                <section class="controlPanelButtons">
                    <div class="controlPanelNav d-none d-lg-inline-block">
                        <a class="btn btn-dark shadow" href="<?php echo base_url(); ?>/index.php/ControlPanel/User">
                            Usuarios
                        </a>
                        <a class="btn btn-primary shadow" href="<?php echo base_url(); ?>/index.php/ControlPanel/Post">
                            Artículos
                        </a>
                        <a class="btn btn-dark shadow" href="<?php echo base_url(); ?>/index.php/ControlPanel/Category">
                            Categorías
                        </a>
                    </div>
                    <div class="btnAdd float-right shadow mb-3">
                        <a href="addPost.html">
                            <img class="img-fluid mr-md-2" src="<?php echo base_url(); ?>/assets/img/add.png" alt="+">
                            <p class="d-none d-md-inline-block m-0">
                                Añadir artículo nuevo
                            </p>
                        </a>
                    </div>
                    <div class="pageIdentifier d-inline-block d-lg-none">
                        <h2>
                            Artículos
                        </h2>
                    </div>
                </section>
                <section class="controlPanelGrid mt-3">
                    <table class="table table-striped shadow">
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
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <a href="singleArticle.html">
                                        Información acerca de Vaporeon
                                    </a>
                                </td>
                                <td>
                                    Juan Pérez
                                </td>
                                <td class="d-none d-md-table-cell">
                                    2020-11-19
                                </td>
                                <td class="d-none d-md-table-cell">
                                    Matemáticas
                                </td>
                                <td class="d-none d-md-table-cell">
                                    2
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/Edit.png" alt="Editar">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/trash.png" alt="Editar">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <a href="singleArticle.html">
                                        Game Grumps - Rueda de la Fortuna
                                    </a>
                                </td>
                                <td>
                                    Victor Flores
                                </td>
                                <td class="d-none d-md-table-cell">
                                    2020-11-19
                                </td>
                                <td class="d-none d-md-table-cell">
                                    Cálculo Integral
                                </td>
                                <td class="d-none d-md-table-cell">
                                    0
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/Edit.png" alt="Editar">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/trash.png" alt="Editar">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <a href="singleArticle.html">
                                        Artículo 3
                                    </a>
                                </td>
                                <td>
                                    Autor 3
                                </td>
                                <td class="d-none d-md-table-cell">
                                    2020-11-19
                                </td>
                                <td class="d-none d-md-table-cell">
                                    Categoría 3
                                </td>
                                <td class="d-none d-md-table-cell">
                                    0
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/Edit.png" alt="Editar">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/trash.png" alt="Editar">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <a href="singleArticle.html">
                                        Artículo 4
                                    </a>
                                </td>
                                <td>
                                    Autor 4
                                </td>
                                <td class="d-none d-md-table-cell">
                                    2020-11-19
                                </td>
                                <td class="d-none d-md-table-cell">
                                    Categoría 4
                                </td>
                                <td class="d-none d-md-table-cell">
                                    100
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/Edit.png" alt="Editar">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/trash.png" alt="Editar">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <a href="singleArticle.html">
                                        Artículo 5
                                    </a>
                                </td>
                                <td>
                                    Autor 5
                                </td>
                                <td class="d-none d-md-table-cell">
                                    2020-11-19
                                </td>
                                <td class="d-none d-md-table-cell">
                                    Categoría 5
                                </td>
                                <td class="d-none d-md-table-cell">
                                    52
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/Edit.png" alt="Editar">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/img/trash.png" alt="Editar">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </article>
        </div>