<div class="box-principal">
<h3 class="titulo">Empleado <?php echo $datos['nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del empleado <?php echo $datos['nombre']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">

        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Edad: </b><?php echo $datos['edad']; ?>
            </li>
            <li class="list-group-item">
              <b>Años en la empresa: </b><?php echo $datos['añosEmpresa']; ?>
            </li>
            <li class="list-group-item">
              <b>Departamento: </b><?php echo $datos['nombre_departamento']; ?>
            </li>
            <li class="list-group-item">
              <b>Fecha de registro: </b><?php echo $datos['fecha']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>