<div class="panel-content">
<h4 class="titulo">EDITAR PUBLICAÇÃO</h4>
          
<form method="POST" enctype="multipart/form-data">
<p><label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo"value="<?php
    echo getDadospost($explode[1],"titulo");
    ?>">
</p>

<p>
       <textarea class="form-control" id="post" name="post" rows="5"><?php echo getDadosPost($explode[1], "postagem");?></textarea>
      </p>

<p><label>Categoria</label>
    <select class="form-control" name="categoria">
   <?php getcategoriaActual(getDadosPost($explode[1], "categoria")); getcategorias(); ?>
    </select>
</p>
<p><input type="submit" value="Alterar" class="btn btn-primary btn-lg btn-block"></p>
</form>
</div>