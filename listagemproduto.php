<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Produtos </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php
     if ( isset ( $_POST['produto'])) {
        $produto = $_POST['produto'];
     } else {
        $produto = '';
     }

     require "conexao.php";
     $sql = "SELECT * FROM produto WHERE nome LIKE '%$produto%' ";
     $dados = mysqli_query ($conexao, $sql);
     
    ?>


    <div class="container">

  <nav class="navbar navbar-light bg-light">

  <div class="container-fluid">
    <form class="form-inline" action="listagemproduto.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="produto">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<table class="table">

    <thead>
        <tr>
           <th> Nome </th>
           <th> Categoria </th>  
           <th> Preço </th>
        </tr>

    </thead>
    <tbody>

    <?php
      while ($linha = mysqli_fetch_assoc($dados)) {
        $nome = $linha ['nome'];
        $categoria = $linha ['categoria'];
        $preco = $linha ['preco'];

        echo "<tr>
              <td> $nome </td>
              <td> $categoria </td>
              <td> $preco </td>
              </tr>";
      }

    ?>



    </tbody>


</table>

    </div>
    
    
</body>