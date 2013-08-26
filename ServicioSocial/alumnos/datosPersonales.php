<!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>-->
<!-- Modal -->

<div id="myModal" class="modal hide fade"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h3 id="myModalLabel">Regitro de Usuario</h3>
  </div>
    <form class="alguna" name="guardar"  action="guardarDatosPersonales.php ">
  <div class="modal-body">
  <div class="row-fluid">
      <div class="span4">Usuario:</div> <div class="span3"><input type="text" name="usuario" /> </div> 
  </div> 
       <div class="row-fluid">
      <div class="span4">Nombres:</div> <div class="span3"><input type="text" name="nombres" /> </div> 
  </div> 
       <div class="row-fluid">
      <div class="span4">ApellidoPaterno:</div> <div class="span3"><input type="text" name="ApellidoPaterno" /> </div> 
  </div> 
       <div class="row-fluid">
      <div class="span4">ApellidoMaterno:</div> <div class="span3"><input type="text" name="ApellidoMaterno" /> </div> 
  </div> 
  <div class="row-fluid">
      <div class="span4">Contrase&ntilde;a:</div> <div class="span3"><input type="password" name="contrasenia" /> </div> 
  </div> 
  <div class="row-fluid">
      <div class="span4">Confirmar Contrase&ntilde;a:</div> <div class="span3"><input type="password" name="confirmar" /> </div> 
  </div> 
  <div class="row-fluid">
      <div class="span4" >Email:</div> <div class="span3"><input type="email" name="Email"/> </div> 
  </div> 
  <div class="row-fluid">
      <div class="span4">Confirmar Email:</div> <div class="span3"><input type="text" name="confirmarEmail" /> </div> 
  </div> 
 
  
 
 
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    <button class="submit">Aceptar</button>
  </div>
</div>
    </form>
</div>
