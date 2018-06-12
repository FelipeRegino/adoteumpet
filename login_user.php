<?php
  require_once("connect.php");
  session_start();
  
  if($_POST){
    if(validate($_POST)){
      $sql = "SELECT * FROM usuario WHERE email = '". $_POST['email']."'";
      $result = $conn->query($sql);
      if($result){
        $data = $result->fetch_assoc();
        if($data['senha'] == md5($_POST['senha'])){
          $_SESSION['nome'] = $data['nome'];
          $_SESSION['email'] = $data['email'];
          $_SESSION['message'] = "";
          header('Location: index.php');
        }else{
          $_SESSION['message'] = "Senha incorreta";
          header('Location: login.php');
        }
      }else{
        $_SESSION['message'] = "Email invalido";
        header('Location: login.php');
      }
          
    }else{
      $_SESSION['message'] = "Informações faltando";
      header('Location: login.php');
    }
  }
  
  function validate($user){
    if(!$user['email']){
      return false;
    }
    if(!$user['senha']){
      return false;
    }
    
    return true;
  }
?>