<article class="w-100 mt-5 pt-5 align-content-center justify-content-center">
    <div class="background-overlay text-dark py-4">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-7 text-center">
                    <h1>Regístrate</h1>
                    <form onsubmit="return register();" method="POST" action="<?php echo base_url(); ?>/index.php/MyController/RespuestaRegistro" role="form" class="col-12">
                        <div class="form-group text-left">
                            <label for="inputEmail">Nombre de usuario</label>
                            <input type="text" class="form-control" id="inputName" name="inputName" aria-describedby="nameHelp"
                                placeholder="JuanPerez88">
                        </div>
                        <div class="form-group text-left">
                            <label for="inputEmail">Correo electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp"
                                placeholder="alguien@mail.com">
                        </div>
                        <div class="form-group text-left">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Contraseña">
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="tosAccept">
                            <label for="tosAccept" class="form-check-label">Acepto los términos y condiciones del
                                sitio</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Regístrate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>