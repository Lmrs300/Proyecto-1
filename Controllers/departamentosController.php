<?php namespace Controllers;

	use Models\Departamento as Departamento;

	class departamentosController{

		private $departamentos;

		public function __construct(){
			$this->departamentos = new Departamento();
		}
		public function index(){
			$datos = $this->departamentos->listar();
			return $datos;
		}

		public function agregar(){
			if($_POST){
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "Views" . DS . "template". DS . "imagenes" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
				$this->departamentos->set("nombre", $_POST['nombre']);
				$this->departamentos->set("imagen", $nombre);
				$this->departamentos->add();
				header('Location: '. URL . "departamentos");
				}
			}
		}

		public function editar($id){
			if($_POST){
				$this->departamentos->set("id", $_POST['id']);
				$this->departamentos->set("nombre", $_POST['nombre']);
				$this->departamentos->edit();
				header('Location: '. URL . "departamentos");
			}else{
				$this->departamentos->set("id", $id);
				$datos = $this->departamentos->view();
				return $datos;
			}
		}

		public function eliminar($id){
			$this->departamentos->set("id", $id);
			$this->departamentos->delete();
			header('Location: '. URL . "departamentos");
		}
	}

 ?>