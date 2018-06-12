<?php
  require_once("connect.php");
  session_start();
  if($_POST){
    if(validate($_POST)){
      $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('".$_POST['nome']."','".$_POST['email']."','".md5($_POST['senha'])."')";
      if ($conn->query($sql) === TRUE) {
         $_SESSION['message'] = "Cadastro realizado com sucesso!";
         $_SESSION['nome'] = $_POST['nome'];
         $_SESSION['email'] = $_POST['email'];
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }      
      header('Location: index.php');
    }else{
      $_SESSION['message'] = "Erro ao cadastrar";
      header('Location: register.php');
    }
  }


  function validate($user){
    if(!$user['nome']){
      return false;
    }
    if(!$user['email']){
      return false;
    }
    if(!$user['senha']){
      return false;
    }
    
    return true;
  }

  $conn->close();
?>