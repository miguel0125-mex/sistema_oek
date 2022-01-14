<?php 
    require_once "vistas/superior.php";
    
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Agregar Empleado</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Formulario</li>
                        </ol> 
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            Formulario - Agregar Empleado
                            </div>
                            <div class="card-body">
                                <form id="formAgregar" action="bd-personal/crud.php" class="form" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="col-sm-3 control-label">Nombre(s)</label>
                                                <div class="">
                                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="aPaterno" class="control-label">Apellido Paterno</label>
                                                <div class="">
                                                    <input type="text" class="form-control" id="aPaterno" name="aPaterno" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="aMaterno" class="control-label">Apellido Materno</label>
                                                <div class="">
                                                    <input type="text" class="form-control" id="aMaterno" name="aMaterno">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label for="edad" class="control-label">Edad</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" id="edad" name="edad" min="18" max="70">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="fNacimiento" class="control-label">Fecha de Nacimiento</label>
                                                    <div class="">
                                                        <input type="date" class="form-control" id="fNacimiento" name="fNacimiento" required>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="genero" class="col-sm-3 control-label">Género</label>
                                                <div class=""> 
                                                    <select class="form-control" name="genero" id="genero">
                                                        <option value="" selected>- Seleccionar -</option>
                                                        <option value="Hombre">Hombre</option>
                                                        <option value="Mujer">Mujer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="curp" class="control-label">CURP</label>
                                                    <div class="">
                                                        <input style="text-transform:uppercase" type="text" class="form-control" id="curp" name="curp" required maxlength="20">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="rfc" class="control-label">RFC</label>
                                                    <div class="">
                                                        <input style="text-transform:uppercase" type="text" class="form-control" id="rfc" name="rfc" maxlength="10">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="direccion" class="control-label">Dirección</label>
                                                    <div class="">
                                                        <input type ="text" class="form-control" name="direccion" id="direccion"></input>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="estado" class="control-label">Estado</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" id="estado" name="estado" required>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="provincia" class="control-label">Provincia</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" id="provincia" name="provincia">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="cPostal" class="control-label">Codigo Postal</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" id="cPostal" name="cPostal" min="10000" max="99999" maxlength="5">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="telefono" class="control-label">Num. Telefonico</label>
                                                    <div class="">
                                                        <input
                                                        type="tel" class="form-control" name="telefono" id="telefono"></input>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email" class="control-label">Correo Electronico</label>
                                                    <div class="">
                                                        <input type="email" class="form-control" id="email" name="email">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="escolaridad" class="control-label">Escolaridad</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" id="escolaridad" name="escolaridad">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="puesto" class="control-label">Num. Empleado</label>
                                                <div class=""> 
                                                    <input type="number" class="form-control" id="numEmpleado">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-default btn-flat pull-left" ><i class="fa fa-close"></i> Borrar</button>
                                <button id="btnEnviar" type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
                            </div>
                        </div>
                    </div>

                </main>

              
<?php  
    require_once "vistas/inferior.php"
?>