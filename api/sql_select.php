<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "SELECT Country.name AS pais, 
                City.name AS capital,
                Country.population AS populacao,
                GROUP_CONCAT(CountryLanguage.language SEPARATOR ', ') AS lingua                
        FROM    Country
                INNER JOIN City 
                    ON Country.capital = City.ID
                INNER JOIN CountryLanguage 
                    ON Country.code = CountryLanguage.CountryCode 
        GROUP BY Country.name, City.name, Country.population
        LIMIT 50";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("check_form.php");
    $limite = ($qtde != "" && $qtde > 0) ? "LIMIT $qtde" : "";
    $sql = "SELECT Country.name AS pais, 
                    City.name AS capital,
                    Country.population AS populacao,
                    GROUP_CONCAT(CountryLanguage.language SEPARATOR ', ') AS lingua                 
            FROM    Country
                    INNER JOIN City 
                        ON Country.capital = City.ID
                    INNER JOIN CountryLanguage 
                        ON Country.code = CountryLanguage.CountryCode
            WHERE   Country.name LIKE '%" . $pais . "%'
                    AND City.name LIKE '%" . $capital . "%'
            GROUP BY Country.name, City.name, Country.population
            ORDER BY " . $campoOrdenacao . " " . $ordem . " $limite";
}
?>