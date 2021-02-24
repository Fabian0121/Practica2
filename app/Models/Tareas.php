<?php 

namespace Practica2;

class Tareas extends Conexion
{
	//Variables que recibiran datos
public $id_tarea;
public $nombre_Usuario;
public $titulo;	
public $materia;
public $fecha_entrega;
public $instrucciones;
	//Contructor vacio
	function __construct()
	{
		parent::__construct();
	}
	//CROD para crear una nueva tarea
	function crearTareas(){
		$pre = mysqli_prepare($this->con, "INSERT INTO tareas(nombre_Usuario,titulo,materia,fecha_entrega,instrucciones) VALUES (?,?,?,?,?)");
        $pre-> bind_param("sssss",$this->nombre_Usuario,$this->titulo,$this->materia,$this->fecha_entrega,$this->instrucciones);
        $pre-> execute();
	}
	//Con esta consulta se muestran todos los registros
	static function mostrarTareas(){
        $conexion = new Conexion();
        $pre= mysqli_prepare($conexion->con, "SELECT * FROM tareas");
        $pre->execute();
        $resultado = $pre->get_result();
        while ($objeto=mysqli_fetch_assoc($resultado)) {
            $tarea[]=$objeto;
        }
        return $tarea;
    }
    //Con esto se hace la consulta para editar un registro por medio de un ID que recibe
    function editarTarea()
	{
        $pre = mysqli_prepare($this->con, "UPDATE tareas SET nombre_Usuario=?,titulo=?,materia=?,fecha_entrega=?,instrucciones=? WHERE id_tarea=? ");
        $pre-> bind_param("sssssi",$this->nombre_Usuario,$this->titulo,$this->materia,$this->fecha_entrega,$this->instrucciones,$this->id_tarea);
        $pre-> execute();
    }
    //Con esto se hace la consulta para eliminar un registro por medio de un ID que se pasa
    function eliminarTareas()
    {
    	$conexion = new Conexion();
    	$pre= mysqli_prepare($conexion->con, "DELETE FROM  tareas WHERE id_tarea=?");
    	$pre->bind_param("i", $this->id_tarea);
    	$pre->execute();

    }
    //Con esta consulta se busca y muestra un registro
	static function mostrarTarea($dato){
        $conexion = new Conexion();
        $pre= mysqli_prepare($conexion->con, "SELECT * FROM tareas WHERE id_tarea=?");
        $pre->bind_param("i", $dato);
        $pre->execute();
        $resultado = $pre->get_result();
        $tarea=[];
        while ($objeto=mysqli_fetch_assoc($resultado)) {
            $tarea[]=$objeto;
        }
        return $tarea;
    }

}


?>