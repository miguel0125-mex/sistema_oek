<?php 
    require_once "vistas/superior.php";
    
    include_once "../dashboard/bd-personal/conexion.php";

    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta="SELECT * FROM personal";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $personal = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Personal</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Tabla</li>
                        </ol>
                       
                        <!--DIV IMPORTACION DE DATOS EXCEl-->
                        <div class="">
                            <h4 class="">Importar Archivo de Excel</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card p-4 bg-dark" style="--bs-bg-opacity: .1;">
                                        <form action="bd-personal/importarExcel.php" method="POST" name="formExcel" id="formExcel" enctype="multipart/form-data">
                                            <div>
                                                <label for="file" class="pe-4">Elija Archivo Excel
                                                </label>
                                                <input type="file" name="file" id="file" accept=".xls, .xlsx" class="pe-4">
                                                <button type="submit" id="btnArchivo" name="import" class="btn btn-dark">Importar Registros</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                        <hr>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabla - Personal OEK
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <button id="btnNuevo" type="button" class="btn btn-dark btnNuevo" data-toggle="modal">
                                        Agregar
                                    </button>
                                </div>
                            <table id="datatablesSimple" class="table table-striped table-bordered table-dark" style="width:100%">
                            <thead class="bg-primary text-white text-center">
                                <tr>
                                    <th>NUM. EMPLEADO</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>PUESTO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($personal as $personal) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $personal['num_empleado'] ?>
                                    </td>
                                    <td>
                                        <?php echo $personal['nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $personal['ap_paterno'] ?>
                                    </td>
                                    <td>
                                        <?php echo $personal['puesto'] ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <?php    
                                }
                                ?>
                            </tbody>
                        </table>
                            </div>
                        </div>
                    </div>
                   
                </main>       
                <?php  include "vistas/modalAgregar.php";?>
                
<?php 
    require_once "vistas/inferior.php";
?>
