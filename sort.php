<?php
    $input = array("Pedro TI", "Ricardo TI", "Michelle Morgana", "Iara Fernandes","Edvan Neres", "Lucas Santos", "Caio", "André", "Henrique Terra","Victor Alves", "Filipe Ribeiro", "Gustavo Martins", "Daiane Carvalho");
    $rand_keys = array_rand($input, 2);
    $result = $input[$rand_keys[0]];
    echo "<p>$result</p>";

?>