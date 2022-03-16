<?php $departamentos = $empleados->listarDepartamentos(); ?>
<div class="box-principal">
<h3 class="titulo">Editar empleado <?php echo $datos['nombre']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar empleado <?php echo $datos['nombre']; ?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1">
	  			<div class="panel panel-default">
				</div>
	  		</div>
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre del empleado</label>
				        <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Edad</label>
				        <input class="form-control" value="<?php echo $datos['edad']; ?>" name="edad" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Años en la empresa</label>
				        <input class="form-control" value="<?php echo $datos['añosEmpresa']; ?>" name="añosEmpresa" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Departamento (<b>Departamento Actual: <?php echo $datos['nombre_departamento']; ?></b>)</label>
				      <select name="id_departamento" class="form-control">
				      	<?php while($row = mysqli_fetch_array($departamentos)){ ?>
				      		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>
				    <input value="<?php echo $datos['id']; ?>" name="id" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>