<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Planner Rosinhas </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="imagex/png" href="assets/img/favis.png">

        <div class="navbar">
          <div class="logo">
            <a href="index.php" title="">
           <img src="assets/img/logo.png" alt="Erarich Stationery" width="125px"></a>
         </div>
             <nav>
               <ul id="menuitens">
                 <li> <a href="index.php" tittle=""> Home </a></li>
                 <li> <a href="produtos.php" tittle=""> Produtos </a></li>
                 <li> <a href="planners.php" tittle=""> Planners </a></li>
                 <li> <a href="cadernos.php" tittle=""> Cadernos </a></li>
                 <li> <a href="blocos.php" tittle=""> Blocos </a></li>
                 <li> <a href="colecoes.php" tittle=""> Coleções </a></li>
                 <li> <a href="promocoes.php" tittle=""> Promoções </a></li>
               </ul>
             </nav>
           <div class="icones">
            <a href="conta.php" alt="">
            <img src="assets/img/conta.svg" alt="Conta" width="30px" height="30px"></a>

            <a href="buscador.php" alt="">
            <img src="assets/img/buscador.svg" alt="Buscador" width="30px" height="30px"></a>

            <a href="carrinho.php" alt="">
            <img src="assets/img/carrinhodecompraspb1.png" alt="Carrinho de Compras" width="30px" height="30px"> </a>
            </div>


            </div>
            </head>
<body>


    <div class="corpo-categorias ver-produto">

  <div class="linha">
    <br><br>

    <div class="col-2">
       <img src="assets/img/produto-1.png" alt="" id="produtoimg" class="produtoimg">

        <div class="img-linha">
          <div class="img-col">
            <img src="assets/img/produto-1.png" alt="" class="produtominiatura">
          </div>
          <div class="img-col">
            <img src="assets/img/produto-2.png" alt="" class="produtominiatura">
          </div>
          <div class="img-col">
            <img src="assets/img/produto-3.png" alt="" class="produtominiatura">
          </div>
          <div class="img-col">
            <img src="assets/img/produto-4.png" alt="" class="produtominiatura">
          </div>
          </div>
        </div>
    <div class="col-2">
      <p class="produto-titulo"> PLANNER ROSINHAS</p>
      <h4 class="produto-preco"> R$190,00 </h4>

      <form action="carrinho.php" method="POST">
          <select name="product_wireo_color" id="wireo_color_planner_rosinhas" class="option-value">
              <option value=""> Selecione a cor do Wireo</option>
              <option value="BRANCO"> BRANCO </option>
              <option value="BRONZE"> BRONZE </option>
              <option value="DOURADO"> DOURADO </option>
              <option value="ROSÊ GOLD"> ROSÊ GOLD </option>
              <option value="PRATA"> PRATA </option>
              <option value="PRETO"> PRETO </option>
          </select>
          Quantidade: <input type="number" name="product_quantity" value="1" class="product-qtd" min="1">
          <input type="hidden" name="product_name" value="Planner Rosinhas">
          <input type="hidden" name="product_price" value="R$190,00">
          <input type="hidden" name="product_image" value="assets/img/produto-1.png">
          <input type="hidden" name="product_wireo_color_hidden" id="selectedWireoColor" value="">
          <button type="submit" name="add_to_cart" class="btn">Adicionar ao Carrinho</button>
      </form>
       <h3> Descrição: </h3>
        <p> Planner Rosinhas capa dura wire-o tamanho A5 com 100 folhas e 12 divisórias. Ideal para organizar seus compromissos e tarefas diárias. </p><br>
    </div>
    </div>
  </div>
 <div class="corpo-categorias">
      <h2 class="titulo"> Produtos Semelhantes </h2>
        <div class="linha">
        <div class="col-4">
          <a href="caderno-a5terracota.html" title="">
          <img src="assets/img/Produto--06.png"  alt="">
          <h4>Caderno A5 Terra Cota</h4>
          <p>R$80,00</p>
        </a>
        </div>
        <div class="col-4">
          <a href="caderno-flowers.html" title="">
          <img src="assets/img/produto-8.png"  alt="">
          <h4>Caderno Flower</h4>
          <p>R$80,00</p>
          </a>
        </div>
        <div class="col-4">
          <a href="caderno-inteligentefloral.html" title="">
          <img src="assets/img/Produto-6.png"  alt="">
          <h4>Caderno Inteligente Floral</h4>
          <p>R$180,00</p>
          </a>
        </div>
        <div class="col-4">
          <a href="bloco-terracota.html" title="">
          <img src="assets/img/Produto-7.png"  alt="">
          <h4>Bloco Terra Cota</h4>
          <p>R$50,00</p>
          </a>
        </div>
        </div>
      </div>
    <footer class="rodape" width="1545px" height="650px">
     <div class="container">
      <div class="linha">
         <div class="rodape">
         <div class="logope">
              <img src="assets/img/logobranco.png" alt="Logomarca" width="200px">
         </div>
         <p></p>
         <h3>© 2025 Erarich Stationery - Todos os Direitos Reservados</h3>
         <p></p>
         <br>
         <h4> Desenvolvido por Erica Durães </h4>
         <p></p>
        </div>
      </div>
     </div>
   </footer>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        // JavaScript to update the hidden input with the selected wireo color
        document.getElementById('wireo_color_planner_rosinhas').addEventListener('change', function() {
            document.getElementById('selectedWireoColor').value = this.value;
        });
    </script>
</body>
</html>