<?php
/*
*    Descrição do arquivo
*     @autor - Davi Mizael
*     @data de criação -09/10/2018 08:12:01
*     @arquivo - Municipios.controller.class.php
*/

//Inclui a classe generica CRUD
require_once("../../functions/crud.class.php");

class MunicipiosController extends Crud {

    //Método construtor
    public function __construct() {
    //Passa como parametro a tabela
    parent::__construct("Municipios");
    }

    //lista tudo do banco de municipios
    public function listaMunicipios() {
        return $this->execute_query("SELECT * FROM Municipios");
    }

    //cidades por estados
    public function cidadesPorEstado($estado, $ordem='A') {
        //ordenando por ordem cresc. ou decres.
        $ordem =='A' ? $complemento = 'ASC' : $complemento = 'DESC';

        switch($estado) {
            case "AC":
                $estado = "Acre";
                break;
            case "AL":
                $estado = "Alagoas";
                break;
            case "AP":
                $estado = "Amapa";
                break;
            case "AM":
                $estado = "Amazonas";
                break;
            case "BA":
                $estado = "Bahia";
                break;
            case "CE":
                $estado = "Ceara";
                break;
            case "DF":
                $estado = "Distrito Federal";
                break;
            case "ES":
                $estado = "Espirito Santo";
                break;
            case "GO":
                $estado = "Goias";
                break;
            case "MA":
                $estado = "Maranhao";
                break;
            case "MT":
                $estado = "Mato Grosso";
                break;
            case "MS":
                $estado = "Mato Grosso do Sul";
                break;
            case "MG":
                $estado = "Minas Gerais";
                break;
            case "PA":
                $estado = "Para";
                break;
            case "PB":
                $estado = "Paraiba";
                break;
            case "PR":
                $estado = "Parana";
                break;
            case "PE":
                $estado = "Pernambuco";
                break;
            case "PI":
                $estado = "Piaui";
                break;
            case "RR":
                $estado = "Roraima";
                break;
            case "RO":
                $estado = "Rondonia";
                break;
            case "RJ":
                $estado = "Rio de Janeiro";
                break;
            case "RN":
                $estado = "Rio Grande do Norte";
                break;
            case "RS":
                $estado = "Rio Grande do Sul";
                break;
            case "SC":
                $estado = "Santa Catarina";
                break;
            case "SP":
                $estado = "Sao Paulo";
                break;
            case "SE":
                $estado = "Sergipe";
                break;
            case "TO":
                $estado = "Tocantins";
                break;
        }

        $sql = "SELECT nomemunicipio FROM Municipios WHERE nomedauf='".$estado."' ORDER BY municipio ".$complemento.";";
        return $this->execute_query($sql);
    }

    //quantidade de cidades por estado
    public function quantidadeCidadesPorEstado($estado) {
        $sql = "SELECT count(nomemunicipio) FROM Municipios WHERE nomedauf='".$estado."';";
        return $this->execute_query($sql);
    }

    //cidades da mesorregião
    public function cidadesMesorregiao($mesorregiao, $ordem='A') {
        //ordenando por ordem cresc. ou decres.
        $ordem =='A' ? $complemento = 'ASC' : $complemento = 'DESC';

        $sql = "SELECT nomemunicipio FROM Municipios WHERE nomemesorregiaogeografica='".$mesorregiao."' ORDER BY nomedauf ".$complemento.";";
        return $this->execute_query($sql);
    }

 //cidades da microrregiao
    public function cidadesMicrorregiao($microrregiao, $ordem='A') {
      //ordenando por ordem cresc. ou decres.
        $ordem =='A' ? $complemento = 'ASC' : $complemento = 'DESC';

        $sql = "SELECT nomemunicipio FROM Municipios WHERE nomemicrorregiao=".$microrregiao." ORDER BY nomedauf ".$complemento.";";
        return $this->execute_query($sql);
 }

    //codigo do municipio por expressao
    public function codigoMunicipioPorExpressao($expressao, $ordem='A') {
            //ordenando por ordem cresc. ou decres.
        $ordem =='A' ? $complemento = 'ASC' : $complemento = 'DESC';

        $sql = "SELECT municipio FROM Municipios WHERE nomemicrorregiao LIKE '%".$expressao."%' ORDER BY ".$ordem.";";
        return $this->execute_query($sql);
    }

    //populacao de municipio por código completo
    public function populacaoPorCodigo($codigo, $ordem='A') {
        //ordenando por ordem cresc. ou decres.
        $ordem =='A' ? $complemento = 'ASC' : $complemento = 'DESC';

        $sql = "SELECT Habitantes.populacao FROM Habitantes INNER JOIN Municipios ON Municipios.municipiocompleto=Habitantes.cod_municipio WHERE Municipios.municipiocompleto='".$codigo."';";
        return $this->execute_query($sql);
    }
    
    //soma da população do estado
    public function somaPopulacaoPorEstado($estado, $ordem='A') {
        //ordenando por ordem cresc. ou decres.
        $ordem =='A' ? $complemento = 'ASC' : $complemento = 'DESC';

        $sql = "SELECT sum(Habitantes.populacao) FROM Habitantes INNER JOIN Municipios ON Municipios.municipiocompleto=Habitantes.cod_municipio WHERE Municipios.nomedauf='".$estado."';";
        return $this->execute_query($sql);
    }

    //soma da população do estado
    public function populacaoPorMicrorregiao($nomemicrorregiao, $ordem='A') {
        //ordenando por ordem cresc. ou decres.
        $ordem =='A' ? $complemento = 'ASC' : $complemento = 'DESC';

        $sql = "SELECT sum(Habitantes.populacao) FROM Habitantes INNER JOIN Municipios ON Municipios.municipiocompleto=Habitantes.cod_municipio WHERE Municipios.nomemicrorregiao='".$nomemicrorregiao."';";
        return $this->execute_query($sql);
    }

    //municipios por codigo ou nome
    public function municipiosPorCodigoNome($expressao) {
        $sql = " 
                SELECT mu.municipiocompleto,
                    mu.nomedauf,
                    mu.nomemunicipio,
                    ha.populacao
                FROM Municipios AS mu
                INNER JOIN Habitantes AS ha ON ha.cod_municipio = mu.municipiocompleto
                WHERE mu.nomemunicipio LIKE '%".$expressao."%' OR mu.municipiocompleto LIKE '%".$expressao."%'
                ORDER BY mu.nomemunicipio;";
        return $this->execute_query($sql);
    }

    //municipios por codigo
    public function municipioPorCodigo($codigo) {
        $sql = "
                SELECT mu.municipiocompleto,
                        mu.nomedauf,
                        mu.nomemunicipio,
                        mu.nomemesorregiao,
                        mu.nomemicrorregiao,
                        ha.populacao
                FROM Municipios AS mu
                INNER JOIN Habitantes AS ha ON ha.cod_municipio = mu.municipiocompleto
                WHERE mu.municipiocompleto = ".$codigo."
                ORDER BY mu.nomemunicipio;";

        return $this->execute_query($sql);    
    }
}
?>