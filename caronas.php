<?php
include("bd/bd.php");

$comandoSql = "select l.nome_livro as nome, l.genero as genero, l.autor as autor, l.ano as ano, p.nome as Nome_Dono, p.sobrenome as Sobrenome_Dono from livros l inner join pessoas p on p.id = l.dono_id";
$retornoConsulta = mysqli_query($conexao, $comandoSql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caronas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/siteProgWebPrevia/css/caronas.css">
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
            <h1>CARONAS</h1>
            <div class="HorizontalRow"></div>
            <div class="caronasDescription">
                <p>Nesta parte do portal vocë poderá encontrar caronas para a sua unidade de ensino. As caronas são
                    disponibilizadas pe
            </div>
            <div class="filters">
                <h3 style="margin-top: 8px; margin-right: 8px">Filtros:</h3>
                <div class="unidadeDiv">
                    <form action="caronasFiltrado.php" method="POST">
                        <select class="form-select unidadeSelect" aria-label="Default select example" id="filial" name="filial">
                            <option selected>Unidade Final</option>
                            <option value="1">Caxias do Sul</option>
                            <option value="2">Porto Alegre</option>
                            <option value="3">Novo Hamburgo</option>
                        </select>
                </div>
                <div class="timeInput">
                    <label for="timeInput">Horário de saida:</label>
                    <input id="timeInput" type="time" value="exitTime">
                </div>
                <div class="weekDaysSelect">
                    <div class="form-check form-switch daySelect">
                        <div class="dayLabel">S</div>
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                    <div class="form-check form-switch daySelect">
                        <div class="dayLabel">T</div>
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                    <div class="form-check form-switch daySelect">
                        <div class="dayLabel">Q</div>
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                    <div class="form-check form-switch daySelect">
                        <div class="dayLabel">Q</div>
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                    <div class="form-check form-switch daySelect">
                        <div class="dayLabel">S</div>
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                </div>
                <div class="maxPriceInput">
                    <label for="priceInput">Preço máximo:</label>
                    <input onBlur="verifyPriceInput()" id="priceInput" name="priceInput" type="number" min="1" max="300" placeholder="R$">
                    <input type="submit" id="filtrar" value="Filtrar">
                </div>
                </form>

            </div>
            <div class="tableDiv">
                <table id="tbl" class="table bookTable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Unidade Final</th>
                            <th scope="col">Local de saída</th>
                            <th scope="col">Horário de saída</th>
                            Escolarium caronas 2
                            <th scope="col">Horário de chegada</th>
                            <th scope="col">Dias da semana</th>
                            <th scope="col">Nome</th>
                            <th scope="col">R$</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="/siteProgWebPrevia/js/caronas.js"></script>
    <script src="js/script.js"></script>
</body>

</html>