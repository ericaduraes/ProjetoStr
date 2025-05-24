<?php require_once('header.php')?>

 <!--INICIO DA CAIXA DE LISTAGEM-->



 <div class="corpo-categorias">

 <div class="pesquisa">
     <form action="listagemproduto.php" method="POST">
        <input type="text" id="inputBusca" onkeyup="filtrar()" type="text" placeholder="Digite Aqui..." required>
        <button type="submit" name="submit" class="btn" id="submitBusca"> Buscar </button>
        <ul id="listaProdutos" >
        <li>
          <a href="caderno-a5terracota.html">
          <img width="50"
          src="assets/img/Produto--06.png">
          <span class="item-name"> Caderno A5 Terra Cota</span>
          </a>
        </li>

        <li>
          <a href="caderno-a5nude.html">
          <img width="50"
          src="assets/img/Produto--07.png">
          <span class="item-name"> Caderno A5 Nude</span>
          </a>
        </li>

        <li>
          <a href="caderno-a5rosaserena.html">
          <img width="50"
          src="assets/img/produto-3.png">
          <span class="item-name"> Caderno A5 Rosa Serena</span>
          </a>
        </li>

        <li> 
          <a href="caderno-a5rosaserena.html">
          <img width="50"
          src="assets/img/produto-4.png">
          <span class="item-name"> Agenda Rosinhas</span>
          </a>
        </li>

        <li> 
          <a href="plannerrosinhas.php">
          <img width="50"
          src="assets/img/produto-1.png">
          <span class="item-name"> Planner Rosinhas</span>
          </a>
        </li>

        <li>
          <a href="combo-3uniterracota.php">
          <img width="50"
          src="assets/img/produto-5.png">
          <span class="item-name"> Combo 3uni Terra Cota</span>
          </a>
        </li>

        <li>
          <a href="caderno-inteligentefloral.html">
          <img width="50"
          src="assets/img/produto-6.png">
          <span class="item-name"> Caderno Inteligente Floral</span>
          </a>
        </li>

        <li>
          <a href="bloco-terracota.html">
          <img width="50"
          src="assets/img/produto-7.png">
          <span class="item-name"> Bloco de Notas Terra Cota</span>
          </a>
        </li>

        <li>
          <a href="caderno-flower.html">
          <img width="50"
          src="assets/img/produto-8.png">
          <span class="item-name"> Caderno Flower</span>
          </a>
        </li>

        <li>
          <a href="caderno-inteligenterosas.html">
          <img width="50"
          src="assets/img/produto-2.png">
          <span class="item-name"> Caderno Inteligente Rosas</span>
          </a>
        </li>

        <li> 
          <a href="combo-2uniterracota.html">
          <img width="50"
          src="assets/img/categorias-3.png">
          <span class="item-name"> Combo 2uni Terra Cota </span>
          </a>
        </li>

        <li>
          <a href="combo-2unirosas.html">
          <img width="50"
          src="assets/img/categorias-1.png">
          <span class="item-name"> Combo 2uni Rosas</span>
          </a>
        </li>

        <li>
          <a href="combo-2univinho.html">
          <img width="50"
          src="assets/img/categorias-2.png">
          <span class="item-name"> Combo 2uni Vinho</span>
          </a>
        </li>

        </ul>
     </form>

   </div>
   </div>


           <div class=" linha linha2">
            <h2> Todos os Produtos</h2>
            <select name="" id="">
                <option value="">Relevancia</option>
                <option value="">Menor Preço</option>
                <option value="">Maior Preço</option>
            </select>
           </div>
      <!--FIM DA CAIXA DE LISTAGEM-->

    

        <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
        <div class="linha" id="produtosFiltrar">

        <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
        <div class="col-4" id="produtoS">
          <a href="caderno-a5terracota.html" title="">
          <img src="assets/img/Produto--06.png"  alt="">
          <h4>Caderno A5 Terra Cota</h4>
          <p>R$80,00</p>
        </a>

        </div>
        <!--FIM ITEM PRODUTOS EM DESTAQUE-->

         <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
         <div class="col-4" id="produtoS">
          <a href="caderno-a5nude.html" title="">
          <img src="assets/img/Produto--07.png"  alt="">
          <h4>Caderno A5 Nude</h4>
          <p>R$80,00</p>
          </a>

        </div>
        <!--FIM ITEM PRODUTOS EM DESTAQUE-->

         <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
         <div class="col-4" id="produtoS">
          <a href="caderno-a5rosaserena.html" title="">
          <img src="assets/img/produto-3.png"  alt="">
          <h4>Caderno A5 Rosa Serena</h4>
          <p>R$80,00</p>
          </a>
        </div>

        <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
        <div class="col-4" id="produtoS">
            <a href="agendarosinhas.html" title="">
            <img src="assets/img/produto-4.png"  alt="">
            <h4>Agenda Rosinhas</h4>
            <p>R$100,00</p>
            </a>
          </div>
          <!--FIM ITEM PRODUTOS EM DESTAQUE-->

        <!--FIM ITEM PRODUTOS EM DESTAQUE-->
        </div>

    
        

<!--INICIO ITEM PRODUTOS EM DESTAQUE II -->
<div class="linha" id="produtosFiltrar">
  
<div class="col-4">
    <a href="combo-3uniterracota.php" title="">
    <img src="assets/img/produto-5.png"  alt="">
    <h4>Combo 3uni Terra Cota</h4>
    <p>R$200,00</p>
    </a>
  </div>
  <!--FIM ITEM PRODUTOS EM DESTAQUE-->

   <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
   <div class="col-4" id="produtoS">
    <a href="caderno-inteligentefloral.html" title="">
    <img src="assets/img/produto-6.png"  alt="">
    <h4>Caderno Inteligente Floral</h4>
    <p>R$180,00</p>
    </a>

  </div>
  <!--FIM ITEM PRODUTOS EM DESTAQUE-->

   <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
   <div class="col-4" id="produtoS">
    <a href="bloco-terracota.html" title="">
    <img src="assets/img/produto-7.png"  alt="">
    <h4> Bloco de Notas Terra Cota</h4>
    <p>R$50,00</p>
    </a>

  </div>
  <!--FIM ITEM PRODUTOS EM DESTAQUE-->

   <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
   <div class="col-4" id="produtoS">
    <a href="caderno-flowers.html" title="">
    <img src="assets/img/produto-8.png"  alt="">
    <h4>Caderno Flowers</h4>
    <p>R$80,00</p>
    </a>
</div>
</div>
<!--FIM ITEM PRODUTOS EM DESTAQUE II-->




<!--INICIO ITEM PRODUTOS EM DESTAQUE III-->
<div class="linha" id="produtosFiltrar">

    <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
    <div class="col-4" id="produtoS">
      <a href="plannerrosinhas.php" title="">
      <img src="assets/img/produto-1.png"  alt="">
      <h4>Planner Rosinhas</h4>
      <p>R$190,00</p>
      </a>

    </div>
    <!--FIM ITEM PRODUTOS EM DESTAQUE-->

     <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
     <div class="col-4" id="produtoS">
      <a href="caderno-inteligenterosas.html" title="">
      <img src="assets/img/produto-2.png"  alt="">
      <h4>Caderno Inteligente Rosas</h4>
      <p>R$150,00</p>
      </a>

    </div>
    <!--FIM ITEM PRODUTOS EM DESTAQUE-->

     <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
     <div class="col-4" id="produtoS">
      <a href="combo-2unirosas.html" title="">
      <img src="assets/img/categorias-1.png"  alt="">
      <h4>Combo 2uni Rosas</h4>
      <p>R$130,00</p>
      </a>

    </div>

    <!--INICIO ITEM PRODUTOS EM DESTAQUE-->
    <div class="col-4" id="produtoS">
      <a href="combo-2uniterracota.html" title="">
      <img src="assets/img/categorias-3.png"  alt="">
      <h4>Combo 2uni Terra Cota</h4>
      <p>R$130,00</p>
      </a>

      </div>
      <!--FIM ITEM PRODUTOS EM DESTAQUE-->

    <!--FIM ITEM PRODUTOS EM DESTAQUE III-->
    </div>



  
      

      <!--INICIO PAGINAÇÃO-->
      <div class="paginacao">
         <span>1</span>
         <span>2</span>
         <span>3</span>
         <span>&#8594;</span>
      </div>
      <!--FIM PAGINAÇÃO-->
      

<?php require_once('footer.php')?>