<?php
    class sorteadores{
        public function sortPassword(){
            $numeros = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
            $valores = array("Verdade", "Seguranca", "Qualidade", "Resultado","Evolucao");
            $alfabeto = array("A", "B", "C", "D", "E", "F", "G", "H", "I","J", "L", "M", "N", "O","P", "Q", "R", "S", "T", "U", "V", "X", "W");
            $char_esp = array("!", "@", "#", "$", "%", "&", "*", "_", "-","+", "=");
            $condicao = array_rand($numeros, 2);
            $resultCondicao = $numeros[$condicao[0]];

            $num = array_rand($numeros, 2);
            $resultNum = $numeros[$num[0]];
            $val = array_rand($valores, 2);
            $resultVal = $valores[$val[0]];
            $alf = array_rand($alfabeto, 2);
            $resultAlf = $alfabeto[$alf[0]];
            $char = array_rand($char_esp, 2);
            $resultChar = $char_esp[$char[0]];

            /*
            sorteador de arrays
            $arrayFinal = array($resultChar, $resultAlf, $resultVal, $resultNum);
            $result1 = array_rand($arrayFinal, 2);
            $result01 = $arrayFinal[$result1[0]];
            $result011 = $arrayFinal[$result1[1]];
            $result2 = array_rand($arrayFinal, 2);
            $result02 = $arrayFinal[$result2[0]];
            $result022 = $arrayFinal[$result2[1]];
            echo "<p>$result01$result011$result02$result022</p>";
            */


            if($resultCondicao == "0"){
                echo "<p>$resultNum$resultVal$resultAlf$resultChar</p>";
            }else if($resultCondicao == "1"){
                echo "<p>$resultNum$resultAlf$resultVal$resultChar</p>";
            }else if($resultCondicao == "2"){
                echo "<p>$resultAlf$resultNum$resultChar$resultVal</p>";
            }else if($resultCondicao == "3"){
                echo "<p>$resultChar$resultVal$resultNum$resultAlf</p>";
            }else if($resultCondicao == "4"){
                echo "<p>$resultAlf$resultNum$resultChar$resultVal</p>";
            }else if($resultCondicao == "5"){
                echo "<p>$resultNum$resultVal$resultAlf$resultChar</p>";
            }else if($resultCondicao == "6"){
                echo "<p>$resultVal$resultAlf$resultChar$resultNum</p>";
            }else if($resultCondicao == "7"){
                echo "<p>$resultNum$resultChar$resultVal$resultAlf</p>";
            }else if($resultCondicao == "8"){
                echo "<p>$resultChar$resultNum$resultVal$resultAlf</p>";
            }else {
                echo "<p>$resultVal$resultNum$resultAlf$resultChar</p>";
            }
        }
        public function sortCafe(){
            $input = array("Pedro TI", "Ricardo TI", "Michelle Morgana", "Iara Fernandes","Edvan Neres", "Lucas Santos", "Caio", "André", "Henrique Terra","Victor Alves", "Filipe Ribeiro", "Gustavo Martins", "Daiane Carvalho");
            $rand_keys = array_rand($input, 2);
            $result = $input[$rand_keys[0]];
            echo "<p>$result</p>";
        }

    }
    
?>