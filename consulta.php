<html>
  <head>
    <meta charset="UTF-8">
    <title>Busca de Informações do Paciente</title>
  </head>
  <body>

    <h1>HUCFF - Hospital Universitário Clementino Fraga Filho</h1>
    <p>Busca de Informações do Paciente</p>

    <?php
      $xmlPacientes = simplexml_load_file("pacientes.xml");
      $campos = array(
        "numeroPaciente" => "Número do Paciente (Entre 0 e 10000)",
        "logradourou_numero_complemento" => "Endereço (Logradouro + Número + Complemento)",
        "cep" => "CEP (8 digitos, todos juntos)",
        "telefone1_telefone2" => "Telefone (Todos os digitos juntos)",
        "txt_diaNascimento_txt_mesNascimento_txt_anoNascimento" => "Data de Nascimento (dd/mm/aaaa)",
        "sexo" => "Sexo (Masculino ou Feminino)",
        "estadoCivil" => "Estado Civil (Casado, Solteiro ou Não respondeu)",
        "ocupacao" => "Ocupação",
      );

      $keys = (array_keys($campos));
      print_r($keys);
    ?>
    <form action = "buscaParser.php" method = 'POST'>
      <fieldset>  
        <select name="filtroDesejado">
         <?php
            foreach ($campos as $parametros){
              echo ('<option name="params" value ="' .$parametros. '">' .$parametros. '</option>');
            }
          ?>
        </select>
        <input type="text" name="textoConsulta" id="textoConsulta">
        <input type="submit" value="Enviar">
      </fieldset>
    </form>

  </body>
</html>
