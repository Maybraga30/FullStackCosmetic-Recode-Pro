<!Doctype html>
<html lang="pt-br">
<head><meta charset="UTF-8">
   <title>Contato - Watercolor</title>
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
        <td id="tdcontato"><img src="./Imagens/png-transparent-email-address-computer-icons-mail-miscellaneous-angle-triangle.png" width="40px">watercolorcosmetics@full.com</td>
        
    <td id="tdcontato"><img src="./Imagens/WhatsApp-icone.png" width="40px">(21)921221212</td>

    </tr>
   </table>

     <br><br><br><br>

   <h3 class="classeh3">Mande uma mensagem!</h3>
      
      
      
      
     <center><div class="text-info"><form id="formulariocontato">
  <div class="form-group">
    <label for="inputName">Nome completo:</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Seu nome aqui...">
  </div>
  <div class="form-group">
    <label for="inputEmail">Email:</label>
    <input type="text" class="form-control" id="inputemail" placeholder="Seu email aqui...">
  </div>
    <div class="form-group col-md-6">
      <label for="inputNumber">Telefone:</label>
      <input type="number" class="form-control" id="inputNumber">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Escreva sua mensagem...</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Clique em mim
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
      </form></div></center>
      
      
  
  </main>

  <footer>
    <div class="rodape"><img src="./Imagens/forma de pagamento daten - logos-cartoes_.jpg"></div><br>
      <div><p>&copy Mayara Braga da Silva</p></div>
    </footer>
    
  
   </body>
   </html>
        