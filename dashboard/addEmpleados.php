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
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="firstname" class="col-sm-3 control-label">Nombre(s)</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="lastname" class="control-label">Apellido Paterno</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="lastname" class="control-label">Apellido Materno</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="firstname" class=" control-label">Edad</label>
                                        <div class="">
                                            <input type="number" class="form-control" id="firstname" name="firstname">
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="lastname" class="control-label">Fecha de Nacimiento</label>
                                        <div class="">
                                            <input type="date" class="form-control" id="lastname" name="lastname" required>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="address" class="col-sm-3 control-label">Dirección</label>
                                    <div class="">
                                        <textarea class="form-control" name="address" id="address"></textarea>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position" class="col-sm-3 control-label">Cargo</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="position" id="position" required>
                                        <option value="" selected>- Seleccionar -</option>
                                        <?php
                                            $sql = "SELECT * FROM position";
                                            $query = $conn->query($sql);
                                            while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['id']."'>".$prow['description']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="schedule" class="col-sm-3 control-label">Horario</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="schedule" name="schedule" required>
                                        <option value="" selected>- Seleccionar -</option>
                                        <?php
                                            $sql = "SELECT * FROM schedules";
                                            $query = $conn->query($sql);
                                            while($srow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                                                ";
                                            }
                                            ?>
                                    </select>
                                </div>
                        </div>
                        <button type="button" class="btn btn-primary">Cerrar</button>
                        <button type="submit" class="btn btn-secondary" name="guardar"> Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php  
    require_once "vistas/inferior.php"
?>