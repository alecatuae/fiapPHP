<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 6</title>
    </head>    
    
    <body>
        
        <?php
        
        
            function sorteioMega() {
                   
                $numeros = array();
                while(count($numeros) < 6) {
                    $valor = rand(1,60);
                    $numeros[$valor] = $valor;
                    
                }
                
                // executa o sorteio dos numeros
                //    for($contador = 0; $contador < 6; $contador++){
                //         $numeros[] = rand(1,60);
                //            
                //    }
                    
                     //ordena os numeros sorteados
                     sort($numeros);
                    
                     $implode = implode(' - ', $numeros);
                     echo $implode;
                     
            }
            
        sorteioMega();
        
        ?>
       
    </body>    
    
    
</html>    