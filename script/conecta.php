<?php
    abstract class ClassConexao{
        public function Conectar()
        {
            try{
                $Con=new PDO("mysql:host=31.220.104.197;dbname=u104395534_contadorSite","u104395534_pedroamerico4","Pol2006@");
                return $Con;
            }catch (PDOException $Erro){
                return $Erro->getMessage();
            }
        }
        }
?>