<?php

namespace es\ucm\fdi\aw;

use es\ucm\fdi\aw\Aplicacion as App;

class Usuario
{

    
  public static function signin($username, $password)
  {
    if(!self::buscaUsuario($username)){
            $app = App::getSingleton();
            $conn = $app->conexionBd();
            $query = sprintf("INSERT INTO Usuarios (usuario, contraseña) VALUES ('%s' , %s)",$conn->real_escape_string($username),$conn->real_escape_string($password));
            $rs = $conn->query($query);
            if ($rs) {
                $user=new Usuario($conn->id, $username, $userpass);
                $rs= $user;
                return $rs;
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
  public static function login($username, $password)
  {
    $user = self::buscaUsuario($username);
    if ($user && $user->compruebaPassword($password)) {
      $app = App::getSingleton();
      $conn = $app->conexionBd();
      $query = sprintf("SELECT R.nombre FROM RolesUsuario RU, Roles R WHERE RU.rol = R.id AND RU.usuario=%s", $conn->real_escape_string($user->id));
      $rs = $conn->query($query);
        echo "$conn->error";
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

  public static function buscaUsuario($username)
  {
    $app = App::getSingleton();
    $conn = $app->conexionBd();
    $query = sprintf("SELECT * FROM Usuarios WHERE usuario='%s'", $conn->real_escape_string($username));
    $rs = $conn->query($query);
    if ($rs && $rs->num_rows == 1) {
      $fila = $rs->fetch_assoc();
      $user = new Usuario($fila['id'], $fila['usuario'], $fila['contraseña']);
      $rs->free();

      return $user;
    }
    return false;
  }

  private $id;

  private $username;

  private $password;

  private $roles;

  private function __construct($id, $username, $password)
  {
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->roles = [];
  }

  public function id()
  {
    return $this->id;
  }

  public function addRol($role)
  {
    $this->roles[] = $role;
  }

  public function roles()
  {
    return $this->roles;
  }

  public function username()
  {
    return $this->username;
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
