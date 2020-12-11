<article class="w-100 mt-5 pt-5 align-content-center justify-content-center">
    <div class="background-overlay text-dark py-4">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-7 text-center">
                    <h1>Iniciar sesión</h1>
                    <img class="userPFPLarge rounded-circle" src="<?php echo base_url(); ?>/assets/img/userBlank.png">
                    <form onsubmit="return login();" method="POST" action="<?php echo base_url(); ?>/index.php/MyController/respuestaLogin" role="form" class="col-12">
                        <div class="form-group text-left">
                            <label for="inputEmail">Correo electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                                placeholder="alguien@mail.com">
                        </div>
                        <div class="form-group text-left">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                    <div class="invitacionRegistro mt-4">
                        <p>
                            ¿No tienes una cuenta?
                        </p>
                        <a href="<?php echo base_url(); ?>/index.php/MyController/register">
                            Regístrate aquí
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>