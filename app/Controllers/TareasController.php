<?php  
require 'app/Models/Conexion.php';
require 'app/Models/Tareas.php';
use Practica2\Conexion;
use Practica2\Tareas;

class TareasController 
{
	
	//Funcion para crear tarea
	function crearTarea(){
		$tarea = new Tareas();
		$tarea->nombre_Usuario=$_POST['nombreUsuario'];
		$tarea->titulo=$_POST['titulo'];
		$tarea->materia=$_POST['materia'];
		$tarea->fecha_entrega=$_POST['fechaEntrega'];
		$tarea->instrucciones=$_POST['instrucciones'];
		$tarea->crearTareas();
		echo "Tarea creada";
		echo "<pre>";
        print_r($tarea);
        echo "</pre><hr>";
	}
	//Con esta funcion se editara la tarea seleccionada
	function editarTarea(){
		$tarea = new Tareas();
		$tarea->id_tarea=$_POST['id'];
		$tarea->nombre_Usuario=$_POST['nombreUsuario'];
		$tarea->titulo=$_POST['titulo'];
		$tarea->materia=$_POST['materia'];
		$tarea->fecha_entrega=$_POST['fechaEntrega'];
		$tarea->instrucciones=$_POST['instrucciones'];
		$tarea->editarTarea();
		echo "Registro actualizado";
	}
	//Con esta funcion se mostrara las tareas registradas
	function mostrarTodo(){
		$tareas=Tareas::mostrarTareas();
			echo "<pre>";
			print_r($tareas);
			echo "<pre><hr>";
	}
	//Funcion para eliminar una tarea 
	function eliminarTarea(){
		$tareas = new Tareas();
		$tareas->id_tarea=$_POST['id_eliminar'];
		$tareas->eliminarTareas();
		echo "La tarea ha sido eliminada ^-^";
	}
	//Con esta funcion se mostrara una tarea por su id
	function buscarTarea(){
		$id_tarea=$_POST['id'];
		$tareas=Tareas::mostrarTarea($id_tarea);
		if (isset($tareas[0])) {
		    echo "<pre>";
			print_r($tareas);
			echo "<pre><hr>";
		}else{
			echo "No hay tareas con este id";
			}
	}
}
?>