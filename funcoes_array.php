<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Funções de Array</title>
    </head>    
    
    <body>
       <?php
        $listaNumeros = array(1, 3, 4, 5, 7, 9, 12, 14, 40, 44, 12, 25);
        
        
        // Funcao que exibe o maior número do array;
        echo max($listaNumeros);
        echo "<br>";
        
        // Funcao que exibe o menor número do array;
        echo min($listaNumeros);
        echo "<br>";
        
            
        // Funcao que ordena os números do array;
        sort($listaNumeros);
        print_r($listaNumeros);
        echo "<br>";
        
        // Funcao que ordena os números do array;
        $dados = array('Alexandre', 'Nascimento', '95555-00000');
        $implode = implode(',', $dados);
        echo $implode;
        echo "<br>";
        ?>
    </body>    
    
    
</html>    