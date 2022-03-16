<div class="box-principal">
<h3 class="titulo">Listado de Empleados<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de empleados</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Nombre</th>
		      <th>Edad</th>
		      <th>Departamento</th>
		      <th>Años en la empresa</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
					<td><a href="<?php echo URL; ?>empleados/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
			    	<td><?php echo $row['edad']; ?></td>
			    	<td><?php echo $row['nombre_departamento']; ?></td>
			    	<td><?php echo $row['añosEmpresa']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>empleados/editar/<?php echo $row['id']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>empleados/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>