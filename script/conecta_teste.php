<?php
    class ClassConexao{
        public function Conectar(){
            try{
                $Con=new PDO("mysql:host=localhost;dbname=u104395534_contadorSite","u104395534_pedroamerico4","Pol2006@");
                return $Con;
            }catch (PDOException $Erro){
                return $Erro->getMessage();
            }
        }
        }
?>