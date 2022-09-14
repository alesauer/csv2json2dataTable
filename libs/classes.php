<?php

class Database
{
    function connect($query)
    {
        $_host = '127.0.0.1';
        $_user = 'financeiro';
        $_password = 'GxgLTr201@';
        $_database = 'temp-sauer';
        
        $conn = mysqli_connect($_host,$_user,$_password) or die("<h4>Erro: Conexão não pode ser realizada: $_host - $_user - $_password - $_database</h4>");
        $banco = mysqli_select_db($conn,$_database) or die("Erro: Banco de Dados não encontrado: $_database");
        mysqli_set_charset($conn,'utf8');
        $result = mysqli_query($conn,$query) or die("Erro: Query: $query");
        return($result);
        exit;
    }
}//end class


class Csv2Json
{

    function convert($fname)
    {
        // open csv file
        if(!($fp = fopen($fname, 'r'))) {
            die("Can't open file...");
        }
        
        //read csv headers
        $key = fgetcsv($fp,"1024",",");
        
        // parse csv rows into array
        $json = array();

        while ($row = fgetcsv($fp,"1024",","))
        {
        $json[] = array_combine($key, $row);
        }
    
        // release file handle
        fclose($fp);
    
        // encode array to json
        return json_encode($json);
    }
}//end class Csv2Json


?>
