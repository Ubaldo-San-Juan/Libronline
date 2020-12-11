<?php
  $baseurl = base_url();
  foreach ($comentarios as $comment)
    {
      $fechaPublicacionOriginal = $comment['fecha'];
      $fechaPublicacion = date("Y-m-d", strtotime($fechaPublicacionOriginal)); //Muestra sólo la fecha de publicación
      $fechaEdicionOriginal = $comment['fechaEdicion'];
      $fechaEdicion = date("Y-m-d", strtotime($fechaEdicionOriginal)); //Muestra sólo la fecha de publicación
      echo '
<section class="comment mb-3">
  <div class="container col-11 pt-2 pb-1">
    <div class="row">
      <div class="commentHeader w-100 pt-3 mb-3">
        <div class="commentPFP p-0 d-inline-block">
          <img class="img-fluid" src="'.$baseurl.'/assets/img/werever.jpg" alt="Foto de perfil">
        </div>
        <div class="commentInfo ml-2 d-inline-block w-auto">
          <div class="commentAuthor d-block">
            <h3>'.
              $comment['nombreUsuario'].'
            </h3>
          </div>
          <p class="commentDate p-0 m-0">'.
            $fechaPublicacion.'
          </p>
        </div>
      </div>
      <div class="commentBody">
        <p>'.
          $comment['comentario'].'
        </p>
      </div>
      <div class="commentMetadata ml-auto text-right">
      <p>
        <strong>';
                    if($post['fueEditado'] == true)
                    {
                        foreach ($comentarios as $comments)
                        {
                            echo $fechaEdicion;
                        }
                    }
echo '
        </strong>
      </p>
    </div>
  </div>
</section>
';
}