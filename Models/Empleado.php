<?php namespace Models;

class Empleado{

	private $id;
	private $nombre;
	private $edad;
	private $añosEmpresa;
	private $id_departamento;
	private $fecha;
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
		$sql = "SELECT empleados.*, departamentos.nombre as nombre_departamento FROM empleados INNER JOIN departamentos ON empleados.id_departamento = departamentos.id ";
		$datos = $this->con->consultaRetorno($sql);
		return $datos;
	}

	public function add(){
		$sql = "INSERT INTO empleados(id,nombre, edad, añosEmpresa, id_departamento, fecha) VALUES (null, '{$this->nombre}','{$this->edad}','{$this->añosEmpresa}','{$this->id_departamento}', NOW())";
		$this->con->consultaSimple($sql);
	}

	public function delete(){
		$sql = "DELETE FROM empleados WHERE id = '{$this->id}'";
		$this ->con->consultaSimple($sql);

	}

	public function edit(){

		$sql = "UPDATE empleados SET nombre = '{$this->nombre}',edad = '{$this->edad}',añosEmpresa = '{$this->añosEmpresa}', id_departamento = '{$this->id_departamento}' WHERE id = '{$this->id}'";
		$this ->con->consultaSimple($sql);
	}

	public function view(){
		$sql = "SELECT empleados.*, departamentos.nombre as nombre_departamento FROM empleados INNER JOIN departamentos ON empleados.id_departamento = departamentos.id WHERE empleados.id = '{$this->id}'";
		$datos = $this->con->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;
	}
}


 ?>