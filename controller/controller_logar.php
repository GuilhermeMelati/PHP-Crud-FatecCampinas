<?php  
      
if ( isset($_POST['acao']) ){
    
include_once '../model/crud.php' ;   

$email = $_POST['email'];
$senha = md5($_POST['senha']);

echo $senha;

$selecionar = new crud();
$selecionar -> selecionar_Usuario($email, $senha);
        
}      
   
