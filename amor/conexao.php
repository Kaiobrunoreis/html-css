<?php
abstract class ClassConexao{
public function Conectar()
{
    try{
        $Con=new PDO("mysql:host=kaiosites.mysql.uhserver.com;dbname=kaiosites","kaioreis","159357xatM@");
        return $Con;
    }catch (PDOException $Erro){
        return $Erro->getMessage();
    }
}
}
?>