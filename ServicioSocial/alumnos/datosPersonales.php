<!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>-->
<!-- Modal -->

<div  id="myModal" class="modal hide fade"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h3 id="myModalLabel">Regitro de Usuario</h3>
    </div>
    <form class="alguna" name="guardar"  action="guardarDatosPersonales.php " >
        <div class="modal-body" >
            <div class="row-fluid">
                <div class="span4" ></div> <div class="span3"   ><input type="text" name="usuario" placeholder="Usuario" style="height: 30px" /> </div> 
            </div> 
            <div class="row-fluid">
                <div class="span4"></div> <div class="span3"><input type="text" name="nombres" placeholder="Nombres:" style="height: 30px" /> </div> 
            </div> 
            <div class="row-fluid">
                <div class="span4"></div> <div class="span3"><input type="text" name="ApellidoPaterno" placeholder="ApellidoPaterno" style="height: 30px" /> </div> 
            </div> 
            <div class="row-fluid">
                <div class="span4"></div> <div class="span3"><input type="text" name="ApellidoMaterno" placeholder="ApellidoMaterno" style="height: 30px" /> </div> 
            </div> 
            
            <div class="row-fluid">
                <div class="span4" ></div> <div class="span3"><input type="email" name="Email" placeholder="Email" style="height: 30px"/> </div> 
            </div> 
            <div class="row-fluid">
                <div class="span4"></div> <div class="span3"><input type="text" name="confirmarEmail" placeholder="Confirmar Email" style="height: 30px" /> </div> 
            </div> 
            <div class="row-fluid">
                <?php
                include './foto.php';
                ?> 
            </div> 




            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                <button class="btn-primary"aria-hidden="true">Aceptar</button>
            </div>
        </div>
    </form>
</div>
