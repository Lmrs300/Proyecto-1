<?php namespace Models;

 class Departamento{

 	private $id;
 	private $nombre;
 	private $con;

 	public function __construct(){
 		$this->con = new Conexion();
 	}

 	public function set($atributo, $contenido){
		$this ->$atributo = $contenido;
	}

	public function get($atributo){
		return $this ->$atributo;
	}

	public function listar(){
		$sql = "SELECT * FROM departamentos";
		$datos = $this ->con->consultaRetorno($sql);
		return $datos;
	}

 	public function add(){
 		$sql = "INSERT INTO departamentos (id, nombre, imagen) VALUES (null, '{$this ->nombre}', '{$this->imagen}')";
 		$this ->con->consultaSimple($sql);
 	}

 	public function delete(){
 		$sql = "DELETE FROM departamentos WHERE id = '{$this ->id}'";
 		$this ->con->consultaRetorno($sql);
 	}

 	public function edit(){
 		$sql = "UPDATE departamentos SET nombre = '{$this ->nombre}' WHERE id = '{$this ->id}'";
 		$this->con->consultaSimple($sql);
 	}

 	public function view(){
 		$sql = "SELECT * FROM departamentos WHERE id = '{$this->id}'";
 		$datos = $this ->con->consultaRetorno($sql);
 		$row = mysqli_fetch_assoc($datos);
 		return $row;
 	}
 }

 ?>