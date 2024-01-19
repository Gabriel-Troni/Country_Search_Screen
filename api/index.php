<?php //require("db_connection.php") ?>
<?php require("sql_select.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de país</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Lista de Países</h1>
        <form action="index.php" method="POST" class="mb-3">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <input type="text" class="form-control" placeholder="Buscar País" name="pais" value="">
                </div>
                <div class="col-md-4 mb-2">
                    <input type="text" class="form-control" placeholder="Buscar Capital" name="capital" value="">
                </div>
            </div>
            <p>Ordenar por:</p>
            <div class="row">
                <div class="col-md-2 mb-2">
                    <select class="form-control" name="campoOrdenacao">
                        <option value="pais">País</option>
                        <option value="capital">Capital</option>
                        <option value="populacao">População
                        </option>
                        <option value="lingua">Línguas</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2">
                    <select class="form-control" name="ordem">
                        <option value="">Crescente</option>
                        <option value="desc">Decrescente</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2">
                    <input type="text" class="form-control" placeholder="Número de buscas" name="qtde" value="">
                </div>
                <div class="col-md-2 mb-2">
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
            </div>
        </form>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>País</th>
                    <th>Capital</th>
                    <th>População</th>
                    <th>Línguas faladas</th>
                </tr>
            </thead>
            <tbody>
                <?php /*
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                        <th>" . $row['pais'] . "</th>
                                        <th>" . $row['capital'] . "</th>
                                        <th>" . $row['populacao'] . "</th>
                                        <th>" . $row['lingua'] . "</th>
                                    </tr>";
                    }
                    ;
                }
                ; */
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php //mysqli_close($conn) ?>