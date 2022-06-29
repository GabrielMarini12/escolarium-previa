<?php
    include("bd/bd.php");

    $comandoSql = "select l.nome_livro as nome, l.genero as genero, l.autor as autor, l.ano as ano, p.nome as Nome_Dono, p.sobrenome as Sobrenome_Dono from livros l inner join pessoas p on p.id = l.dono_id";
    $retornoConsulta = mysqli_query($conexao,$comandoSql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Livros</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/"
    />
    <link rel="stylesheet" href="/siteProgWebPrevia/css/livros.css" />
  </head>
  <body>
  <div class="container">
      <div class="hamburguer">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
        <div class="line" id="line3"></div>
        <span>fechar</span>
      </div>

      <aside class="sidebar">
        <nav>
          <ul class="menu">
            <li class="menu-item">
              <a href="index.html" class="menu-link">Home</a>
            </li>
            <li class="menu-item">
              <a href="index.html" class="menu-link">Conhecimento</a>
            </li>
            <li class="menu-item">
              <a href="index.html" class="menu-link">Projetos</a>
            </li>
            <li class="menu-item">
              <a href="index.html" class="menu-link">Contato</a>
            </li>
          </ul>
        </nav>
        <div class="social-media">
          <a href="https://pt-br.facebook.com/"
            ><i class="fab fa-facebook"></i
          ></a>
          <a href="https://github.com/"><i class="fab fa-github-alt"></i></a>
          <a
            href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D"
            ><i class="fab fa-twitter"></i
          ></a>
        </div>
      </aside>
    </div>
    <div class="mainBackground">
      <div class="mainPanel">
        <h1>LIVROS</h1>
        <div class="HorizontalRow"></div>
        <p>
          Aqui você irá encontrar uma grande variedade de livros, dentro de uma
          enorme distribuição de gêneros, de enciclopédias..
        </p>
        <div class="tableDiv">
          <table id="tbl" class="table bookTable table-striped">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Gênero</th>
                <th scope="col">Autor</th>
                <th scope="col">Ano</th>
                <th scope="col">Dono</th>
              </tr>
            </thead>
            <tbody>
              <?php 
               while($linha = mysqli_fetch_array($retornoConsulta)){
              ?>
              <tr>
                <td>
                  <?php echo $linha['nome']; ?>
                </td>
                <td>
                  <?php echo $linha['genero']; ?>
                </td>
                <td>
                  <?php echo $linha['autor']; ?>
                </td>
                <td>
                  <?php echo $linha['ano']; ?>
                </td>
                <td>
                  <?php echo $linha['Nome_Dono']; ?>
                </td>
                <td>
                  <?php echo $linha['Sobrenome_Dono']; ?>
                </td>
              </tr>
              <?php 
              }
              ?>
            </tbody>
          </table>

          <?php 
            include("bd/bdClose.php")
          ?>

        </div>
      </div>
      <div class="newBook">
        <div class="addBookTitle">
          <h1>ADICIONE LIVROS!</h1>
          <p>Agora você pode adicionar livros também :D</p>
        </div>
        <div class="addForm">
          <form id="addForm" class="innerAddForm" action="cadastroLivro.php" method="POST">
            <div class="formRow">
              <label for="name">Nome:</label>
              <input type="text" name="name" placeholder="Nome do livro" id="name" required />
            </div>
            <div class="formRow">
              <label for="gender">Gênero:</label>
              <input
                type="text"
                id="gender"
                name="gender"
                placeholder="Insira o gênero do livro"
                required
              />
            </div>
            <div class="formRow">
              <label for="autor">Autor:</label>
              <input type="text" id="autor" name="autor" placeholder="Autor do livro" required />
            </div>
            <div class="formRow">
              <label for="year">Ano:</label>
              <input type="text" id="year" name="year" placeholder="Ano de lançamento" required />
            </div>
            <button type="submit" class="addButton">Adicionar</button>
          </form>
        </div>
      </div>
    </div>
    <script src="/siteProgWebPrevia/js/livros.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
