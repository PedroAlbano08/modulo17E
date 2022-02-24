<?php

   $masculino_status = 'unchecked';
   $feminino_status = 'unchecked';


if (isset($_POST["acao"])){ 

   $nome=$_POST["nome"]; 
   $telefone=$_POST["telefone"]; 
   $email=$_POST["email"]; 
   $msg=$_POST["mensagem"];
   $selected_radio = $_POST['genero'];

  

   echo "<p>Olá, ".$nome."</p>"; 

   echo "<p>Seu email é: ".$email."</p>"; 

   echo "<p>Seu telefone é: ".$telefone."</p>";

   if ($selected_radio == 'masculino') {
                $masculino_status = 'checked';
                echo "O seu genero é : Masculino";
          }
          else if ($selected_radio == 'feminino') {
                $feminino_status = 'checked';
                echo "O seu genero é : Feminino";
          }

   echo "<p>Sua mensagem é:<br/>".$msg."</p>"; 
} 

?>