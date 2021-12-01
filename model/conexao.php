<?php


    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'atividade_crud');
    
	if(!$conn){
            
		return "Erro Conexão!" ;
                
	}else{
            
		return $conn ;
    }
    

    
}
