<div class="modal fade" id="addnew" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Empleado</b></h4>
          	</div>

			<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		<div class="modal-body">
            	
          		  	<div class="form-group">
						<label for="firstname" class="col-sm-3 control-label">Nombre</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="firstname" name="firstname" required>
						</div>
                	</div>
					<div class="form-group">
						<label for="lastname" class="col-sm-3 control-label">Apellido</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="lastname" name="lastname" required>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-3 control-label">Dirección</label>

						<div class="col-sm-9">
						<textarea class="form-control" name="address" id="address"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="datepicker_add" class="col-sm-3 control-label">Fecha de Nacimiento</label>

						<div class="col-sm-9"> 
						<div class="date">
							<input type="text" class="form-control" id="datepicker_add" name="birthdate">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label for="gender" class="col-sm-3 control-label">Género</label>

						<div class="col-sm-9"> 
						<select class="form-control" name="gender" id="gender" required>
							<option value="" selected>- Seleccionar -</option>
							<option value="Male">Hombre</option>
							<option value="Female">Mujer</option>
						</select>
						</div>
					</div>
          		</div>
				<div class="modal-footer">
					<!--<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close" id="Cerrar"></i> Cerrar</button>-->
					<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
				</div>
			</form>
        </div>
    </div>
</div>
