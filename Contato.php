<!Doctype html>
<html lang="pt-br">
<head><meta charset="UTF-8">
   <title>Aonde Estamos - Watercolor</title>
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

  <h2>Fale Conosco</h2>
  <hr>

   <table id="tabelacontato">
    <tr>
        <td id="tdcontato"><img src="./Imagens/png-transparent-email-address-computer-icons-mail-miscellaneous-angle-triangle.png" width="40px">fullstackcosmetic@full.com</td>
        
    <td id="tdcontato"><img src="./Imagens/WhatsApp-icone.png" width="40px">(21)921221212</td>

    </tr>
   </table>

     <br><br><br><br>

   <h3 class="classeh3">Mande uma mensagem!</h3>

   <center><form id="formulariocontato">

  <label>Nome completo:</label>
     <input type="text" placeholder="Escreva seu nome aqui"><br><br>
  <label>Email:</label>
    <input type="text" placeholder="Escreva seu email aqui"><br><br>
  <label>Telefone:</label>
    <input type="number" placeholder="Escreva seu telefone aqui"><br><br>
  <label>Mensagem:</label>
    <textarea style placeholder="Escreva sua mensagem aqui"></textarea><br><br>
  <input type="submit" alue="Enviar">

    </center>
  </form>

  </main>

  <footer>
    <div class="rodape"><img src="./Imagens/forma de pagamento daten - logos-cartoes_.jpg"></div><br>
      <div><p>&copy Mayara Braga da Silva</p></div>
    </footer>
    
  
   </body>
   </html>
        