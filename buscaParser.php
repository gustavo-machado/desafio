<meta charset="UTF-8">

<?php

    extract($_POST);
    $xmlPacientes = simplexml_load_file("pacientes.xml");

    $var = $_POST['filtroDesejado'];
    $vars = $_POST['textoConsulta'];
    
    //print_r(array_keys($campos));
    

     foreach ($xmlPacientes -> children() as $paciente){
    //  echo $paciente ->getName();
         foreach ($paciente -> children() as $dadosPaciente){
    //         if ($dadosPaciente->getName() == $var && $dadosPaciente == $vars){
                echo $dadosPaciente;
    //         }
          }
     }
    
?>

