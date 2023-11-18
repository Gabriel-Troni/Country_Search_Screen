<?php require("db_connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de país</title>
    <!-- Adicionando Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Países</h1>
        <form action="search.php" method="post" class="mb-3">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <input type="text" class="form-control" placeholder="Buscar País" name="pais">
                </div>
                <div class="col-md-4 mb-2">
                    <input type="text" class="form-control" placeholder="Buscar Capital" name="capital">
                </div>
            </div>
            <p>Ordenar por:</p>
            <div class="row">
                <div class="col-md-2 mb-2">
                    <select class="form-control" name="ordenar">
                        <option value="pais">País</option>
                        <option value="capital">Capital</option>
                        <option value="populacao">População</option>
                        <option value="lingua">Línguas</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2">
                    <select class="form-control" name="">
                        <option value="">Crescente</option>
                        <option value="desc">Decrescente</option>
                    </select>
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
                <?php 
                    $sql = "SELECT  Country.name AS pais, 
                                    City.name AS capital,
                                    Country.population AS populacao,
                                    CountryLanguage.language  AS lingua
                                    
                            FROM    Country
                                    INNER JOIN City 
                                        ON Country.capital = City.ID
                                    INNER JOIN CountryLanguage 
                                        ON Country.code = CountryLanguage.CountryCode";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                                    <th>" . $row['pais'] . "</th>
                                    <th>" . $row['capital'] . "</th>
                                    <th>" . $row['populacao'] . "</th>
                                    <th>" . $row['lingua'] . "</th>
                                </tr>";
                        };
                    };
                ?>
            </tbody>
        </table>
    </div>

    <!-- Adicionando jQuery e Bootstrap JS (necessários para alguns componentes do Bootstrap funcionarem) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php mysqli_close($conn) ?>