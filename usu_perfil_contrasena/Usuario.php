<?php

namespace es\ucm\fdi\aw;

use es\ucm\fdi\aw\Aplicacion as App;

class Usuario
{
//-------------------------------------------------------------------------------------------------------------------------------------------
//Alberto Caballero Es un boceto no terminada consulta.
  public static function changeEmail($correo)
  {
            if(!self::buscaUsuarioPorNombre($correo)){
          $app = App::getSingleton();
          $conn = $app->conexionBd();
          $query = sprintf("UPDATE usuarios(nombre) SET correo = '%s' WHERE usuarios.id = %s)"
                    ,$conn->real_escape_string($name),self::id());
          $rs = $conn->query($query);
          if($rs){
              echo"ok";
              return true;
          }
          else{
            echo"$conn->error";
            return false;
          }
      }
      else{
        
          return false;

      }
  }    
    
 //Alberto Caballero Es un boceto no terminada consulta.   
  public static function changePass($password)
  {
          $app = App::getSingleton();
          $conn = $app->conexionBd();
		  $name = $app->nombreUsuario();
		  $user = self::buscaUsuario($name);
		  if(!$user->compruebaPassword($password)){
			  $auxpass=password_hash($password,PASSWORD_DEFAULT);
			  echo"$auxpass";
			  $query = sprintf("UPDATE usuarios SET contraseña = '%s' WHERE usuarios.id = %s"
						,$conn->real_escape_string($auxpass), $user->id());
			  $rs = $conn->query($query);
			  if($rs){
				 echo"ok";
			  }
			  else{
				echo"$conn->error";
				return false;
			  }
		  }
  
  }
   //Alberto Caballero Es un boceto no terminada consulta. 
  public static function changeName($name)
  {
      if(!self::buscaUsuarioPorNombre($name)){
          $app = App::getSingleton();
          $conn = $app->conexionBd();
          $query = sprintf("UPDATE usuarios(nombre) SET nombre = '%s' WHERE usuarios.id = %s)"
                    ,$conn->real_escape_string($name),self::id());
          $rs = $conn->query($query);
          if($rs){
              echo"ok";
              return true;
          }
          else{
            return false;
          }
      }
      else{
        
          return false;

      }
  }
//Alberto Caballero Es un boceto no terminada consulta.
  public static function signin($name,$usermail, $password)
  {

    if(!self::buscaUsuario($usermail)){
            $app = App::getSingleton();
            $conn = $app->conexionBd();
            $auxpass=password_hash($password,PASSWORD_DEFAULT);
            $query = sprintf("INSERT INTO usuarios (nombre,correo, contraseña) VALUES ('%s','%s' , '%s')",$conn->real_escape_string($name),$conn->real_escape_string($usermail),$conn->real_escape_string($auxpass));
            $rs = $conn->query($query);
            if ($rs) {
                $user= new Usuario($conn->id,$name, $usermail, $auxpass); 
                return $user;
            }
            else{
                echo"$conn->error";
                return false;
            }
    }
    else{
        
        return false;
          
    }
    
  }
//-------------------------------------------------------------------------------------------------------------------------------------------
  public static function login($usermail, $password)
  {
    $user = self::buscaUsuario($usermail);
    if ($user && $user->compruebaPassword($password)) {
      $app = App::getSingleton();
      $conn = $app->conexionBd();
      $query = sprintf("SELECT R.nombre FROM rolesusuario RU, roles R WHERE RU.rol = R.id AND RU.usuario=%s", $conn->real_escape_string($user->id));
      $rs = $conn->query($query);
      if ($rs) {
        while($fila = $rs->fetch_assoc()) { 
          $user->addRol($fila['nombre']);
        }
        $rs->free();
      }
      return $user;
    }    
    return false;
  }

  public static function buscaUsuario($usermail)
  {
    $app = App::getSingleton();
    $conn = $app->conexionBd();
    $query = sprintf("SELECT * FROM usuarios WHERE correo='%s'", $conn->real_escape_string($usermail));
    $rs = $conn->query($query);
    if ($rs && $rs->num_rows == 1) {
		$fila = $rs->fetch_assoc(); 
		$user = new Usuario($fila['id'], $fila['nombre'], $fila['correo'], $fila['contraseña']);
		$rs->free();
		return $user;
    }
    return false;
  }
    
    
  public static function buscaUsuarioPorNombre($name)
  {
    $app = App::getSingleton();
    $conn = $app->conexionBd();
    $query = sprintf("SELECT * FROM usuarios WHERE nombre='%s'", $conn->real_escape_string($name));
    $rs = $conn->query($query);
    if ($rs && $rs->num_rows == 1) {
      $fila = $rs->fetch_assoc();
		$user = new Usuario($fila['id'], $fila['nombre'], $fila['correo'], $fila['contraseña']);
      $rs->free();
      return $user;
    }
      echo"$conn->error";
    return false;
  }

  private $id;

  private $usermail;

  private $password;

  private $roles;
  
  private $name;
  
  private function __construct($id, $name, $usermail, $password)
  {
    $this->id = $id;
	$this->name = $name;
    $this->usermail = $usermail;
    $this->password = $password;
    $this->roles = [];
  }

  public function id()
  {
    return $this->id;
  }

   public function nombre()
  {
    return $this->name;
  }
  
  public function addRol($role)
  {
    $this->roles[] = $role;
  }

  public function roles()
  {
    return $this->roles;
  }

  public function usermail()
  {
    return $this->usermail;
  }

  public function compruebaPassword($password)
  {
    return password_verify($password, $this->password);
  }

  public function cambiaPassword($nuevoPassword)
  {
    $this->password = password_hash($nuevoPassword, PASSWORD_DEFAULT);
  }
}
