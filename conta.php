<?php require_once('header.php')?>
<br><br><br>

<!-- INICIO DA CONTA DO USUÁRIO -->
<div class="minha-conta">

<!--INICIO CONTAINER DA CONTA DO USUÁRIO -->
<div class="container">


   <div class="col-2">

   <div class="formulario">

    <div class="btn-form">
        <span onclick="Entrar()"> Entrar</span>
        <span onclick="Cadastro()"> Cadastrar</span>
        <hr id="Indicador">
    </div>

     <form action="entrar.php" method="POST" id="EntrarPainel">
        <input type="email" name="email" id="" placeholder="E-mail de acesso" required>
        <input type="password" name="senha" id="" placeholder="Digite sua senha" required>
        <button type="submit" name="senEntrar" class="btn"> Entrar </button>
        <a href="" title=""> Esqueceu sua senha? </a>
     </form>

     <form action="cadastrar.php" method="POST" id="CadastroSite">
        <input type="text" name="nome" id="" placeholder="Nome Completo" required>
        <input type="email" name="email" id="" placeholder="E-mail" required>
        <input type="password" name="senha" id="" placeholder="Digite sua senha" required>
        <button type="submit" name="sendCadastro" class="btn"> Cadastrar </button>
     </form>
    

   </div>
   </div>



</div>
<!-- FIM CONTAINER DA CONTA DO USUÁRIO -->
 <br><br><br>

</div>
<!-- FIM DA CONTA DO USUÁRIO -->

<?php require_once('footer.php')?>