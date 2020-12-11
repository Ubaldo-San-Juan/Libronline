                <section class="recordAddEditForm mt-3 d-flex col-12 col-lg-10 ml-auto mr-auto align-content-center justify-content-center">
                    <form class="pt-3 pb-3 pt-lg-4 pb-lg-4 col-md-11" method="POST" action="<?php echo base_url(); ?>/index.php/ControlPanel/AddUserHidden">
                        <div>
                            <div class="form-group d-md-inline-block col-md-3 p-0">
                                <label for="userID">ID</label>
                                <input type="text" class="form-control" id="userID" placeholder="12345" name="userID">
                            </div>
                            <div class="form-group d-md-inline-block float-md-right col-md-8 p-0">
                                <label for="userName">Nombre de usuario</label>
                                <input type="text" class="form-control" id="userName" placeholder="JohnDoe66" name="userName">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="userEmail">Correo electrónico</label>
                                <input type="email" class="form-control" id="userEmail" placeholder="john.doe@mail.com" name="userEmail">
                            </div>
                            <div class="form-group">
                                <label for="userPassword">Contraseña</label>
                                <input type="password" class="form-control" id="userPassword" placeholder="••••••••" name="userPassword">
                            </div>
                        </div>
                        <div>
                            <div class="d-block d-lg-inline-block mr-md-5">
                                Tipo de cuenta:
                            </div>
                            <div class="responsiveRadioButtons text-center d-block ml-auto mr-auto">
                                <div class="form-check d-md-inline-block mr-md-3 mb-3 mt-3 mt-md-0 mb-md-0">
                                    <input class="form-check-input" type="radio" name="accountType" id="typeAdmin" value="Admin">
                                        <label class="form-check-label" for="typeAdmin">
                                            Administrador
                                        </label>
                                </div>
                                <div class="form-check d-md-inline-block mr-md-3 mb-3 mt-3 mt-md-0 mb-md-0">
                                    <input class="form-check-input" type="radio" name="accountType" id="typeEditor" value="Editor">
                                    <label class="form-check-label" for="typeEditor">
                                        Editor
                                    </label>
                                </div>
                                <div class="form-check d-md-inline-block mr-md-3 mb-3 mt-3 mt-md-0 mb-md-0">
                                    <input class="form-check-input" type="radio" name="accountType" id="typeReader" value="Lector" checked>
                                    <label class="form-check-label" for="typeReader">
                                        Lector
                                    </label>
                                </div>    
                            </div>
                        </div>
                        <div class="align-content-center text-center mt-4">
                            <button type="reset" class="btn btn-dark">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>