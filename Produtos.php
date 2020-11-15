    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bd_watercolor";
  
 //criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

//verificando a conexão
if (!$conn) {
    die("A conexão ao BD falhou" . mysqli_connect_error());
}

?>

<!Doctype html>
<html lang="pt-br">
<head><meta charset="UTF-8">
   <title>Produtos - Watercolor</title>
   <link rel= "stylesheet" href="./CSS/Style.css">
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

<div id="sidebar">
   <h4>Categorias</h4>
   <ul class="menucategorias">
       <li onclick="exibir_todos()">Todos (13)</li>
       <li onclick="exibir_categoria('Maquiagens')">Maquiagens (5)</li>
       <li onclick="exibir_categoria('Perfumes')">Perfumes (3)</li>
       <li onclick="exibir_categoria('Produtos para a pele')">Produtos para a pele (2)</li>
       <li onclick="exibir_categoria('Produtos para os cabelos')">Produtos para os cabelos (3)</li>
   </ul>

</div>

     <main>
      <div>
         <h2>Produtos</h2><hr></div>
      
     <div class="mainprodutos">
         
<?php
        
         $sql = "select * from produtos";
  $result = $conn->query($sql);

 if($result->num_rows > 0){
     while($rows = $result->fetch_assoc()){
         
        
?>
    
     <div class="divprodutos" id="<?php echo $rows["categorias"]; ?>"
             <a href="#"><img src="<?php echo $rows["imagem"]; ?>" width="180px" onclick="destaque(this)">
             <p class="p3"><?php echo $rows["descricao"]; ?></p></a>
             <input class="btn1"
              type="button"
              value="Comprar">
             <p class="p1"><strike>R$ <?php echo $rows["preco"]; ?></strike></p>
                  <p class="p2">R$<?php echo $rows["precofinal"]; ?></p>
         </div>
    
<?php
    }
 } else {
     echo "Nenhum produto cadastrado";
 }

    ?>
 
     </main>
         <footer>
          <div class="rodape"><img src="./Imagens/forma de pagamento daten - logos-cartoes_.jpg"></div><br>
            <div><p>&copy Mayara Braga da Silva</p></div>
          </footer>

</body>
 </html>