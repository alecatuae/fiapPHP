<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>    
    
    <body>
       <?php
        $string = "Ninguem faltou hoje!";
        
        //conta quantos caracteres tem nesta string
        echo strlen($string);
        echo "<br>";
        
         //tudo maiusculo
        echo strtoupper($string);
        echo "<br>";
        
        //tudo minisculo
        echo strtolower($string);
        echo "<br>";
        
        //localiza caractere
        if(!strstr($string, '!')){
        
            echo "Não tem ponto de exclamação";
            echo "<br>";
        
        }else {
            echo "Tem ponto de exclamação";
            echo "<br>";
        };
        
        ?>
    </body>    
    
    
</html>    