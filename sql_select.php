<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
$sql =  "SELECT Country.name AS pais, 
                City.name AS capital,
                Country.population AS populacao,
                CountryLanguage.language  AS lingua                 
        FROM    Country
                INNER JOIN City 
                    ON Country.capital = City.ID
                INNER JOIN CountryLanguage 
                    ON Country.code = CountryLanguage.CountryCode";
}
else if($_SERVER["REQUEST_METHOD"] == "POST"){
    require("check_form.php");
    $sql =  "SELECT Country.name AS pais, 
                    City.name AS capital,
                    Country.population AS populacao,
                    CountryLanguage.language  AS lingua                 
            FROM    Country
                    INNER JOIN City 
                        ON Country.capital = City.ID
                    INNER JOIN CountryLanguage 
                        ON Country.code = CountryLanguage.CountryCode
            WHERE   Country.name LIKE '%" . $pais . "%'
                    AND City.name LIKE '%" . $capital . "%'
            ORDER BY "  . $campoOrdenacao . " " . $ordem;
}
?>