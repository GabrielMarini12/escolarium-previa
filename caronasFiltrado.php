<?php 
    include("bd/bd.php");

    $filial = $_POST["filial"];
    $valorMax = $_POST["priceInput"];

    $sql = "select f.cidade as Filial, c.local_saida as Local_Saida, c.horario_saida as Horario_Saida, c.horario_chegada as Horario_Chegada, c.dia_semana as Dia, p.nome as nome, p.sobrenome as sobrenome, c.preco as Valor from caronas c inner join filiaisFtec f on c.filial = f.id inner join pessoas p on p.id = c.id_pessoa where c.filial = {$filial};";

    $retornoConsulta = mysqli_query($conexao, $sql);
    include("bd/bdClose.php");
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
                    <form action="caronasFiltrado.php">
                        <select class="form-select unidadeSelect" aria-label="Default select example">
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
                    <input onBlur="verifyPriceInput()" id="priceInput" type="number" min="1" max="300" placeholder="R$">
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
                        <?php 
                        while($linha = mysqli_fetch_array($retornoConsulta)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $linha['Filial']; ?>
                            </td>
                            <td>
                              <?php echo $linha['Local_Saida']; ?>
                            </td>
                            <td>
                            <?php echo $linha['Horario_Saida']; ?>
                            </td>
                            <td>
                            <?php echo $linha['Horario_Chegada']; ?>
                            </td>
                            <td>
                            <?php echo $linha['Dia']; ?>
                            </td>
                            <td>
                            <?php echo $linha['nome']; ?>
                            <?php echo $linha['sobrenome']; ?>
                            </td>
                            <td>
                            <?php echo $linha['Valor']; ?>
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
    </div>
    <script src="/siteProgWebPrevia/js/caronas.js">
    </script>
</body>

</html>