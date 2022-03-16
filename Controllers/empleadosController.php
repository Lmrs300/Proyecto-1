<?php namespace Controllers;

	use Models\Empleado as Empleado;
	use Models\Departamento as Departamento;

	class empleadosController{

		private $empleado;
		private $departamento;

		public function __construct(){
			$this->empleado = new Empleado();
			$this->departamento = new Departamento();
		}

		public function index(){
			$datos = $this->empleado->listar();
			return $datos;
		}

		public function agregar(){
			if(!$_POST){
				$datos = $this->departamento->listar();
				return $datos;
			}else{
				
					$this->empleado->set("nombre", $_POST['nombre']);
					$this->empleado->set("edad", $_POST['edad']);
					$this->empleado->set("añosEmpresa", $_POST['añosEmpresa']);
					$this->empleado->set("id_departamento", $_POST['id_departamento']);
					$this->empleado->add();
					header("Location: " . URL . "empleados");
				}
			}

		public function editar($id){
			if(!$_POST){
				$this->empleado->set("id", $id);
				$datos = $this->empleado->view();
				return $datos;
			}else{
				$this->empleado->set("id", $_POST['id']);
				$this->empleado->set("nombre", $_POST['nombre']);
				$this->empleado->set("edad", $_POST['edad']);
				$this->empleado->set("añosEmpresa", $_POST['añosEmpresa']);
				$this->empleado->set("id_departamento", $_POST['id_departamento']);
				$this->empleado->edit();
				header("Location: " . URL . "empleados");
			}
		}

		public function listarDepartamentos(){
			$datos = $this->departamento->listar();
			return $datos;
		}

		public function ver($id){
			$this->empleado->set("id",$id);
			$datos = $this->empleado->view();
			return $datos;
		}

		public function eliminar($id){
			$this->empleado->set("id",$id);
			$this->empleado->delete();
			header("Location: " . URL . "empleados");
		}
	}



	$empleados = new empleadosController();
 ?>