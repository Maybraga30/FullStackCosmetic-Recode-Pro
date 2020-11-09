<!Doctype html>
<html lang="pt-br">
<head><meta charset="UTF-8">
   <title>Full Stack Cosmetics</title>
   <link rel= "stylesheet" href="./CSS/Style2.css">
   <script src="./Javascript/JS.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
   
   <div class="container-fluid">
   
     <!--Início do menu-->
<?php
       include('menu.html');
?>
 
 <!--Fim do menu-->
 

  <main>

    <h2>Formulário de Pedidos</h2>
  <hr>

    <center><div id="formulariocontato">

     <form method='post' name='pedidos' action="">
        Nome do cliente:<br>
        <input type="text" name="nome_do_cliente"><br>
        Endereco:<br>
        <input type="text" name="endereco"><br>
        Telefone:<br>
        <input type="number" name="telefone"><br>
        Nome do produto:<br>
        <input type="text" name="nome_do_produto"><br>
        Valor unitário:<br>
        <input type="number" name="valor_unitario"><br>
        Quantidade:<br>
        <input type="number" name="quantidade"><br>
        Valor total:<br>
        <input type="number" name="valor_total"><br><br>
        <input type="submit" name="submit" value="Cadastrar pedido">
     </form>
    </div></center>
    
     <?php

     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "watercolor";

     $conn = mysqli_connect($servername,$username,$password,$database);
     if(isset($_POST['nome_do_cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) 
     && isset($_POST['nome_do_produto']) && isset($_POST['valor_unitario']) && isset($_POST['quantidade']) && isset($_POST['valor_total'])){

        echo "Dados Recebidos!";
         
      $nome_do_cliente = $_POST['nome_do_cliente'];
      $endereco = $_POST['endereco'];
      $telefone = $_POST['telefone'];
      $nome_do_produto = $_POST['nome_do_produto'];
      $valor_unitario = $_POST['valor_unitario'];
      $quantidade = $_POST['quantidade'];
      $valor_total = $_POST['valor_total'];
         
    $sql = "insert into pedidos (nome_do_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total) values ('$nome_do_cliente', '$endereco', '$telefone', '$nome_do_produto', '$valor_unitario', '$quantidade', '$valor_total')";
    
    $result = $conn->query($sql);
         
        if($result){
            echo "Dados inseridos com sucesso!";
        }else{
            echo "Dados não inseridos!";
        }
     
     }
     ?>
    
  </main>

  <footer>
   <div class="rodape"><img src="./Imagens/forma de pagamento daten - logos-cartoes_.jpg"></div><br>
     <div><p>&copy Mayara Braga da Silva</p></div>
   </footer>
  
 
  </body>
  </html>