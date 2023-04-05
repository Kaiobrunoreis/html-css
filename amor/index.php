<?php
include ("conexao.php");
class ClassVisitas extends ClassConexao{
    private $Id, $Ip , $Data , $Hora , $Limite;

    #Construtor para setar atributos
    public function __construct()
    {
        $this->Id=0;
        $this->Ip=$_SERVER['REMOTE_ADDR'];
        $this->Data=date("Y/m/d");
        $this->Hora=date("H:i");
        $this->Limite=50;
    }

    #Inseri a visita no banco de dados
    private function InserindoVisitas()
    {
        $Select=$this->Conectar()->prepare("insert into visitas values (:id , :ip , :datas , :hora)");
        $Select->bindParam(":id",$this->Id,PDO::PARAM_STR);
        $Select->bindParam(":ip",$this->Ip,PDO::PARAM_STR);
        $Select->bindParam(":datas",$this->Data,PDO::PARAM_STR);
        $Select->bindParam(":hora",$this->Hora,PDO::PARAM_STR);
        $Select->execute();
    }
}
header("location: index1.html");
?>