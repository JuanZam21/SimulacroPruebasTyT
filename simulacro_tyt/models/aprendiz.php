<?php
require "conexion.php";

class Aprendiz
{
    public $di;
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $contraseña;

    function __construct($di,$nombre,$apellido,$telefono,$email,$contraseña){
        $this->di = $di;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->contraseña = $contraseña;
    }

   public function CrearAprendiz()
    {
        $consulta = "INSERT INTO aprendiz(null,$di,$nombre,$apellido,$telefono,$email,$contraseña);";
        $ejecutar = mysqli_query($conexion,$consulta);
        $filas= mysqli_num_rows($ejecutar);
        if($filas>0){
            return true;
        }
        return false;
    }

    public function ActualizarAprendiz()
    {
        $consulta = "UPDATE INTO aprendiz set nombre=$nombre,apellido=$apellido,telefono=$telefono,email=$email,contraseña=$contraseña where di=$di;";
        $ejecutar = mysqli_query($conexion,$consulta);
        $filas= mysqli_num_rows($ejecutar);
        if($filas>0){
            return true;
        } 
        return false;
    }

    public function EliminarAprendiz()
    {
        $consulta = "DELETE FROM aprendiz where di=$di;";
        $ejecutar = mysqli_query($conexion,$consulta);
        $filas= mysqli_num_rows($ejecutar);
        if($filas>0){
            return true;
        } 
        return false;
    }

    public function ListarAprendices()
    {
        $consulta = "SELECT * FROM aprendiz";
        $ejecutar = mysqli_query($conexion,$consulta);
        $filas= mysqli_num_rows($ejecutar);
        if($filas>0){
            return $consulta;
        } 
        return false;
    }
    
}









?>