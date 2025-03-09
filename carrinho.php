<?php require_once('header.php')?>



<!---  INICIO CARRINHO DE COMPRAS  -->
<div class="corpo-categorias carrinho-compras">

      <!---  INICIO TABELA DO CARRINHO DE COMPRAS  --> 

        <table>
            <tr>
               <th> Produto </th>
               <th> Quantidade </th>
               <th> Valor </th>
            </tr>
            
            <!---  INICIO ITEM DO CARRINHO DE COMPRAS I --> 
            <tr>
                <td>
                   <div class="info-carrinho">
                    <img src="assets/img/produto-5.png" width="200px" alt="" >

                    <div>
                        <p> Combo 3uni Terra Cota</p>
                        <small> Valor: R$200,00 </small>
                        <br>
                        <a href="" title=""> Remover </a>
                    </div>

                   </div>  
                </td>


                <td> 
                    <form action="" method="post">
                        <input type="number" name="" id="" value="1" >
                    </form>
                </td>
                <td> R$200,00 </td>
            </tr>
            <!---  FIM ITEM DO CARRINHO DE COMPRAS  I --> 


            <!---  INICIO ITEM DO CARRINHO DE COMPRAS  II--> 
            <tr>
              <td>
                 <div class="info-carrinho">
                  <img src="assets/img/categorias-2.png" width="200px" alt="" >

                  <div>
                      <p> Combo 2uni Vinho</p>
                      <small> Valor: R$130,00 </small>
                      <br>
                      <a href="" title=""> Remover </a>
                  </div>

                 </div>  
              </td>


              <td> 
                  <form action="" method="post">
                      <input type="number" name="" id="" value="1" >
                  </form>
              </td>
              <td> R$130,00 </td>
          </tr>
          <!---  FIM ITEM DO CARRINHO DE COMPRAS  II--> 



          <!---  INICIO ITEM DO CARRINHO DE COMPRAS  III--> 
          <tr>
            <td>
               <div class="info-carrinho">
                <img src="assets/img/Produto--07.png" width="200px" alt="" >

                <div>
                    <p> Caderno A5 Nude </p>
                    <small> Valor: R$80,00 </small>
                    <br>
                    <a href="" title=""> Remover </a>
                </div>

               </div>  
            </td>


            <td> 
                <form action="" method="post">
                    <input type="number" name="" id="" value="1" >
                </form>
            </td>
            <td> R$80,00 </td>
        </tr>
        <!---  FIM ITEM DO CARRINHO DE COMPRAS  III--> 


        </table><br>
      <!---  FIM TABELA DO CARRINHO DE COMPRAS  -->       
    
      <!---  INICIO DO VALOR TOTAL  -->
      <div class="valor-total">
        <table>

          <tr>
            <td> Sub-total:</td>
            <td> R$410,00</td>
          </tr>

          <tr>
            <td> Frete:</td>
            <td> R$20,00</td>
          </tr><br>

          <tr>
            <td> TOTAL:</td>
            <td> R$430,00</td>
          </tr>

        </table>
  
      
      </div>
      <!---  FIM DO VALOR TOTAL  -->


</div>
<!---  FIM CARRINHO DE COMPRAS  -->



<?php require_once('footer.php')?>